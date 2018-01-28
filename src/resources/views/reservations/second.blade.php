@extends('layouts.app')

@section('title', 'WEB予約' . $store->name)


@section('content')
{!! Form::open(['action' => ['ReservationsController@user', $store]]) !!}
<h1>
    <a href="{{ url('/') }}" class="header-menu">Back</a>
    <p class="header-menu">WEB予約</p>
    <p id="store_name">{{ $store->name }}</p>
</h1>

<ul class="reserve_item">
    <li>お名前</li>
    <li>{{ Form::text('name', $user->name) }}</li>
</ul>

{!! Form::submit('完了', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection
