@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/defaultimage.jpg') }}" alt="User Image">
                <div class="card-body">
                <div class="row m-2">
                        <h5 class="card-title">{{ ucfirst(Auth()->user()->name) }}</h5>
                        <h6 class="ml-auto text-muted">{{ ucfirst(Auth()->user()->role) }}</h6>
                    </div>  
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium justo neque, ut lacinia ipsum hendrerit eget. Nulla tempus nunc sapien, ut aliquam orci tincidunt sit amet.</p>
                    <a href="#" class="btn btn-success">Edit Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h1">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="h3">{{ __('Howdy,') }} {{ ucfirst(Auth()->user()->name) }}</p>
                    <p class="card-text">
                    Donec erat neque, fermentum id ligula sed, maximus suscipit felis. Phasellus euismod erat eu lacinia accumsan. 
                    Nam convallis placerat leo, non pulvinar risus tincidunt eu. Nullam non magna quis dui congue molestie mattis quis quam.
                    Aliquam id pretium ipsum, ut sagittis quam. Praesent sed tincidunt quam. Cras odio turpis, condimentum id tortor at, 
                    pharetra aliquet lacus. Donec tristique ipsum eget tellus rutrum, rutrum tincidunt metus venenatis. Etiam eget leo pellentesque, 
                    feugiat orci at, commodo nulla. Aliquam urna dui, eleifend non dictum eget, placerat ut magna. Donec at viverra velit. 
                    Etiam non augue urna. Ut tempor, arcu eget lacinia mattis, dolor mauris faucibus metus, ac rhoncus lectus elit in ex.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
