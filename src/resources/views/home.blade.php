@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        You are logged in!
                    @else
                        こんにちわ　ゲストさん
                    @endif

                    <ul>
                      @forelse ($stores as $store)
                        <li>
                          <a href="{{ action('StoresController@show', $store) }}">{{ $store->name }}</a>
                        </li>
                      @empty
                        <li>No post yes</li>
                      @endforelse
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
