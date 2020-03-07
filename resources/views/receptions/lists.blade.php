@extends('receptions._layout')

@section('content')
    <div class="lists">
        @foreach($articles as $article)
            {{$article}}
        @endforeach
    </div>
@endsection

