@extends('layouts.app')

@section('content')
@debug
<div class="text-blue-500">
    <h2 class="font-bold">{{$post->post_title}}</h2>
    {!!$post->post_content !!}
    <div class="bg-blue-100 h-10">
        {{$author_name}}
    </div>
</div>


@stop