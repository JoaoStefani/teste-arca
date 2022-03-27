<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       <!-- Styles -->
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">

       <!-- Scripts -->
       <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="mt-6">
                                <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                                    {{ __('Business Finder') }}
                                </h2>
                            </div>

                            <div class="mt-4">
                                <x-label for="name" :value="__('Name')" />
                                {{ $busicess->name }}
                            </div>

                            <div class="mt-4">
                                <x-label for="telephone" :value="__('Telephone')" />
                                {{ $busicess->telephone }}
                            </div>

                            <div class="mt-4">
                                <x-label for="address" :value="__('Address')" />
                                {{ $busicess->address }}
                            </div>

                            <div class="mt-4">
                                <x-label for="zip_code" :value="__('Zip Code')" />
                                {{ $busicess->zip_code }}
                            </div>

                            <div class="mt-4">
                                <x-label for="city" :value="__('City')" />
                                {{ $busicess->city }}
                            </div>

                            <div class="mt-4">
                                <x-label for="state" :value="__('State')" />
                                {{ $busicess->state }}
                            </div>

                            <div class="mt-4">
                                <x-label for="description" :value="__('Description')" />
                                {{ $busicess->description }}
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    <a href="{{ route('webcome') }}">
                                        {{ __('Go back') }}
                                    </a>
                                </x-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

