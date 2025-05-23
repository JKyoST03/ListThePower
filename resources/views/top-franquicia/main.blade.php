<x-app-layout>
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-5xl font-bold mb-6 text-center">Tops por Franquicias</h2>
            {{-- FRANCHISES --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">                
            @foreach ($franchises as $franchise)
                <a href="{{ route('tops-franquicias.franchise', $franchise->id) }}" class="block">
                    <div class="bg-white rounded-lg shadow p-6">
                        <img src="https://raw.githubusercontent.com/TetoTerritory10/portraits/refs/heads/main/1200x675/{{$franchise->raw}}/portrait.jpg" width="100%" height="200px" alt="franquicia-{{ $franchise->raw }}" class="rounded-lg mb-4">
                        <h3 class="text-2xl font-semibold mb-2 text-center">{{ $franchise->name }}</h3>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>