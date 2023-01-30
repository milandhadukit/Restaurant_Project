@extends('layouts.Admin_master')

<body class="body-Login-back">
    @include('Admin.header')
    

<div  >
    <div class="container">

        <div class="row">
            <div class="container mt-5">
                <table class="table table-bordered mb-5" style="margin-left:90px; margin-top: 40px">

                    @if (session()->has('message'))
                    <div class="alert alert-info"  style="margin-left:65px;margin-top:100px;" >
                        {{ session()->get('message') }}
                    </div>
                @endif



                    <thead>
                        <tr class="table-success">
                            {{-- <th scope="col">No</th> --}}
                            <th > Name</th>
                            <th >Descreption</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Discount Price</th>
                            <th>Image</th>
                            <th scope="col" width="12%">Action</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($foodItem as $data)
                        <tr>
                           
                            <td>{{ $data->name }}</td>   
                                 
                                    <td>{{ $data->descreption }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td>{{ $data->quantity }}</td>
                                    <td>{{ $data->discount_price }}</td>
                                  <td>  <img src="{{ asset('ItemFoodImage/'.$data->image) }}" height="80px" width="80px" alt="Item image"></td>
                                 

                                    <td>
                                      <a href="{{ route('edit-items',$data->slug) }}" class="btn btn-primary ">Edit</a>
                                      <a href="{{ route('delete-items',$data->slug) }}" class="btn btn-danger" id="delete" >Delete</a>
                                   
                                      
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div style="margin-left:65px; ">
                            {!! $foodItem->links() !!}
                        </div>
                    </div>
                    <style>
                        .custom-pagination-style svg{
                            width: 30px;
                        }
                    </style>

            </div>

        </div>


    </div>
</body>


