@extends('layouts.app')

@section('title', '予約確認')

@section('content')
<div id="store_date">
<h1>
    <a href="{{ url('/') }}" class="header-menu">Back</a>
    予約一覧
</h1>

<ul>
  @forelse ($user->reservations as $reserve)
    <li>
        {{ $reserve->name }}
        {{ $reserve->store->name }}
        {{ $reserve->date_time }}
        {{ $reserve->time }}
    </li>
  @empty
    <li>No comments yes</li>
  @endforelse
</ul>

</div>




@endsection
