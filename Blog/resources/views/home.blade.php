@extends("template")
@section("content")
<div class="bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
    <!-- Informacion Destacada -->
    <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Programación</span>
    <h1 class="text-3xl text-white mt-4">Blog</h1>
    <p class="text-sm text-gray-400 mt-2">Proyecto de Desarrollo Web para Profesionales</p>

    <img src="{{ asset('images/dev.png') }}" class="absolute right-20 -bottom-40 opacity-20">
</div>

<!-- Paginacion de los Posts en el Home -->
<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-900">Contenido Tecnico</h1>

    <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach($posts as $post)
        <a href="" class="bg-gray-200 rounded-lg px-6 py-4">
            <p class="text-xs flex items-center gap-2">
                <span class="uppercase text-gray-900 bg-gray-400 rounded-full px-2 py-1">Tutorial</span>
                <span class="text-gray-900 bg-gray-300 rounded-full px-2 py-1">{{ $post->created_at->format('d/m/Y') }}</span>
            </p>

            <h2 class="text-lg text-gray-950 mt-2">{{ $post->title }}</h2>
        </a>
        @endforeach
    </div>
    {{ $posts->links() }}
</div>

@endsection