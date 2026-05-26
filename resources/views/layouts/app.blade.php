<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PSA — Philippine Society of Anesthesiologists</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Outfit:wght@300;400;500;600&family=Space+Mono:wght@400;700&display=swap"
        rel="stylesheet" />

</head>

<body>


    @include('components.navbar')

    <div id="mob-nav">
        <a wire:navigate href="#">Home</a>
        <a wire:navigate href="#">Officers &amp; Board</a>
        <a wire:navigate href="#">Subspecialty &amp; SIG</a>
        <a wire:navigate href="#">Chapter Presidents</a>
        <a wire:navigate href="#">Legacy</a>
        <a wire:navigate href="#">Midyear Convention 2026</a>
        <a href="https://aca2025manila.org/" target="_blank">ACA 2025 Manila ↗</a>
        <a href="https://www.psa-inc.org/tagisan" target="_blank">Tagisan ng Talino ↗</a>
        <a wire:navigate href="#">PJA</a>
        <a wire:navigate href="#">Gallery — ACA 2025</a>
        <a href="https://wcacongress.org/" target="_blank">World Congress ↗</a>
        <a wire:navigate href="#">Membership</a>
    </div>

    <main>
        @yield('content')
    </main>

    {{-- @include('components.footer') --}}

    <script>



        // NAVBAR SCROLL
        const nav = document.getElementById('nav');
        window.addEventListener('scroll', () => {
            nav.classList.toggle('scrolled', window.scrollY > 60);
            nav.classList.toggle('at-top', window.scrollY <= 60);
        });

        // MOBILE NAV
        function toggleMob() { document.getElementById('mob-nav').classList.toggle('open'); }

        // REVEAL
        const io = new IntersectionObserver(entries => { entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('up'); }); }, { threshold: .1 });
        document.querySelectorAll('.reveal').forEach(el => io.observe(el));


        // Theme toggle
function toggleTheme() {
    const isLight = document.body.classList.toggle('light-mode');
    localStorage.setItem('theme', isLight ? 'light' : 'dark');
    updateThemeIcon(isLight);
}

function updateThemeIcon(isLight) {
    const icon = document.getElementById('theme-icon');
    const iconMob = document.getElementById('theme-icon-mob');
    const symbol = isLight ? '🌙' : '☀';
    if (icon) icon.textContent = symbol;
    if (iconMob) iconMob.textContent = symbol;
}

// Persist on page load
(function () {
    const saved = localStorage.getItem('theme');
    if (saved === 'light') {
        document.body.classList.add('light-mode');
        updateThemeIcon(true);
    }
})();
    </script>
    @stack('scripts')
</body>

</html>