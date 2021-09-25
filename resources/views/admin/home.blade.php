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
            
            <div class="card mb-2">
                <div class="card-header h1">{{ __('All Users') }}</div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ ucfirst($user->name) }}</td>
                            <td>{{ ucfirst($user->email) }}</td>
                            <td>{{ ucfirst($user->role) }}</td>
                        @empty
                            <th>No users</th>
                        </tr>
                        @endforelse
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
