
{{-- Original --}}
<x-jet-form-section submit="updateProfileInformation">
<x-slot name="title">
    @if(Auth::user()->role=='0') {{ __('Profile Information') }}
    @endif
    </x-slot>

    <x-slot name="description">
        @if(Auth::user()->role=='0')   {{ __('Update your account\'s profile information and email address.') }} @endif
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->

        <div  class="col-span-6 sm:col-span-4">
            @if(Auth::user()->role=='1')   You can edit details below @endif
        </div>
        @if(Auth::user()->role=='0')
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo" />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->Firstname }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        {{-- <!-- PROFILE PHTO -->
        <div class="col-span-6 sm:col-span-4">
            @if ($msg = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $msg }}</strong>
            </div>
          @endif
           <form action="{{ route('upload-propic') }}" method="POST" enctype="multipart/form-data">
                <x-jet-label for="propic" value="{{ __('Upload Profile Photo') }}" />
                <input type="file" name="propic" />
                <x-jet-input-error for="propic" class="mt-2" />
                <x-jet-button name="submit" class="ml-4">  {{ __('Upload') }}  </x-jet-button>
           </form>


p        </div> --}}

        <!-- FirstName -->

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="firstname" value="{{ __('Firstame') }}" />
            <x-jet-input id="firstname" type="text" class="mt-1 block w-full" wire:model.defer="state.Firstname" autocomplete="Firstname" />
            <x-jet-input-error for="firstname" class="mt-2" />
        </div>

        <!-- LastName -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="lastname" value="{{ __('Lastname') }}" />
            <x-jet-input id="lastname" type="text" class="mt-1 block w-full" wire:model.defer="state.lastname" autocomplete="lastname" />
            <x-jet-input-error for="lastname" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Home Address -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="address" value="{{ __('Home Address') }}" />
            <x-jet-input id="address" type="address" class="mt-1 block w-full" wire:model.defer="state.address" />
            <x-jet-input-error for="address" class="mt-2" />
        </div>
        @endif
    </x-slot>

    <x-slot name="actions">
        @if(Auth::user()->role=='0')  <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button  wire:loading.attr="disabled"  wire:target="photo">
            {{ __('Save') }}
        </x-jet-button> @endif
    </x-slot>
</x-jet-form-section>

