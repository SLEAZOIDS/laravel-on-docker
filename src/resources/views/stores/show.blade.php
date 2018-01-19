@extends('layouts.default')

@section('title', $store->name)

@section('content')
<h1>
  <a href="{{ url('/') }}" class="header-menu">Back</a>
  {{ $store->name }}
</h1>
<p>{{ $store->tel }}</p>
<p>{{ $store->postal_code }}</p>
<p>{{ $store->address }}</p>
<p>{{ $store->access }}</p>
<p>{{ $store->business_day_of_the_week }}</p>
<p>{{ $store->business_time }}</p>
<p>{{ $store->budget_of_day }}</p>
<p>{{ $store->budget_of_night }}</p>
<p>{{ $store->number_of_sheets }}</p>
<p>{{ $store->has_pricate_room }}</p>
<p>{{ $store->can_smoking }}</p>
<p>{!! nl2br(e($store->etc)) !!}</p>

<p class="tag">
@forelse ($store->tagRelations as $tagRelation)
{{ $tagRelation->tag->name }}
@empty
No tag yet
@endforelse
</p>

@endsection
