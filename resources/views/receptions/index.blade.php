@extends('receptions._layout')

@section('content')
    <div class="index">
        index
        <div class="lists">
            @foreach($lists as $list)
                {{$list}}
            @endforeach
        </div>
    </div>
@endsection

