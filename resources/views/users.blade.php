


@extends('include.master')

@section('content')

@include('include.validation')



 


     <table style='text-align:left;width:800px'>
     <td>{{$user}}</td> 


         <thead>
           <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Password</th>

           </tr>

         </thead>    
       
     </table> 

    


@endsection()

