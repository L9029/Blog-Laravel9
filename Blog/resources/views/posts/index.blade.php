<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <strong>{{ __("Listado de Publicaciones") }}</strong>

                    <div class="p-4 text-gray-900 dark:text-gray-100">
                        <table class="mb-4">
                            @foreach ($posts as $post)
                            <tr class="border-b border-grey-200 text-sm">
                                <td class="px-6 py-4">
                                    {{ $post->title }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="text-indigo-600">Editar</a>
                                </td>
                                <td class="px-6 py-4">
                                    <!-- Para Eliminar se especifica la ruta y el metodo en el primer parametro y luego se especifica el objeto a eliminar -->
                                    <form action="{{ route('posts.destroy', $post) }}" method="post">
                                        @csrf <!--Esta opcion genera un token de seguridad-->
                                        @method("DELETE") <!--Se especifica la Terea a Realizar-->

                                        <input type="submit" value="Eliminar" class="bg-gray-900 text-white rounded px-4 py-2" onclick="return confirm('Desea Eliminar el Post?')">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
