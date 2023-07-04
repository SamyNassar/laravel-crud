<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @yield('title')
        </title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

    <body>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
          <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="block py-2 pl-3 pr-4 text-white md:p-0 dark:text-white">Todo</a>
            <a href="/create" class="ml-4 inline-block px-4 py-2 bg-blue-500 text-white font-semibold rounded">Create Todo</a>
          </div>
        </nav>
      
        <div class="container mx-auto px-4 py-2">
          @if(session()->has('success'))
              <div class="alert alert-success">

                  {{ session()->get('success') }}

              </div>
          @endif
          @yield('content')
        </div>
    </body>
</html>