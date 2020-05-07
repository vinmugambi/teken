<nav role="navigation" class="bg-white" aria-label="main navigation">
    <div class="container flex justify-between align-center h-16 relative px-2 sm:px-4 max-w-4xl mx-auto">
        <div>
            <a href="{{ home_url('/') }}">
                {{-- {{ get_bloginfo('name', 'display') }} --}}
                <img class=" h-16  w-auto mr-0 py-1" src="/wp-content/uploads/2020/05/logo.png"
                    alt="GAP logo">
            </a>
        </div>
        @if (has_nav_menu('primary_navigation')) 
        <navbar-menu :items='@json($navbar_menu_items)'/>
        {{-- {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'px-4 py-2 text-lg font-bold'])
            !!} --}}
        @endif
    </div>
</nav>