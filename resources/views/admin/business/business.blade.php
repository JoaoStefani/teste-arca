<x-app-layout>
    <x-slot name="header">
        <div class="ml-6">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Business') }}
            </h2>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4 text-right">
                <a href="{{ route('createbusiness') }}">
                    {{ __('Register') }}
                </a>
            </x-button>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($busicess as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td scope="row" class="px-6 py-4">{{ $item->name }}</td>
                                    <td class="px-6 py-4">{{ $item->telephone }}</td>
                                    <td class="px-6 py-4">{{ $item->address }}</td>
                                    <td class="px-6 py-4">{{ $item->zip_code }}</td>
                                    <td class="px-6 py-4">{{ $item->city }}</td>
                                    <td class="px-6 py-4">{{ $item->state }}</td>
                                    <td class="px-6 py-4">{{ $item->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $busicess->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
