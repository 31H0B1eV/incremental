@extends('layouts.base')

@section('title')
 Lear Laravel | Lesson detail
@stop

@section('content')
    @if (isset($lesson))
<div class="container">
    <div class="row">
        <div style="background-color: white;
                    padding: 10px 10px 10px 15px;">
<!--                <img src="http://placehold.it/300x300/" alt="...">-->
            <div class="caption">
                    <h3>{{ $lesson->title }}</h3>
                <blockquote>
                    <p>{{ $lesson->body }}</p>
    <!--                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
                </blockquote>
            </div>
        </div>
    </div>
</div>
    @endif
@stop