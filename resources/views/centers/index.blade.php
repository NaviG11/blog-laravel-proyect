<x-app-layout>
    <div class="container py-8">
        <div class="w-full mx-auto">
            <h2 class="text-4xl text-purple-300 leading-8 font-bold mt-2">Centros</h2>
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
                                    Ubicación</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 text-left text-sm font-semibold text-gray-600 uppercase">
                                    Ciudad</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 text-left text-sm font-semibold text-gray-600 uppercase">
                                    Web</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($centers as $document)
                                <tr>
                                    <td class="px-6 py-4 border-b border-gray-200">{{ $document->Nombre }}</td>
                                    <td class="px-6 py-4 border-b border-gray-200">{{ $document->Descripcion }}</td>
                                    <td class="px-6 py-4 border-b border-gray-200">{{ $document->Ubicacion }}</td>
                                    <td class="px-6 py-4 border-b border-gray-200">{{ $document->Ciudad }}</td>
                                    <td class="px-6 py-4 border-b border-gray-200">
                                        <a href="{{ $document->Correo }}"
                                            class="text-blue-500 hover:text-blue-700 hover:underline">
                                            {{ $document->Correo }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
