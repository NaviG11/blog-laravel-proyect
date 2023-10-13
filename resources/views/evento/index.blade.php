<x-app-layout>
    <div class="container py-8">
        <div class="w-full mx-auto">
            <h2 class="text-4xl text-purple-300 leading-8 font-bold mt-2">Eventos</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($eventos as $document)
                    <div class="bg-white p-4 border border-gray-200 rounded-lg shadow-md">
                        <img src="{{ Storage::url($document->Imagen) }}" alt="{{ $document->Nombre }}"
                            class="w-full h-40 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $document->Nombre }}</h3>
                            <p class="text-gray-600 mt-2">{{ $document->Descripcion }}</p>
                            <p class="text-gray-600 mt-2">{{ $document->Lugar }}</p>
                            <p class="text-gray-600 mt-2">{{ $document->Fecha }}</p>
                            <a href="http://{{ $document->Link }}"
                                class="text-blue-500 hover:text-blue-700 hover:underline mt-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span class="underline">Web</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
