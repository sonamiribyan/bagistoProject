@extends('admin::layouts.master')

@section('page_title')
    Package Item
@stop

@section('content-wrapper')

    <div class="content full-page dashboard">
        <div class="page-header">
            <div class="page-title">
                <h1>Package Item</h1>
            </div>

            <div class="page-action">
            </div>
        </div>

        <div class="page-content">
            @foreach($data as $key=>$dat)
            @if($loop->index==1)
            @foreach($dat as $key=>$da)
            @foreach($da as $key=>$d)
            @if($loop->index==1)
            @continue
            @endif
            <h4>{{$key}}</h4>
            <p>{{$d}}</p>
            @endforeach
            @endforeach
            @continue
            @endif
                <div></div><h4>{{$key}}</h4>
                <p>{{$dat}}</p>
                 </div>
            <br>
            @endforeach
        </div>
    </div>

@stop