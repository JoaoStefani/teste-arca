<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Business') }}
        </h2>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-12 text-center" :errors="$errors" />

    <x-message-success class="mb-12 text-center" :errors="$errors" />
    @if(session()->has('success'))
        <x-message-success class="mb-12 text-center" :success="session()->get('success')" />
    @endif

    @if(session()->has('error'))
        <x-message-success class="mb-12 text-center" :errors="session()->get('error')" />
    @endif

    <x-cart>
        <form method="POST" action="{{ route('businessstore') }}">
            @csrf
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="telephone" :value="__('Telephone')" />

                <x-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required />
            </div>

            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

            <div class="mt-4">
                <x-label for="zip_code" :value="__('Zip Code')" />

                <x-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code" :value="old('zip_code')" required />
            </div>

            <div class="mt-4">
                <x-label for="city" :value="__('City')" />

                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
            </div>

            <div class="mt-4">
                <x-label for="state" :value="__('State')" />

                <x-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required />
            </div>

            <div class="mt-4">
                <x-label for="description" :value="__('Description')" />

                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required/>
            </div>
            {{-- <div class="mt-4">

                <x-label for="description" :value="__('Description')" />

                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>

            </div> --}}
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-cart>
</x-app-layout>
