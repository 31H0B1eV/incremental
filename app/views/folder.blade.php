@extends('layouts.base')

@section('title')
Incremental | Home
@stop

@section('content')
<div class="container">
    <div class="row">
    @foreach($dirContent as $content)
        <div class="thumbnail">
            <!--                <img src="http://placehold.it/300x300/" alt="...">-->
            <div class="caption">
                @if($content['resourceType'] == 'dir')

                <h3>Имя папки: <small>{{ $content['displayName'] }}</small></h3>
                <h3>Время создания: <small>{{ $content['creationDate'] }}</small></h3>

                @else

                <h3>Имя Файла: <small>{{ $content['displayName'] }}</small></h3>
                <h3>Размер: <small>{{ $content['contentLength'] }}</small></h3>
                <h3>Время создания: <small>{{ $content['creationDate'] }}</small></h3>

                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop