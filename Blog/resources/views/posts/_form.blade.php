@csrf

<main>
    <section>
        <div>
            <!-- Titulo -->
            <strong>
                <label class="uppercase text-gray-100 text-base">{{ __('Titulo') }}</label>

                <!-- Alerta que especifica si el campo es requerido o ya existe -->
                <span class="text-xs text-red-500">
                    @error("title")
                    {{ $message }}
                    @enderror
                </span>
                
            </strong>

            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="rounded border-gray-200 dark:bg-gray-900 w-full mp-4">

            <!-- Slug -->
            <strong>
                <label class="uppercase text-gray-100 text-base">{{ __('Slug') }}</label>

                <!-- Alerta que especifica si el campo es requerido o ya existe -->
                <span class="text-xs text-red-500">
                    @error("slug")
                    {{ $message }}
                    @enderror
                </span>
                
            </strong>

            <input type="text" name="slug" value="{{ old('slug', $post->slug) }}" class="rounded border-gray-200 dark:bg-gray-900 w-full mp-4">

            <!-- Contenido -->
            <strong>
                <label class="uppercase text-gray-100 text-base">{{ __('Contenido') }}</label>

                <!-- Alerta que especifica si el campo es requerido o ya existe -->
                <span class="text-xs text-red-500">
                    @error("body")
                    {{ $message }}
                    @enderror
                </span>

            </strong>

            <textarea name="body" rows="13" class="rounded border-gray-200 dark:bg-gray-900 w-full mp-4">{{ old('body', $post->body) }}</textarea>

            <div class="flex justify-between items-center">
                <a href="{{ route('posts.index') }}" class="bg-gray-900 text-white rounded px-4 py-2">
                {{ __('Volver') }}
                </a>
                <input type="submit" value="{{ __('Enviar') }}" class="bg-gray-900 text-white rounded px-4 py-2">
            </div>
        </div>
    </section>
</main>