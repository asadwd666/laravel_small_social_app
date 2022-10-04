@extends('layouts.app')
<div class="h-100 h-auto  bg-secondary  bg-gradient text-dark">
@section('content')
<div class="container w-50 rounded fs-6 bg-white mt-4 p-3">
    
    <form action="{{route('login')}}" method="post">
    @csrf
        
        <p class="h4">Login Form</p>
        @if(session('status'))
        <div class="alert alert-danger">
    {{session('status')}}
    </div>
    @endif
    
   
        <div class="mb-4 row">
            <label for="email" class="form-label col-sm-2 mt-1">Email</label>
            <div class="col-sm-10">
            <input type="email" name="email" id="email" class="form-control @error ('email') border-danger @enderror" placeholder="Enter your email here ..." value="{{old('email')}}">
            @error('email')
         <div class="error text-danger">
         {{$message}}

         </div>
         @enderror
            </div>

        </div>
        <div class="mb-4 row">
            <label for="password" class="form-label col-sm-2 mt-1">Password</label>
            <div class="col-sm-10">
            <input type="password" name="password" id="password" class="form-control  @error('password') border-danger @enderror" placeholder="Choose your password ..." >
            @error('password')
         <div class="error text-danger">
         {{$message}}

         </div>
         @enderror
            </div>

        </div>
      
        <div class="form-check mb-4">
        <input class="form-check-input" type="checkbox" name="remember" value="on" id="remember">
         <label class="form-check-label" for="flexCheckDefault">
    Remember Me
  </label>
</div>
       
        <div class="mb-4 row">
        <button type="submit" class="btn btn-secondary form-control">Login</button>
        </div>
    </form>
   
</div>
<br>
    <br>
</div>

@endsection