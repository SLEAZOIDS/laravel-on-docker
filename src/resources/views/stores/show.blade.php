@extends('layouts.app')

@section('title', $store->name)

@section('content')
<div id="store_date">
<h1>
    <a href="{{ url('/') }}" class="header-menu">Back</a>
    <a href="{{ action('ReservationsController@reserve', $store) }}" class="header-menu reservation">予約</a>
    <p id="store_name">{{ $store->name }}</p>
</h1>
<table id="store_date">
    <tr>
        <th>電話番号</th>
        <td>{{ $store->tel }}</td>
    </tr>
    <tr>
        <th>住所</th>
        <td>{{ $store->address }}</td>
    </tr>
    <tr>
        <th>アクセス</th>
        <td>{{ $store->access }}</td>
    </tr>
    <tr>
        <th>営業日</th>
        <td>{{ $store->business_day_of_the_week }}</td>
    </tr>
    <tr>
        <th>営業時間</th>
        <td>{{ $store->business_time }}</td>
    </tr>
    <tr>
        <th>予算</th>
        <td>昼：{{ $store->budget_of_day }} 　夜：{{ $store->budget_of_night }}</td>
    </tr>
    <tr>
        <th>タグ</th>
        <td>
            @forelse ($store->tagRelations as $tagRelation)
                {{ $tagRelation->tag->name }}
            @empty
                No tag yet
            @endforelse
        </td>
    </tr>
    <tr>
        <th>座席数</th>
        <td>{{ $store->number_of_sheets }}席</td>
    </tr>
    <tr>
        <th>個室</th>
        <td>
            @if( $store->has_pricate_room === 0)
                なし
            @elseif( $store->has_pricate_room === 1)
                あり
            @else
                半個室
            @endif
        </td>
    </tr>
    <tr>
        <th>タバコ</th>
        <td>
            @if( $store->can_smoking === 0)
                禁煙
            @elseif( $store->can_smoking === 1)
                喫煙
            @else
                分煙
            @endif
        </td>
    </tr>
    <tr>
        <th>その他</th>
        <td>{!! nl2br(e($store->etc)) !!}</td>
    </tr>
</table>
</div>

@endsection
