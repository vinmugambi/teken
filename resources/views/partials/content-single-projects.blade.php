<article @php post_class() @endphp>
    <section class="container mx-auto text-gray-900 leading-normal max-w-4xl mx-auto text-lg pb-24">
        <header class="py-8">
            <h1 class="font-bold text-4xl  leading-tight pb-4">{{$project->name}}</h1>
            <div class="h-96 ">
                
                <img class="w-full object-fill object-top rounded-lg h-full" src="{{$project->image->src}}" alt="{{$project->image->alt}}">
                </div>
        </header>
        <div class="wp-markdown max-w-2xl">
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