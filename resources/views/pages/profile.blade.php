@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    <p>
                        Sua idade é @age([1994,4,7])
                    </p>
                    <p>@sayHello('Renato')</p>
                    <p>{{$married}}</p>
                    <p>{{$test}}</p>
                    <p>{{$age}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 