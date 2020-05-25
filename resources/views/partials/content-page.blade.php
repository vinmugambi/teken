<section id="content" class="container mx-auto flex items-center">
    <div class="max-w-4xl w-full mx-auto text-lg px-2 sm:px-4 pt-8 pb-16">
        <div class="max-w-2xl wp-markdown">
            {!!$post->post_content!!}
        </div>
        {{-- @dd($post) --}}
    </div>
</section>

{!! wp_link_pages(['echo' => 0, 'before' => '<nav>
    <p>' . __('Pages:', 'sage'), 'after' => '</p>
</nav>']) !!}