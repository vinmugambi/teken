@extends('layouts.app')

@section('content')

@include('partials.home-header')
{{-- {{get_search_form()}} --}}
{{-- @dd($programs[1]) --}}
<section class="container mx-auto pb-4">
    <div class="mx-auto max-w-4xl px:2 sm:px-4 py-8">
        <h2 class="text-center text-4xl pt-4 pb-6 font-hairline">New programs</h2>
        <div class="flex flex-wrap pb-8">
            @foreach ($programs as $program)
            <div class="w-full md:w-1/2 lg:w-1/3 px-2 py-2">
                <a href="{{$program->permalink}}"
                    class="flex items-center  h-32 object-cover overflow-hidden text-sm font-semibold border rounded-lg hover:bg-blue-100">
                    <img class="w-1/2 rounded object-center" src="{{$program->image->src}}"
                        alt="{{$program->image->alt}}" title="{{$program->image->title}}">
                    <div class="pl-1">
                        {{$program->name}}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <a href="/programs" class="ml-2 px-4 py-2 rounded-lg bg-blue-500 text-white hover:bg-blue-400 bg-blue-600">View all programs</a>
    </div>
</section>

@include('partials.what-we-do')

@endsection