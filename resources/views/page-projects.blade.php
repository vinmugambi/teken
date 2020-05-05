@extends('layouts.app')

@section ("content")
@while(have_posts()) @php the_post() @endphp

<section class="container mx-auto leading-normal max-w-4xl mx-auto text-lg">
    <div class="max-w-2xl">
        <h1 class='font-bold text-4xl'>{{$post->post_title}} </h1>
        {{-- {{the_title("<h1 class='font-bold text-4xl mb-4 leading-loose'>","</h1>")}} --}}
        {{-- {!! the_content () !!} --}}
        <div class="wp-markdown">
            {!!$post->post_content!!}
        </div>
    </div>
    {{-- @php
    $args= [
    "post_per_page"=> -1,
    "offset"=> 0,
    "orderby"=> "date",
    "order"=> "desc",
    "post_type"=> "projects"
    ];
    $the_query= new \WP_Query($args)
    @endphp --}}

    <div class="flex py-8 flex-wrap justify-center">

        {{-- @while($the_query->have_posts()) @php $the_query->the_post() @endphp
        @php
        $project_image=get_field("project_image");

        // dd($project_image["sizes"]);

        $alt = $project_image["alt"];
        $caption = $project_image["title"];
        $url = $project_image["url"];

        $size = "medium";

        $thumb = $project_image["sizes"][$size];
        $width= $project_image["sizes"][$size. "-width"];
        $height= $project_image["sizes"][$size. "-height"];
        @endphp
        <div class="w-1/3  px-1">
            <img src="{{$url}}" alt="{{$alt}}" title="{{$caption}}" width="{{$width}}" height="{{$height}}">
    </div>
    @endwhile --}}
    @foreach ($projects as $project)
    <div class="w-1/3  px-2 py-2 border-gray-100">
        <img class="object-cover w-full rounded h-48 object-top" src="{{$project->image->src}}"
            alt="{{$project->iamge->alt}}" title="{{$project->image->title}}">
        <a href="{{$project->permalink}}"
            class="text-sm font-bold uppercase text-gray-800 hover:text-blue-500 focus:text-blue-600">{{$project->name}}</a>
    </div>
    @endforeach
</section>
@endwhile
@endsection