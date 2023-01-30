
@extends('layouts.Admin_master')

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
   
</head>

<body class="body-Login-back">

    @if (session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }} 
    </div>
@endif

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              {{-- <img src="assets/img/logo.png" alt=""/> --}}
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('login-admin') }}" method="POST"  >
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                   
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                               
                                <button type="submit" class="btn btn-lg btn-success btn-block" >Login
                                 
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>