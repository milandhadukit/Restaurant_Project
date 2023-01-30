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
              
                    <h2  style="margin-top:90px;">Update Table Details </h2>
                                 
                <div class="panel-body">
                    <form action="{{ route('update-table',$details->id) }}" method="POST">
                        @csrf
                      
                        <div class="form-group">
                            <label>Enter Table No :</label>

                            <select name="table_no" class="form-control" autofocus>
                              

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                               
                        
                              </select>
                            @error('table_no') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>



                        <div class="form-group">
                            <label>Enter Total Chair :</label>

                            <select name="no_chair" class="form-control" id="no_chair" autofocus>
                              

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>  
                        
                              </select>
                            @error('no_chair') <span class="error" style="color: red">{{ $message }}</span> @enderror
                        </div>




                        <div class="form-group">
                          <label>Enter  Descreption :</label>
                            <input type="text" class="form-control" placeholder="Descreption" name="descreption" >
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


