@extends('layouts.app')
<div class="h-100 h-auto  bg-secondary  bg-gradient text-dark">
@section('content')
<div class="container w-50 rounded fs-6 bg-white mt-4 p-3">
    <form action="{{route('register')}}" method="post">
    @csrf
        
        <p class="h4">Registration</p>
        <div class="mb-4 row">
            <label for="name" class="form-label col-sm-2 mt-1 ">Name</label>
            <div class="col-sm-10">
            <input type="text" name="name" id="name" class="form-control @error('name') border-danger @enderror" placeholder="Enter your name here ..." value="{{old('name')}}">
         @error('name')
         <div class="error text-danger">
         {{$message}}

         </div>
         @enderror
            </div>
        </div>
        <div class="mb-4 row" >
            <label for="username" class="form-label col-sm-2 mt-1">User Name</label>
            <div class="col-sm-10">
            <input type="text" name="username" id="username" class="form-control  @error('username') border-danger @enderror" placeholder="Enter your username here ..." value="{{old('username')}}">

        
          @error('username')
         <div class="error text-danger">
         {{$message}}

         </div>
         @enderror
         </div>

</div>
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
        <div class="mb-4 row">
            <label for="password_confirmation" class="form-label col-sm-2 mt-1">CPassword</label>
            <div class="col-sm-10">
            <input type="password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control"  placeholder="Repeat Your password...">

            </div>

        </div>
        <div class="mb-4 row">
        <button type="submit" class="btn btn-secondary form-control">Register</button>
        </div>
    </form>
   
</div>
<br>
    <br>
</div>

@endsection