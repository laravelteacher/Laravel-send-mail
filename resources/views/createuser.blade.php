


@extends('include.master')

@section('content')

@include('include.validation')

@if($errors->any())

  @foreach($errors->all() as $error)

    {{$error}}
  @endforeach

@endif  
<form action="{{route('createuser')}}" method='post'>
  @csrf
  <input type="text" name="name" placeholder='first name' value="{{old('name')}}" ><br>
  <input type="text"  name="email" placeholder='email' value="{{old('email')}}"><br>
  <input type="text" name="password" placeholder='password' value="{{old('password')}}"><br>


  <input type="submit" value="Submit">
</form>

@endsection()

