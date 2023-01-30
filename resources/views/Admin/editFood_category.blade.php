@extends('layouts.Admin_master')


<body class="body-Login-back">
  @include('Admin.header')

    <div class="container">

        <div class="row">
            @if (session()->has('message'))
            <div class="alert alert-info"  style="margin-left:65px;margin-top:100px;" >
                {{ session()->get('message') }}
            </div>
        @endif

            <div class="col-md-5 col-md-offset-5">
              
                    <h2  style="margin-top:90px;">Update Category Food </h2>
                                 
                <div class="panel-body">
                    <form action="{{ route('update-categories',$foodId->id) }}" method="POST">
                        @csrf
                      
                        <div class="form-group">
                            <label>Enter Food Category Name :</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{$foodId->name}}" autofocus>
                            @error('name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                          <label>Enter Food Category Descreption :</label>
                            <input type="text" class="form-control" placeholder="Descreption" name="descreption" value="{{$foodId->descreption}}" >
                            @error('descreption') <span class="error" style="color: red">{{ $message }}</span> @enderror

                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit

                        </button>
                      
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>


    