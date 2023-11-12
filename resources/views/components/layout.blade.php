<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service Sync</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav>
    <ul class="flex h-16 items-center bg-rose-100 rounded-b-lg font-serif mb-4">
        <div class="text-4xl text-black p-4">
            <h1>
                <a href="/">Service Sync</a>
            </h1>
        </div>

        <div class="ml-auto flex gap-12 p-4">
{{--            @auth--}}
                <li class="bg-sky-300 p-2 rounded w-24 justify-center flex">
                    Login
                </li>
                <li class="bg-sky-300 p-2 rounded w-24 justify-center flex">
                    Create
                </li>
{{--            @else--}}
                <li class="bg-sky-300 p-2 rounded w-24 justify-center flex">
                    <a href="/register">Register</a>
                </li>

        </div>
{{--        @endauth--}}
    </ul>
</nav>

<main class="font-mono">
    {{$slot}}
</main>

</body>
</html>