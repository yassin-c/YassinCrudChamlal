<!DOCTYPE html>

<html>

<head>

    <title>Yassin - Crud - Dashboard</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

</head>

<body>

  
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Berichten') }}
        </h2>
    </x-slot>

 <div class="container pt-1 mt-4 w-full">

    @yield('content')

</div>

</x-app-layout>

 

</body>

</html>