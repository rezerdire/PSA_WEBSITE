<nav id="nav" class="at-top">
    <div class="nav-inner">
    <a class="nav-logo" href="#" wire:navigate>
        <img src="{{ asset('images/PSA_LOGO.png') }}" alt="PSA Logo" />

            <div class="text-white">
            <h2 class="text-sm sm:text-base">
                Philippine Society of
            </h2>
            <h2 class="text-sm sm:text-base">
                Anesthesiologists, Inc.
            </h2>
        </div>
    </a>

        <div class="nav-links">
            <div class="nav-item"><a href="{{ route('home') }}" >Home</a></div>
            <div class="nav-item"><a href="{{ route('about-us') }}">About Us</a></div>

            <div class="nav-item">
                <span>CME Activities ▾</span>
                <div class="mega-drop">
                    <div class="sub-item">
                        <a href="#" wire:navigate>Convention</a>
                      
                    </div>
                    <a href="https://www.psa-inc.org/tagisan" target="_blank">Tagisan ng Talino ↗</a>
                    <a href="#" wire:navigate>Interesting Case Contest</a>
                    <a href="#" wire:navigate>PJA</a>
                </div>
            </div>

            <div class="nav-item">
                <span>Links ▾</span>
                <div class="mega-drop">
                    <a href="https://www.koreanesthesia.org/" target="_blank">Koreanetheisa 2025 ↗</a>
                    <a href="https://aca2025manila.org/" target="_blank">ASEAN Congress 2025 ↗</a>
                    <a href="https://wcacongress.org/" target="_blank">World Congress of Anesthesia ↗</a>
                </div>
            </div>

                       <div class="nav-item"><a href="{{ route('gallery') }}" wire:navigate>Gallery</a></div>


            <div class="nav-item"><a href="#" wire:navigate>Membership</a></div>
            <a class="nav-cta" href="#" wire:navigate>Register 2026<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg></a>
        </div>

        <button class="burger" id="burger" onclick="toggleMob()" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>