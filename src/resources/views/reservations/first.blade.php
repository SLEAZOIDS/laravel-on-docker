@extends('layouts.app')

@section('title', 'WEB予約' . $store->name)

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$( function() {
    $( "#datepicker" ).datepicker({
        format: 'yyyy-mm-dd'
    });
} );
</script>

@section('content')
{!! Form::open(['method' => 'get', 'action' => ['ReservationsController@user', $store]]) !!}
<h1>
    <a href="{{ url('/') }}" class="header-menu">Back</a>
    <p class="header-menu">WEB予約</p>
    <p id="store_name">{{ $store->name }}</p>
</h1>

<ul class="reserve_item">
    <li>利用人数</li>
    <li>{!! Form::selectRange('number', 1, 10) !!} 人</li>
</ul>

<div class="form-group">
    {!! Form::label('published_at', 'Published On:', ['class' => 'control-label']) !!}
    {!! Form::text('published_at', date('Y-m-d'), ['id' => 'datepicker']) !!}
</div>
{!! Form::submit('次へ', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection
