@include('partials._header')
{{-- inludo con blade(@) e aggiungo percorso delle cartelle con la dot notation --}}
<body>
    <div class="container">
        <header>
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </header>
        <div class="cds-container">
            @yield('header')
            {{-- yield è come un segnaposto --}}
        </div>
        </div>

</body>
</html>

@include('partials._footer')