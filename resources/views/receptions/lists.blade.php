@extends('receptions._layout')

@section('content')
    <div class="main">
        @foreach($articles as $article)
            {{$article}}
        @endforeach
    </div>
@endsection

