<!DOCTYPE HTML>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
    <title>Clipsmeister Development</title>

    <link rel="stylesheet" href="{{ asset('css/app.css'); }}"/>
</head>
<body>
    {{-- Going to use Laravel components for the major parts of the interface --}}
    <div id="header-container" class="fluid-container">
    {{-- @yield('header') Header content will go here --}} 
        <div class="row justify-content-center">
            <h1>Clipsmeister Test System</h1>
        </div>
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
                <p>Busey ipsum dolor sit amet. Listen to the silence. And when the silence is deafening, you're in the center of your own universe. It's good to yell at people and tell people that you're from Tennesee, so that way you'll be safe. The best way to communicate is compatible. Compatible communication is listening with open ears and an open mind, and not being fearful or judgemental about what you're hearing.</p>
                <p>These kind of things only happen for the first time once. I wrestled a bear once. A 750lbs black bear. It's good to yell at people and tell people that you're from Tennesee, so that way you'll be safe. When you get lost in your imaginatory vagueness, your foresight will become a nimble vagrant.</p>
                <p>Have you urinated? Have you drained your bladder? Are you free? Because if you haven't it will only come out later. I'm giving you some information that your bodily fluids may penetrate your clothing fibre's without warning. The best way to communicate is compatible. Compatible communication is listening with open ears and an open mind, and not being fearful or judgemental about what you're hearing.</p>
                <p>Go with the feeling of the nature. Take it easy. Know why you're here. And remember to balance your internal energy with the environment. It's good to yell at people and tell people that you're from Tennesee, so that way you'll be safe. You gotta go through it to see there ain't nothing to it.</p>
                <p>These kind of things only happen for the first time once. I would like to give you a backstage pass to my imagination. You gotta go through it to see there ain't nothing to it. You ever roasted doughnuts? I wrestled a bear once. A 750lbs black bear. It's OK to get Rib-grease on your face, because you're allowing people to see that you're proud of these ribs.</p>
            </div>
        </main>
        </div>{{-- Row class --}}
    </div>{{-- container class --}}
    <div class="fluid-container">
        <footer class="row justify-content-center bg-primary text-white">
            <div class="col-md-auto">TEST SYSTEM ONLY</div>
        </footer> 
    </div>
</body>
</html>