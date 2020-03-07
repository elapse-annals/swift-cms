@extends('receptions._layout')

@section('content')
    <div class="article">
        <h5>article </h5>
        <div>
            <label for="">id:</label>
            <p><span>{{$article['id']}}</span></p>
            <label for="">title:</label>
            <p><span>{{$article['title']}}</span></p>
            <label for="">content:</label>
            <p><span>{{$article['content']}}</span></p>
        </div>
    </div>
@endsection

