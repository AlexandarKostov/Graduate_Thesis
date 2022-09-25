<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500 light:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 light:bg-gray-700 light:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        Course
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Lectures
                                    </th>
                                    <th scope="col" class="py-3 px-6"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $kurs)
                                <tr class="bg-white border-b light:bg-gray-800 light:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap light:text-white">
                                    {{ $kurs->course->name }}
                                    </th>
                                    <td class="py-4 px-6">
                                    {{ $kurs->course->lectures }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <a href="{{ route('dashboard.courses.show', $kurs->course->slug) }}" class="font-medium text-blue-600 hover:underline">View more</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>