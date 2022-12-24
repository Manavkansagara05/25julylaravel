@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">

                    <div class="row">
                        <div class="col-md-10">All products</div>
                        <div class="col-md-2">
                            <a class="btn btn-sm btn-info text-lidht" href="addnewproduct">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class=" table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quntity</th>
                                <th class="col col-lg-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <th>{{$productdata->title}}</th>
                                <th>{{$productdata->description}}</th>
                                <th>{{$productdata->price}}</th>
                                <th>{{$productdata->quantity}}</th>
                                <th>
                                    <!-- <a href="generate-pdf/{{ $data->id }}" class="btn btn-sm btn-success ">generate-pdf</a> -->
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection