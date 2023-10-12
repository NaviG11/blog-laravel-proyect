<x-app-layout>
    {{-- Contenido de la pagina donde se vera documentos como pdf o docs --}}
    <div class="container py-8">
        {{-- @foreach ($documents as $document)
                <article class="w-ful h-80 bg-cover bg-center rounded-lg">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <h1 class="text-4xl text-purple-300 leading-8 font-bold mt-2">
                            <a class="hover:text-purple-400" {{ route('documents.show', $document) }}">
                                {{ $document->name }}
                            </a>
                        </h1> --}}

        <div class="w-full mx-auto">
            <h2 class="text-4xl text-purple-300 leading-8 font-bold mt-2">Documentos</h2>
            <div class="container mx-auto p-4 sm:p-6 lg:p-8">
                <div class="overflow-x-auto">
                    <table class="w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 text-left text-sm font-semibold text-gray-600 uppercase">
                                    Título</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 text-left text-sm font-semibold text-gray-600 uppercase">
                                    Descripción</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 text-left text-sm font-semibold text-gray-600 uppercase">
                                    Tipo</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 text-left text-sm font-semibold text-gray-600 uppercase">
                                    Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documents as $document)
                                <tr>
                                    <td class="px-6 py-4 border-b border-gray-200">{{ $document->name }}</td>
                                    <td class="px-6 py-4 border-b border-gray-200">{{ $document->description }}</td>
                                    {{-- <td class="px-6 py-4 border-b border-gray-200">{{ $document->file }}</td> --}}
                                    <td class="px-6 py-4 border-b border-gray-200">
                                        @php
                                            $fileExtension = pathinfo($document->file, PATHINFO_EXTENSION);
                                            $badgeClass = 'bg-purple-500 text-white'; // Clase por defecto para desconocidos
                                            if (in_array($fileExtension, ['pdf'])) {
                                                $badgeClass = 'bg-red-500 text-white'; // Cambiar clase para archivos PDF
                                            } elseif (in_array($fileExtension, ['doc', 'docx'])) {
                                                $badgeClass = 'bg-blue-500 text-white'; // Cambiar clase para archivos de Word
                                            } elseif (in_array($fileExtension, ['xls', 'xlsx'])) {
                                                $badgeClass = 'bg-green-500 text-black'; // Cambiar clase para archivos de Excel
                                            }
                                        @endphp
                                        <span class="badge {{ $badgeClass }} p-2 rounded-lg">
                                            {{ strtoupper($fileExtension) }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 border-b border-gray-200">
                                        {{-- <a href="{{ $fichero->path }}">Descargar</a> --}}
                                        <a href="{{ $document->path }}"
                                            class="flex items-center text-purple-600 hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px"
                                                height="25px">
                                                <path
                                                    d="M 7 2 L 7 48 L 43 48 L 43 14.59375 L 42.71875 14.28125 L 30.71875 2.28125 L 30.40625 2 Z M 9 4 L 29 4 L 29 16 L 41 16 L 41 46 L 9 46 Z M 31 5.4375 L 39.5625 14 L 31 14 Z M 15 22 L 15 24 L 35 24 L 35 22 Z M 15 28 L 15 30 L 31 30 L 31 28 Z M 15 34 L 15 36 L 35 36 L 35 34 Z" />
                                            </svg>

                                            Descargar
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        {{-- </div>
                </article>
            @endforeach --}}
        {{-- <div class="mt-4">
            {{ $documents->links() }}
        </div> --}}
    </div>
</x-app-layout>
