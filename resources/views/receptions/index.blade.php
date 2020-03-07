@extends('receptions._layout')

@section('content')
    <div class="main index">
        index
        <div class="lists">
            @foreach($lists_1 as $list)
                {{$list}}
            @endforeach
        </div>
        <div class="lists">
            @foreach($lists_2 as $list)
                {{$list}}
            @endforeach
        </div>

    </div>
@endsection

