<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<footer class="relative overflow-hidden border-t border-cyan-400/10 bg-[#020f1a] pt-32 pb-24 flex justify-center min-h-[320px] items-center">
    {{-- Radial Glow --}}
    <div
        class="pointer-events-none absolute inset-0 z-0 bg-[radial-gradient(ellipse_60%_60%_at_50%_110%,rgba(16,185,129,0.07)_0%,transparent_70%)]">
    </div>

    {{-- Grid Lines --}}
    <div
        class="pointer-events-none absolute inset-0 z-0 bg-[length:60px_60px] bg-[linear-gradient(rgba(13,212,238,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(13,212,238,0.03)_1px,transparent_1px)]">
    </div>

    {{-- Container --}}
    <div class="relative z-10 mx-auto max-w-[1400px] px-12 ">

        {{-- Main Grid --}}
        <div class="mb-16 grid gap-14 md:grid-cols-2 lg:grid-cols-[1.4fr_1fr_1fr_1fr] gap-x-24 ">

        
            {{-- Brand Column --}}
            <div class = "space-y-6">

                {{-- Contact Block --}}
                <div class="border-t border-white/5 pt-6">
                    <p
                        class="mb-2.5 font-mono text-[9px] uppercase tracking-[0.2em] text-gray-200">
                        Contact
                    </p>

                    <p
                        class="text-[12px] leading-[1.85] tracking-[0.04em] text-white/40">
                        psainc_sec@yahoo.com<br>
                        0917 832 9069<br>
                        (+63) 02 8452-2058
                    </p>
                </div>
            </div>

            @php
                $colTitle =
                    'mb-5 block font-mono text-[10px] uppercase tracking-[0.18em] text-white font-medium';

                $colLink =
                    'block border-b border-white/5 py-[9px] text-[11.5px] uppercase tracking-[0.08em] text-white/60 transition-all duration-150 hover:pl-2 hover:text-cyan-400';
            @endphp

            {{-- ABOUT --}}
            <div class="space-y-6">
                <span class="{{ $colTitle }}">About Us</span>

                <nav>
                    <a href="#" wire:navigate class="{{ $colLink }}">
                        Officers &amp; Board
                    </a>

                    <a href="#" wire:navigate class="{{ $colLink }}">
                        Subspecialty &amp; SIG
                    </a>

                    <a href="#" wire:navigate class="{{ $colLink }}">
                        Chapter Presidents
                    </a>

                    <a href="#" wire:navigate class="{{ $colLink }}">
                        Legacy
                    </a>

                    <a href="#" wire:navigate class="border-none {{ $colLink }}">
                        Membership
                    </a>
                </nav>
            </div>

            {{-- CME --}}
            <div class="space-y-6">
                <span class="{{ $colTitle }}">CME Activities</span>

                <nav>
                    <a href="#" wire:navigate class="{{ $colLink }}">
                        Midyear Convention 2026
                    </a>

                    <a href="https://aca2025manila.org/" target="_blank" class="{{ $colLink }}">
                        ACA 2025 Manila ↗
                    </a>

                    <a href="https://www.psa-inc.org/tagisan" target="_blank" class="{{ $colLink }}">
                        Tagisan ng Talino ↗
                    </a>

                    <a href="#" wire:navigate class="{{ $colLink }}">
                        Interesting Case Contest
                    </a>

                    <a href="#" wire:navigate class="border-none {{ $colLink }}">
                        PJA
                    </a>
                </nav>
            </div>

            {{-- Links + Gallery --}}
            <div class="space-y-6">

                <span class="{{ $colTitle }}">Links</span>

                <nav class="mb-8">
                    <a href="https://www.koreanesthesia.org/" target="_blank" class="{{ $colLink }}">
                        Koreanesthesia 2025 ↗
                    </a>

                    <a href="https://aca2025manila.org/" target="_blank" class="{{ $colLink }}">
                        ASEAN Congress 2025 ↗
                    </a>

                    <a href="https://wcacongress.org/" target="_blank"
                        class="border-none {{ $colLink }}">
                        World Congress ↗
                    </a>
                </nav>

                <span class="{{ $colTitle }}">Gallery</span>

                <nav>
                    <a href="#" wire:navigate class="{{ $colLink }}">
                        ACA 2025 — Day 1
                    </a>

                    <a href="#" wire:navigate class="{{ $colLink }}">
                        Day 2
                    </a>

                    <a href="#" wire:navigate class="border-none {{ $colLink }}">
                        Day 3
                    </a>
                </nav>

            </div>

        </div>

    </div>

</footer>