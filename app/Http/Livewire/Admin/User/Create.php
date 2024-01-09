<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $property0;
    public $property1;
    public $property2;

    protected $rules = [
        // Define your validation rules here if needed.
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if ($this->getRules()) {
            $this->validate();
        }

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('User') ])]);

        User::create([
            'property0' => $this->property0,
            'property1' => $this->property1,
            'property2' => $this->property2,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.user.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('User') ])]);
    }
}

