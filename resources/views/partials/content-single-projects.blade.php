<article @php post_class() @endphp>
    <section class="container mx-auto text-gray-900 leading-normal max-w-4xl mx-auto text-lg">
        <header>
            <h1 class="font-bold text-4xl  leading-tight">{{$project->name}}</h1>
            <img class="w-full object-cover object-center rounded-lg h-64" src="{{$project->image->src}}" alt="{{$project->image->alt}}">
        </header>
        <div class="wp-markdown">
            {!!$project->case_study!!}
        </div>
    </section>
    <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav>
            <p>' . __('Pages:', 'sage'), 'after' => '</p>
        </nav>']) !!}
    </footer>
    @php comments_template('/partials/comments.blade.php') @endphp
</article>