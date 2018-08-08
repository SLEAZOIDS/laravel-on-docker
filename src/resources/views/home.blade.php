@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @guest
                        こんにちわ　ゲストさん
                    @else
                        You are logged in!
                    @endif

                    <shop></shop>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
