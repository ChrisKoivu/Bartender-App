@extends('layouts.app')

@section('content')

<div class="container">
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
                                <button type="button" value = {{$drink['id']}} class="btn btn-sm btn-outline-secondary">Order</button>
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
