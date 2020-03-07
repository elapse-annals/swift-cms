@extends('receptions._layout')

@section('content')
    <div class="main index">
        index
        <div class="lists">
            <div>
                <h3>
                    <a href="/lists/1">list_1</a>
                </h3>
            </div>
            <div>
                <ul>
                    @foreach($lists_1 as $list)
                        <li><a href="/article/{{$list['id']}}">{{$list['title']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="lists">
            <div>
                <h3>
                    <a href="/lists/2">list_2</a>
                </h3>
            </div>
            <div>
                <ul>
                    @foreach($lists_2 as $list)
                        <li><a href="/article/{{$list['id']}}">{{$list['title']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@endsection

