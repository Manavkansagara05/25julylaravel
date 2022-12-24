@extends('layouts.appaddmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="form-group">
            <label for="bank_name">Bank Name</label>
            {{ Form::selectBank("bank_name", $merchant['paymentInfo']->bank_name ?? null,["class"=>"form-control"]) }}
        </div>
    </div>
</div>
@endsection