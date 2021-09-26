@extends('master')

@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <form action="/register" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Repeat Password</label>
                        <input type="password" name="password2" class="form-control" id="exampleInputPassword2">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                    
                </form>
            </div>
        </div>

    </div>

@endsection
