<article @php post_class() @endphp>
 <pre>
    @dd($project->first_image))
    </pre>
    <section class="container mx-auto text-gray-900 leading-normal max-w-4xl mx-auto text-lg pb-24 px-2 sm:px-4">
        <header class="py-8">
            <h1 class="text-4xl leading-tight py-4 font-light">{{$post->post_title}}</h1>
            <div class="h-96 ">
                <img class="w-full object-fill object-top rounded-lg h-full" src="{{$project->image->src}}"
                    alt="{{$project->image->alt}}">
            </div>
        </header>
        <div class="wp-markdown max-w-2xl">
            {!!$project->description!!}
        </div>
        @if($project->sponsors)
        <div>
            <h3 class="text-green-400 text-2xl">Sponsors</h3>
            <div class="wp-markdown">

                {!!$project->sponsors!!}
            </div>
        </div>
        @endif
        @if($project->how_to_sponsor)
        <div>
            <h3 class="text-green-400 text-2xl">Support this program</h3>
            <div class="wp-markdown">

                {!!$project->how_to_sponsor!!}
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