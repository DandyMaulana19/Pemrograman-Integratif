<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="inline-flex px-4 py-2 bg-white rounded">
                    <a href="{{ route('user') }}" class="p-5 font-medium rounded">User</a>
                </div>
                <div class="inline-flex px-4 py-2 bg-white rounded">
                    <a href="{{ route('koleksi') }}" class="p-5 font-medium rounded">Koleksi</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
