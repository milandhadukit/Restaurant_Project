@extends('layouts.Admin_master')


<head>
    <title>Admin</title>


</head>

<body class="body-Login-back">
    @include('Admin.header')


    <div>
        <div class="container">

            <div class="row">
                <div class="container mt-5">
                    <table class="table table-bordered mb-5" style="margin-left:65px; margin-top: 40px">

                        @if (session()->has('message'))
                            <div class="alert alert-info" style="margin-left:65px;margin-top:100px;">
                                {{ session()->get('message') }}
                            </div>
                        @endif



                        <thead>
                            <tr class="table-success">
                                {{-- <th scope="col">No</th> --}}
                                <th scope="col"> Name</th>
                                <th scope="col">Descreption</th>
                                <th scope="col" width="12%">Action</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($food as $data)
                                <tr>

                                    <td>{{ $data->name }}</td>

                                    <td>{{ $data->descreption }}</td>
                                    <td>
                                        <a href="{{ route('edit-categories', $data->id) }}"
                                            class="btn btn-primary ">Edit</a>
                                        <a href="{{ route('delete-categories', $data->id) }}" class="btn btn-danger"
                                            id="delete">Delete</a>


                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div style="margin-left:65px; ">
                        {!! $food->links() !!}
                    </div>
                </div>
                <style>
                    .custom-pagination-style svg {
                        width: 30px;
                    }
                </style>

            </div>
        </div>

    </div>
</body>
