<x-app-layout>
    <div class="container py-8">
        <div class="w-full mx-auto">
            <h2 class="text-4xl text-purple-300 leading-8 font-bold mt-2">Videos</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                {{-- @foreach ($videos as $document)
                    <div class="bg-white p-4 border border-gray-200 rounded-lg shadow-md">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $document->title }}</h3>
                            <p class="text-gray-600 mt-2">{{ $document->description }}</p>
                            <p class="text-gray-600 mt-2">{{ $document->type }}</p>
                            <p class="text-gray-600 mt-2">{{ $document->video_url }}</p>
                            <a href="http://{{ $document->video_url }}"
                                class="text-blue-500 hover:text-blue-700 hover:underline mt-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span class="underline">Ver video</span>
                        </div>
                    </div>
                @endforeach --}}
                {{-- @foreach ($videos as $document)
                    <div class="bg-white p-4 border border-gray-200 rounded-lg shadow-md mb-4">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $document->title }}</h3>
                            <p class="text-gray-600 mt-2">{{ $document->description }}</p>
                            <p class="text-gray-600 mt-2">{{ $document->type }}</p>
                            <p class="text-gray-600 mt-2">{{ $document->video_url }}</p>
                            <a href="{{ $document->video_url }}" target="_blank"
                                class="text-blue-500 hover:text-blue-700 hover:underline mt-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span class="underline">Ver video</span>
                            </a>
                        </div>
                    </div>
                @endforeach --}}
                @foreach ($videos as $document)
                    <div class="bg-white p-4 border border-gray-200 rounded-lg shadow-md mb-4">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $document->title }}</h3>
                            <p class="text-gray-600 mt-2">{{ $document->description }}</p>
                            <p class="text-gray-600 mt-2">{{ $document->type }}</p>

                            {{-- Video iframe --}}
                            <div class="mt-2">
                                <iframe width="100%" height="315" src="{{ $document->video_url }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            {{-- Video URL --}}
                            <a href="{{ $document->video_url }}" target="_blank"
                                class="text-blue-500 hover:text-blue-700 hover:underline mt-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span class="underline">Ver video</span>
                            </a>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
</x-app-layout>
