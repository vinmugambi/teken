<nav role="navigation" class="bg-white" aria-label="main navigation">
    <div class="container flex justify-between align-center h-16 relative px-2 sm:px-4 max-w-4xl mx-auto">
        <div>
            <a href="{{ home_url('/') }}">
                {{-- {{ get_bloginfo('name', 'display') }} --}}
                <img class=" h-16  w-auto mr-0 py-1" src="http://localhost:8000/wp-content/uploads/2020/05/logo.png"
                    alt="GAP logo">
            </a>
        </div>
        @if (has_nav_menu('primary_navigation'))
        <navbar-menu />
        <div class="flex hidden">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sage-menu']) !!}
        </div>
        @endif
    </div>
</nav>