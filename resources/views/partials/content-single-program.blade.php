<article @php post_class() @endphp>

    <section class="container mx-auto text-gray-900 leading-normal max-w-4xl mx-auto text-lg pb-24 px-2 sm:px-4">
        <header class="py-4">
            @if(!empty($program->images))
            <carousel :images='@json($program->images)' />
            @endif

        </header>
        <h1 class="text-4xl leading-tight font-light">{{$post->post_title}}</h1>
        @if($post->location)
        <p class="text-gray-600">
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
            </svg>
            {{$post->location}}
        </p>
        @endif
        <div class="wp-markdown max-w-2xl">
            {!!$program->description!!}
        </div>
        @if($program->sponsors)
        <div>
            <h3 class="text-green-400 text-xl">Sponsors</h3>
            <div class="wp-markdown">

                {!!$program->sponsors!!}
            </div>
        </div>
        @endif
        @if($program->how_to_sponsor)
        <div>
            <h3 class="text-green-400 text-xl">Support this program</h3>
            <div class="wp-markdown">
                {!!$program->how_to_sponsor!!}
            </div>
        </div>
        @endif
    </section>
    <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav>
            <p>' . __('Pages:', 'sage'), 'after' => '</p>
        </nav>']) !!}
    </footer>
    @php comments_template('/partials/comments.blade.php') @endphp
</article>