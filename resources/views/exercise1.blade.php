<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Tailwind</title>
</head>
<body >
  
  <div class="w-2/4 m-6 p-6 bg-purple-100 rounded-xl shadow-md border-t-2 border-purple-900">
    <h1 class="text-3xl font-bold">Tailwind CSS ❤</h1>
    <p class="font-medium text-lg leading-6 text-gray-800">
      Tailwind CSS is basically a utility-first CSS framework for
      rapidly building custom user interfaces. It is a highly
      customizable, low-level CSS framework that gives you all of the
      building blocks you need to build bespoke designs.
    </p>
  </div>
  <div class="w-2/4 m-6 p-6 bg-purple-100 rounded-xl shadow-md border-t-2 border-purple-900">
    <h1 class="text-3xl font-bold">Tailwind CSS ❤</h1>
    <p class="font-medium text-lg leading-6 text-gray-800">
      Tailwind CSS is basically a utility-first CSS framework for
      rapidly building custom user interfaces. It is a highly
      customizable, low-level CSS framework that gives you all of the
      building blocks you need to build bespoke designs.
    </p>
  </div>
  
  <a class="p-5" href='{{ route('dashboard') }}'>Return to dashboard</a>
</body>
</html>