@extends('layouts.app')

@section('content')

@include('partials.home-header')
{{-- {{get_search_form()}} --}}
{{-- @dd($programs[1]) --}}
<section class="container mx-auto pb-4">
    <div class="mx-auto max-w-6xl px:2 sm:px-4 py-8">
     <div id="video" class="flex">
<div class="px-4"><iframe class="rounded-lg" width="560" height="315" src="https://www.youtube.com/embed/PajKCEvPCXg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
<div class="px-4">ABAPHAKAZI NIMIRYANGO ITISHOBOYE NAIROBI YAHAWE UBUFASHA NUMURYANGO WA GLOBAL ALLIANCE 4 PEACE</div>     </div>
        <div class="flex justify-between pt-4 pb-6 px-4">
            <h2 class="text-4xl">Programs</h2>
            <div class="hidden sm:flex items-end">
                <a href="/programs"
                    class="block ml-2 px-4 py-2 rounded text-gray-800 hover:bg-gray-200">View
                    all programs 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9"></polygon></svg>
                </a>
            </div>
        </div>
        <div class="flex flex-wrap justify-between pb-8">
            @foreach ($programs as $program)
            <?php $program_image = $program->image->src ? $program->image->src : get_template_directory_uri().'/assets/images/no_preview_image.png'; ?>
            <div class="w-1/2 md:w-1/3 lg:w-1/4 px-1 py-1 lg:px-4">

                <a href="{{$program->permalink}}"
                    class="block h-full overflow-hidden rounded-lg">
                    <img class="h-48 w-full object-center rounded-t-lg object-cover"
                        src="{{$program_image}}"
                        alt="{{$program->image->alt or "no image"}}" title="{{$program->image->title or "no image"}}">
                    <div class="px-2 leading-tight hover:underline py-4 home-p h-full">
                        {{$program->name}}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <a href="/programs"
                    class="inline-block px-4 py-2 rounded text-gray-800 hover:bg-gray-200">View
                    all programs 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9"></polygon></svg>
                </a>
    </div>
</section>

@include('partials.what-we-do')

@endsection