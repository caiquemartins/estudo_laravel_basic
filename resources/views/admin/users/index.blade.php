@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h3>{{$users->total()}} total users</h3>
        <b>In this page ({{ $users->count() }} users)</b>
        
        <ul class="list-group">
        @forelse($users as $user)
            <li class="list-group-item">
                <span>
                    {{$user->name}}
                </span>

                <span class="float-right clearfix">
                    Joined {{$user->created_at->diffForHumans()}}

                    <button class="btn btn-xs btn-primary">
                        Follow
                    </button>
                </span>
            </li>
        @empty
            <p>Não há registros</p>
        @endforelse

        {{ $users->links()}}
        </ul>
        
    </div>
</div>
@endsection
