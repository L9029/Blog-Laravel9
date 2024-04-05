@csrf

<main>
    <section>
        <div>
            <strong>
                <label class="uppercase text-gray-100 text-base">{{ __('Titulo') }}</label>
            </strong>

            <input type="text" name="title" value="{{ $post->title }}" class="rounded border-gray-200 dark:bg-gray-900 w-full mp-4">

            <strong>
                <label class="uppercase text-gray-100 text-base">{{ __('Contenido') }}</label>
            </strong>

            <textarea name="body" rows="13" class="rounded border-gray-200 dark:bg-gray-900 w-full mp-4">{{ $post->body }}</textarea>

            <div class="flex justify-between items-center">
                <a href="{{ route('posts.index') }}" class="bg-gray-900 text-white rounded px-4 py-2">
                {{ __('Volver') }}
                </a>
                <input type="submit" value="{{ __('Enviar') }}" class="bg-gray-900 text-white rounded px-4 py-2">
            </div>
        </div>
    </section>
</main>