


@extends('include.master')



@section('content')


@include('include.master')

@include('include.validation')

<h1>login</h1>

@section('content')



<form action="{{route('signin')}}" method='post'>
  @csrf
  
  <input type="text"  name="email" placeholder='email' value="{{old('email')}}"><br>
  <input type="text" name="password" placeholder='password' value="{{old('password')}}"><br>


  <input type="submit" value="Submit">
</form>

@endsection()



