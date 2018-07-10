@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <ul class="list-group">
            
        @foreach ($users as $user)
        <li class="list-group-item">
            <span>
                {{$user->name}}
            </span>

            <span class="pull-right clearfix">
                Joined {{$user->created_at->diffForHumans()}}

                <button class="btn btn-xs btn-primary">
                    Follow
                </button>
            </span>
        </li>
        @endforeach

        </ul>
    </div>
</div>
@endsection
