<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $user;

    public $property0;
    public $property1;
    public $property2;

    protected $rules = [
        // Define your validation rules here if needed.
    ];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->property0 = $user->property0;
        $this->property1 = $user->property1;
        $this->property2 = $user->property2;
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if ($this->getRules()) {
            $this->validate();
        }

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('User') ])]);

        $this->user->update([
            'property0' => $this->property0,
            'property1' => $this->property1,
            'property2' => $this->property2,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.user.update', [
            'user' => $this->user
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('User') ])]);
    }
}
