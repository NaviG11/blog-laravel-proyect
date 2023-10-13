<x-app-layout>
    <div class="container py-8">
        <div class="w-full mx-auto">
            <h2 class="text-4xl text-purple-300 leading-8 font-bold mt-2">Centros</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($centers as $document)
                    <div class="bg-white p-4 border border-gray-200 rounded-lg shadow-md">
                        {{-- {{ Storage::url($post->image->url) }} --}}
                        <img src="{{ Storage::url($document->Logo) }}" alt="{{ $document->Nombre }}"
                            class="w-full h-40 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $document->Nombre }}</h3>
                            <p class="text-gray-600 mt-2">{{ $document->Descripcion }}</p>
                            <p class="text-gray-600 mt-2">{{ $document->Ubicacion }}</p>
                            <p class="text-gray-600 mt-2">{{ $document->Ciudad }}</p>
                            <a href="{{ $document->Correo }}"
                                class="text-blue-500 hover:text-blue-700 hover:underline mt-4">
                                {{ $document->Correo }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</x-app-layout>
