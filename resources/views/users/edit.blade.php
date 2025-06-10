<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Maklumat Pengguna') }} : {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Nama Penuh</label>
                        <p class="mt-1 text-base text-gray-900">{{ $user->name }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Alamat Emel</label>
                        <p class="mt-1 text-base text-gray-900">{{ $user->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
