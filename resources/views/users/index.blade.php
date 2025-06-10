<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-indigo-100 leading-tight bg-indigo-600 p-4 rounded-md shadow">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-blue-900">
                    <h3 class="text-lg font-semibold mb-4">{{ __("User Management") }}</h3>

                    <div class="overflow-x-auto">

                        

                        <table class="w-full divide-y divide-indigo-300">
                            <thead class="bg-indigo-100">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-indigo-700 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-indigo-200">
                                @foreach ($users as $user)
                                    <tr class="@if($loop->odd) bg-blue-100 @else bg-blue-200 @endif hover:bg-indigo-50 transition duration-150 ease-in-out">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-900">{{ $user->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-900">{{ $user->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-800">{{ $user->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="{{ route('users.edit', $user->id) }}"
                                               class="inline-flex items-center px-3 py-1 bg-teal-500 text-black text-xs font-semibold rounded-md hover:bg-teal-600 transition">
                                                Edit
                                            </a>
                                            {{-- 
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-2 text-red-600 hover:underline text-xs">Delete</button>
                                            </form> 
                                            --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                       <div class="mt-4">
                            {{ $users->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
