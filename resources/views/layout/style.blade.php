<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Simple Crud</title>
    </head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <body>
        {{-- @yield('nav') --}}
        <div class="container">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : 'disabled' }}" 
                                href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('item*') ? 'active' : 'disabled' }}" 
                                href={{ route('item.index')}}>Item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact') ? 'active' : 'disabled' }}" 
                                href="{{ route('contact.create')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div>
            <div id="app">
                <example-component></example-component>
                @yield('data')
            </div>
        </div>
        <br><br><br><br>
        <div class="text-center">
            <nav class="navbar fixed-bottom navbar-light">
                <a class="navbar-brand text-center" href="#">Fixed bottom</a>
            </nav>
        </div>
    <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>