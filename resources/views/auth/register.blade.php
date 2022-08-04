<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nama Instansi/Lembaga')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus  />

                <x-validation-message class="mb-4" name="name" />
            </div>
            
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />

                <x-validation-message class="mb-4" name="email" />
            </div>
            
            <!-- phone Number -->
            <div class="mt-4">
                <x-label for="no_wa" :value="__('No Wa Aktif')" />

                <x-input id="no_wa" class="block mt-1 w-full" type="number" name="no_wa" :value="old('no_wa')" />

                <x-validation-message class="mb-4" name="no_wa" />
            </div>

            <div class="mt-4">
                <select id="role" name="role" class="block mt-1 w-full">
                    <option value= "">Pilih Role</option>
                    @foreach ($roles as $role)
                        @if ($role->id != 1 && $role->id != 7)
                            <option value={{ $role->id }}>{{ $role->name }}</option>                       
                        @endif
                    @endforeach
                </select>
                <x-validation-message class="mb-4" name="role" />
            </div>
            
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Kata Sandi')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                autocomplete="new-password" />

                <x-validation-message class="mb-4" name="password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" />

                <x-validation-message class="mb-4" name="password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Sudah Registrasi ?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrasi') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
