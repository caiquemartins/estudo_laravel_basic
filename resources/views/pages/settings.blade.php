@extends('layouts.master')

@section('body')
<div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Settings</div>

                <div class="card-body">
                    <p>{{$married}}</p>
                    <p>{{$test}}</p>
                    <p>{{$age}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 