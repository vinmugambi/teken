@extends('layouts.app')

@section ("content")
@while(have_posts()) @php the_post() @endphp

<section class="container mx-auto leading-normal">
    {{the_title("<h1 class='font-bold text-4xl mb-4 leading-loose'>","</h1>")}}
    {!! the_content () !!}

    @php
    $args= [
    "post_per_page"=> -1,
    "offset"=> 0,
    "orderby"=> "date",
    "order"=> "desc",
    "post_type"=> "projects"
    ];
    $the_query= new \WP_Query($args)
    @endphp

    <div class="flex space-y-4 py-16 flex-wrap">

        @while($the_query->have_posts()) @php $the_query->the_post() @endphp
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
        <div class="w-1/3  px-2">
                <img src="{{$url}}" alt="{{$alt}}" title="{{$caption}}" width="{{$width}}" height="{{$height}}">
        </div>
        @endwhile

    </div>

    @php
    wp_reset_postdata();
    @endphp

</section>
@endwhile

@endsection