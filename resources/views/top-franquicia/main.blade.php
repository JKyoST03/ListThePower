<x-app-layout>
    <section class="bg-zinc-400 py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-5xl font-bold mb-6 text-center">Tops por Franquicias</h2>

            <p class="text-center text-lg text-gray-800 mb-8">Bienvenido a los rankings por franquicias, aquí podrás buscar y debatir de manera algo más seria quién crees en cada franquicia. Merece ostentar las mejores posiciones de cada universo.</p>

            {{-- FRANCHISES --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">                
            @foreach ($franchises as $franchise)
                <a href="{{ route('tops-franquicias.franchise', $franchise->id) }}" class="block">
                    <div class="bg-stone-200 rounded-lg shadow-lg hover:shadow-red-900/50 hover:shadow-2xl transition-shadow duration-300 p-6">
                        <img src="https://raw.githubusercontent.com/TetoTerritory10/portraits/refs/heads/main/1200x675/{{$franchise->raw}}/portrait.jpg" width="100%" height="200px" alt="franquicia-{{ $franchise->raw }}" class="rounded-lg mb-4 border-2 border-black">
                        <h3 class="text-2xl font-semibold mb-2 text-center">{{ $franchise->name }}</h3>
                    </div>
                </a>
            @endforeach
            </div>
        </div>
    </section>
</x-app-layout>