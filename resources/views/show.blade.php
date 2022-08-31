<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($course as $kurs)
                        Course name: <strong>{{$kurs->name}}</strong>
                        <p>Course videos:</p>
                        @foreach ($kurs->videos as $video)
                            <div class="border border-gray-200">
                                <p><strong>Part:{{$loop->iteration}}</strong></p> 
                                <a class="text-blue-400 ml-5" href="{{$video->url}}">{{$video->url}}</a>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
