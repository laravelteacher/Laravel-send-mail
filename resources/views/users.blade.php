


@extends('include.master')

@section('content')

@include('include.validation')



 


     <table style='text-align:left;width:800px'>


         <thead>
           <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Password</th>

           </tr>

         </thead>    
         <tbody>
         @foreach($user as $user)
        <tr>
           <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>
           <td>{{$user->password}}</td>

        </tr>
        @endforeach

         </tbody> 
     </table> 

    


@endsection()

