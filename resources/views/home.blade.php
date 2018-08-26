@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>
                    <!--beginning of drink row -->
                    <div id = "drink" class="row">
                        <div class="col-md-6">
                        <div class="card mb-6 shadow-sm">
                          <img class="thumbnail-med" src={{url('/images/tom-collins.jpg')}} width="" height="" alt=""/>
                            <div class="card-body">
                            <h5 class="card-title">Tom Collins</h5>
                            <p class="card-text">
                                This classic cocktail is made with gin, 
                                lemon juice, sugar, and carbonated water.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">Order</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--end of drink row -->
                </div>
            </div>
        </div>
        
    </div><!-- end of container -->
    

@endsection
