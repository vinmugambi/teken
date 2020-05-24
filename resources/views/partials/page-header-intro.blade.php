<section id="header" class="bg-cover"
    style="background-image: linear-gradient(to right, hsla(240,90%,10%,0.8), hsla(240,100%,40%,0.5)), url({{App::glideImage()}});">
    <div class="container mx-auto h-full flex items-center">
        <div class="max-w-4xl pt-16 w-full mx-auto text-2xl text-white px-2 py-8 sm:px-4">
                <h1 class="text-6xl">
                    {{App::title()}}
                </h1>
            <div class="text-gray-100">{!!$post->post_content!!}</div>
        </div>
    </div>
</section>