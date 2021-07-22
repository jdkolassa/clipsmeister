<!DOCTYPE HTML>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
    <title>Clipsmeister Development</title>
</head>
<body>
    {{-- Going to use Laravel components for the major parts of the interface --}}
    <div id="header-container" class="fluid-container">
    {{-- @yield('header') Header content will go here --}} 
    </div>
    <div id="belowheader" class="container">
        <div class="row">
        <div id="sidebar" class="col-4">
        {{-- @yield('sidebar') Sidebar navigation will go here, to the left --}} 
        {{-- For now I will hardcode this, just to see how it looks, but put the future blade directives in comments --}} 
           <ul class="nav flex-column">
                {{-- @guest --}}
                <li class="nav-item">Login</li>
                {{-- @endguest --}}
                {{-- @auth --}}
                <li class="nav-item">Daily Report</li>
                <li class="nav-item">Outlet Templates</li>
                <li class="nav-item">Scholar Lists</li>
                <li class="nav-item">Stories</li>
                {{-- @endauth --}}
                {{-- @auth('admin') --}}
                <li class="nav-item">Admin</li>
                {{-- @endauth --}}
                {{-- @env(['local', 'staging']) --}} 
                <li class="nav-item">Server</li>
                {{-- @endenv --}}
            </ul>
        </div>
        {{-- Main content will go down here --}}
        <main class="col-8">
            {{-- $slot --}}
            <div class="row justify-content-center">

        </main>
        </div>{{-- Row class --}}
    </div>{{-- container class --}}
    <div class="fluid-container">
        <footer class="row justify-content-center bg-primary text-white">
            <div class="col-md-auto">TEST SYSTEM ONLY</div>
        </footer> 
    </div>
</body>