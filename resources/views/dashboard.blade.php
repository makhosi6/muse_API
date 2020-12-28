<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')

                            <x-jet-section-border />
                        @endif
                    <!--START-->
                        <div class="mt-10 sm:mt-0">
                            <x-jet-action-section>
                                <x-slot name="title">
                                    {{ __('Access Token') }}
                                </x-slot>
                                <x-slot name="description">
                                    {{ __("Please keep your 'access token' secure.") }}
                                </x-slot>
                                <x-slot name="content">
                                    <div style="border-color: #d2d6dc;border-width: 1px;border-radius: .375rem;padding: .5rem .75rem;" class="mt-1 block w-full" >
                                        <span style="color: #374151; font-weight: bold">
                                           {{Auth::user()->near_me }} {{ csrf_token() }}
                                        </span>
                                    </div>
                                    <div class="mt-5">
                                        <a href="{{ route('api-tokens.index') }}">
                                        <x-jet-secondary-button class="ml-3">
                                            {{ __('Manage Tokens') }}
                                        </x-jet-secondary-button>

                                    </a>
                                    </div>
                                </x-slot>
                            </x-jet-action-section>
                         </div>
                <!--END-->
                         <x-jet-section-border />
                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.update-password-form')
                            </div>

                            <x-jet-section-border />
                        @endif

                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.two-factor-authentication-form')
                            </div>

                            <x-jet-section-border />
                        @endif

                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>

                        <x-jet-section-border />

                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
