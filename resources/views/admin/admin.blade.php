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

         
        </table> 

       @else

         <?php echo 'No orders found'; ?>

       @endif

        

        @endauth


    </div>

@endsection

