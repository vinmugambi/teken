<section id="header" class="h-84 bg-cover"
    style="background-image: linear-gradient(to right, hsla(240,100%,10%,0.8), hsla(240,100%,90%,0.2)), url({{App::glideImage()}});">
    <div class="container mx-auto h-full flex items-center">
        <div class="max-w-6xl w-full mx-auto text-xl text-white px-2 sm:px-4">
            <div class="max-w-md">
                {!!$post->post_content!!}
            </div>
        </div>
    </div>
    {{-- <img src="{{App::glideImage()}}" alt="hero image"> --}}
</section>