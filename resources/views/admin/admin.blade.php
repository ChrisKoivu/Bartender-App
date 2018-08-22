<!-- admin.blade.php -->

@extends('layouts.app')

@section('content') 

    <div class="container">

        

        

        @auth


        <h3>Administrator Panel</h3>

        <hr>

        <h5>Volunteers</h5>

       

        @if (count($orders))

        <table id ="Orders"> 

          <tr><th>Name</th><th>Status</th><th>Email</th><th>Home Phone</th><th>Work Phone</th><th>Cell Phone</th><th>Action</th></tr>

        @foreach($orders as $order)

          <tr><td>{{$order->name . ' '}}</td>

          <td>{{$order->drink_name}}</td><td>{{$volunteer->email}}</td>

          <td>{{$order->drink_description}} </td><td>{{$volunteer->work_phone}} </td>

          <td>{{$order->phone}} </td>

          <td>

            <a href="{{action('DrinksController@edit', $volunteer->id)}}" class="btn btn-warning">Edit</a>

          </td>

          </tr> 

        @endforeach

        </table> 

       @else

         <?php echo 'No volunteer records found'; ?>

       @endif

        

        @endauth


    </div>

@endsection

