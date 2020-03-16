@include('partials._header')
{{-- inludo con blade(@) e aggiungo percorso delle cartelle con la dot notation --}}

<div>
    <header>
        @yield('header')
        {{-- yield è come un segnaposto --}}
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>
</div>

@include('partials._footer')