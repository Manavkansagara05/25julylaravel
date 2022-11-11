@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All products</div>

                <div class="card-body">

                    <table class=" table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr.no</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quntity</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count = 1
                            @endphp
                            @foreach($productsdata as $data)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->Description }}</td>
                                <td>{{ $data->price }}</td>
                                <td>{{ $data->quantity }}</td>
                                <td>{{ $data->id }}</td>
                            </tr>

                            @php
                            $count++;
                            @endphp

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection