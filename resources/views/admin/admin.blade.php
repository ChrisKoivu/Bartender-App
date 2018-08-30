<!-- admin.blade.php -->

@extends('layouts.app')

@section('content') 

    <div class="container">

        

        

        @auth


        <h3>Administrator Panel</h3>

        <hr>

        <h5>Orders</h5>

       

      @if (count($orders))

        <table id ="Orders"> 
           <tr><th>Order ID</th><th>Customer Name</th><th>Drink</th><th>Price</th></tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->drink_name}} </td>
                    <td>{{'$' . $order->amount}} </td>
                </tr> 
            @endforeach
           
        </table> 

       @else

         <?php echo 'No orders found'; ?>

       @endif

        

        @endauth


    </div>

@endsection

