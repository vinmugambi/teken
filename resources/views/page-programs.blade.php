@extends('layouts.app')

@section ("content")
@include('partials.page-header-intro')
@while(have_posts()) @php the_post() @endphp

<section class="container mx-auto leading-normal max-w-4xl mx-auto text-lg">
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

    <div class="flex pt-4 pb-8 flex-wrap">

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
    {{-- @dd($programs) --}}
    @foreach ($programs as $program)
    <?php $program_image = $program->image->src ? $program->image->src : get_template_directory_uri().'/assets/images/no_preview_image.png'; ?>
    <div class="project-card w-full sm:w-1/2 md:w-1/3  px-2 lg:px-4 pb-12">
        <a href="{{$program->permalink}}" class="block">
            <div class="relative h-72 rounded-lg" style="background-image: url('{{$program_image}}'); background-size:cover">
                {{-- <img class="object-cover w-full rounded-lg h-64 object-center" src="{{$program_image}}"
                    alt="{{$program->image->alt}}" title="{{$program->image->title}}"> --}}
                <div style="background-image: url('{{$program_image}}'); background-size:cover; background-position: bottom"
                    class="learn-more overflow-hidden absolute bottom-0 left-0  h-12 w-full rounded-b-lg">
                    
                </div>
                <div class="absolute bottom-0 left-0  z-10  h-12 w-full px-2 py-2 text-white bg-gray-700 bg-opacity-25 rounded-b-lg">

                    Learn more
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <polygon
                        points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9" />
                    </svg>
                </div>
            </div>

            <div class="p-2">
                <p class="text-sm font-bold uppercase ">
                    {{$program->name}}
                </p>
            </div>
        </a>
    </div>
    @endforeach
</section>
@endwhile
@endsection