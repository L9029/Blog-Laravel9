<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <main>
        <section>
            <nav>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('blog') }}">Blog</a>
            </nav>

            <hr>

            @yield("content") 
        </section>
    </main>
</body>
</html>