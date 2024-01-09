<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('User') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.user.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('User')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
                        <!-- 0 Input -->
            <div class='form-group'>
                <label for='input-0' class='col-sm-2 control-label '> {{ __('0') }}</label>
                <input type='text' id='input-0' wire:model.lazy='0' class="form-control  @error('0') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('0') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- 1 Input -->
            <div class='form-group'>
                <label for='input-1' class='col-sm-2 control-label '> {{ __('1') }}</label>
                <input type='email' id='input-1' wire:model.lazy='1' class="form-control  @error('1') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('1') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- 2 Input -->
            <div class='form-group'>
                <label for='input-2' class='col-sm-2 control-label '> {{ __('2') }}</label>
                <input type='text' id='input-2' wire:model.lazy='2' class="form-control  @error('2') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('2') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.user.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
