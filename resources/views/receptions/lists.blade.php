@extends('receptions._layout')

@section('content')
    <div class="main">
        <div class="lists">
            <div>
                <h3>
                    list {{$group_id}}
                </h3>
            </div>
            <div>
                <ul>
                    @foreach($articles as $article)
                        <li><a href="/article/{{$article['id']}}">{{$article['title']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

