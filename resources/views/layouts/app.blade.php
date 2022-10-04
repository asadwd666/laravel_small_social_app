<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

    <nav class="nav bg-white align-items-center p-4 justify-content-between " >
        <ul class="nav">
            <li clas="nav-item">
                <a href="{{route('home')}}" class="nav-link text-dark">Home</a>
            </li>
            <li clas="nav-item">
                <a href="/dashboard"  class="nav-link text-dark">Dasheboard</a>
            </li >
            <li clas="nav-item">
                <a href="{{route('posts')}}"  class="nav-link text-dark">Posts</a>
            </li>
        </ul>
        <ul class="nav  ">
            @if(Auth::user())
            <li class="nav-item">
                <a href="" class="nav-link text-dark">{{auth()->user()->name}}</a>
            </li>
           
            <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link text-dark">Logout</a>
            </li>
            @else
            <li class="nav-item">
                <a href="{{ route('login')}}" class="nav-link text-dark">Login</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register')}}" class="nav-link text-dark">Register</a>
            </li>
            @endif
           
        </ul>

    </nav>
    
    @yield('content')

   
</body>
</html>