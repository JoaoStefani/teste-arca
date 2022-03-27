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
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
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
                        <div class="mt-6">
                            <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
                                {{ __('Business Finder') }}
                            </h2>
                        </div>

                        <div class="flex flex-wrap px-6 py-4 bg-white">
                            <form method="GET" class="w-full max-w-lg" action="{{ route('webcome') }}">
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-label for="search" :value="__('Search')" />

                                        <x-input id="search" class="block mt-1 w-full" type="text" name="search" :value="old('search')" required />
                                    </div>

                                    <div class="w-full md:w-1/2 px-3 mt-6">
                                        <x-label for="search"/>
                                        <x-button class="ml-4">
                                            {{ __('Search') }}
                                        </x-button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="p-6 bg-white border-b border-gray-200">

                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Name</th>
                                        <th scope="col" class="px-6 py-3">Telephone</th>
                                        <th scope="col" class="px-6 py-3">Address</th>
                                        <th scope="col" class="px-6 py-3">Zip Code</th>
                                        <th scope="col" class="px-6 py-3">City</th>
                                        <th scope="col" class="px-6 py-3">State</th>
                                        <th scope="col" class="px-6 py-3">Description</th>
                                        <th scope="col" class="px-6 py-3">View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($busicess))
                                        @foreach ($busicess as $item)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td scope="row" class="px-6 py-4">{{ $item->name }}</td>
                                                <td class="px-6 py-4">{{ $item->telephone }}</td>
                                                <td class="px-6 py-4">{{ $item->address }}</td>
                                                <td class="px-6 py-4">{{ $item->zip_code }}</td>
                                                <td class="px-6 py-4">{{ $item->city }}</td>
                                                <td class="px-6 py-4">{{ $item->state }}</td>
                                                <td class="px-6 py-4">{{ $item->description }}</td>
                                                <td class="px-6 py-4">
                                                    <a href="{{ url('/business/' . $item->id . '/view') }}">
                                                        <svg class="h-5 w-5 text-blue-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="2" />  <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" />  <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" /></svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <td class="px-6 py-4">
                                            <ul class="mt-3 text-sm text-red-600">
                                                <li>No record found!!!</li>
                                            </ul>
                                        </td>
                                    @endif
                                </tbody>
                            </table>
                            @if(count($busicess))
                                <div class="mt-4">
                                    {{ $busicess->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
