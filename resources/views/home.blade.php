{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



@extends('layouts.Admin_master')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>


</head>

<body>
    @include('Admin.header')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row" style="display:flex;justify-content:center;align-items: center;">

            <div class="col-lg-4">
                <div class="panel panel-primary text-center no-boder">
                    <div class="panel-body yellow">
                        <i class="fa fa-bar-chart-o fa-3x"></i>
                        <h3>3 </h3>
                    </div>
                    <div class="panel-footer">
                        <span class="panel-eyecandy-title">Online Reservation Table
                        </span>
                    </div>
                </div>
                <div class="panel panel-primary text-center no-boder">
                    <div class="panel-body blue">
                        <i class="fa fa-pencil-square-o fa-3x"></i>
                        <h3>5</h3>
                    </div>
                    <div class="panel-footer">
                        <span class="panel-eyecandy-title">Pending Orders Online
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-primary text-center no-boder">
                    <div class="panel-body green">
                        <i class="fa fa fa-floppy-o fa-3x"></i>
                        <h3>20 GB</h3>
                    </div>
                    <div class="panel-footer">
                        <span class="panel-eyecandy-title"> Total Order online
                        </span>
                    </div>
                </div>
                <div class="panel panel-primary text-center no-boder">
                    <div class="panel-body red">
                        <i class="fa fa-thumbs-up fa-3x"></i>
                        <h3>2,700 </h3>
                    </div>
                    <div class="panel-footer">

                        <span class="panel-eyecandy-title">Order Complete
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <!-- end page-wrapper -->

</body>

</html>
