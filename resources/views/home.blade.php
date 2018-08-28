@extends('layouts.app')

@section('content')

<div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
  
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>
                    <!--beginning of drink row -->
                    @foreach($drinks as $drink)
                    <div id = "drink" class="row">
                        <div class="col-md-6">
                        <div class="card mb-6 shadow-sm">
                          <img class="thumbnail-med" src={{url($drink['img_link'])}} width="" height="" alt=""/>
                            <div class="card-body">
                            <h5 class="card-title">{{$drink['name']}}</h5>
                            <p class="card-text">
                                {{$drink['description']}}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <form method="post" action="{{url('orders')}}">
                                      {{csrf_field()}}
                                        <button type="button" name="drink_id" value = {{$drink['id']}} class="btn btn-sm btn-outline-secondary">Order</button>
                                    </form>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    <!--end of drink row -->
                </div>
            </div>
        </div>
        
    </div><!-- end of container -->
    

@endsection
