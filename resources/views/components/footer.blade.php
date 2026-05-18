<?php

use Livewire\Component;

new class extends Component {
    //
};
?>
<footer
    style="background: #020f1a; padding-top: 80px; padding-bottom: 0; border-top: 1px solid rgba(13,212,238,0.12); position: relative; overflow: hidden;">



    {{-- Radial glow (mirrors #mvv::before) --}}
    <div
        style="position:absolute;inset:0;background:radial-gradient(ellipse 60% 60% at 50% 110%,rgba(16,185,129,0.07) 0%,transparent 70%);pointer-events:none;z-index:0;">
    </div>

    {{-- Grid lines (mirrors .hero-grid) --}}
    <div
        style="position:absolute;inset:0;background-image:linear-gradient(rgba(13,212,238,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(13,212,238,0.03) 1px,transparent 1px);background-size:60px 60px;pointer-events:none;z-index:0;">
    </div>

    {{-- NAV-EXACT CONTAINER --}}
    <div style="max-width:1400px;margin:0 auto;padding:0 48px;position:relative;z-index:1;">



        {{-- MAIN GRID --}}
        <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr 1fr;gap:56px;margin-bottom:64px;">

            {{-- BRAND COLUMN --}}
            <div>
                <a href="#" style="display:flex;align-items:center;gap:14px;text-decoration:none;margin-bottom:28px;">
                    <img src="https://www.psa-inc.org/assets/template/logo/PSA-Logoo.png"
                        style="height:38px;width:auto;filter:brightness(0) invert(1);opacity:0.9;" />
                    <div style="display:flex;flex-direction:column;">
                        <span
                            style="font-family:'Playfair Display',serif;font-size:15px;font-weight:600;color:white;letter-spacing:0.02em;line-height:1.2;">Philippine
                            Society of Anesthesiologists</span>
                        <span
                            style="font-size:10px;color:rgba(255,255,255,0.4);letter-spacing:0.12em;text-transform:uppercase;">Est.
                            1954</span>
                    </div>
                </a>

                <p
                    style="font-family:'Playfair Display',serif;font-size:13.5px;color:rgba(255,255,255,0.35);font-style:italic;line-height:1.85;margin-bottom:28px;max-width:260px;">
                    "World-class Filipino anesthesiologists in service of the nation."
                </p>

                {{-- Contact block mirrors .contact-block --}}
                <div style="padding-top:24px;border-top:1px solid rgba(255,255,255,0.06);">
                    <p
                        style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.2em;text-transform:uppercase;color:#22d3ee;margin-bottom:10px;">
                        Contact</p>
                    <p style="font-size:12px;color:rgba(255,255,255,0.4);line-height:1.85;letter-spacing:0.04em;">
                        psainc_sec@yahoo.com<br>
                        0917 832 9069<br>
                        (+63) 02 8452-2058
                    </p>
                </div>
            </div>

            @php
                $col_title = "font-family:'Space Mono',monospace;font-size:10px;letter-spacing:0.18em;text-transform:uppercase;color:rgba(255,255,255,0.4);margin-bottom:20px;display:block;";
                $col_link = "display:block;font-size:11.5px;letter-spacing:0.08em;text-transform:uppercase;color:rgba(255,255,255,0.6);text-decoration:none;padding:9px 0;border-bottom:1px solid rgba(255,255,255,0.05);transition:all 0.15s;";
            @endphp

            {{-- ABOUT --}}
            <div>
                <span style="{{ $col_title }}">About Us</span>
                <nav>
                    <a href="#" wire:navigate style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">Officers &amp;
                        Board</a>
                    <a href="#" wire:navigate style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">Subspecialty
                        &amp; SIG</a>
                    <a href="#" wire:navigate style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">Chapter
                        Presidents</a>
                    <a href="#" wire:navigate style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">Legacy</a>
                    <a href="#" wire:navigate style="{{ $col_link }};border-bottom:none;"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">Membership</a>
                </nav>
            </div>

            {{-- CME --}}
            <div>
                <span style="{{ $col_title }}">CME Activities</span>
                <nav>
                    <a href="#" wire:navigate style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">Midyear
                        Convention 2026</a>
                    <a href="https://aca2025manila.org/" target="_blank" style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">ACA 2025
                        Manila ↗</a>
                    <a href="https://www.psa-inc.org/tagisan" target="_blank" style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">Tagisan ng
                        Talino ↗</a>
                    <a href="#" wire:navigate style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">Interesting
                        Case Contest</a>
                    <a href="#" wire:navigate style="{{ $col_link }};border-bottom:none;"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">PJA</a>
                </nav>
            </div>

            {{-- LINKS + GALLERY --}}
            <div>
                <span style="{{ $col_title }}">Links</span>
                <nav style="margin-bottom:32px;">
                    <a href="https://www.koreanesthesia.org/" target="_blank" style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">Koreanesthesia
                        2025 ↗</a>
                    <a href="https://aca2025manila.org/" target="_blank" style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">ASEAN Congress
                        2025 ↗</a>
                    <a href="https://wcacongress.org/" target="_blank" style="{{ $col_link }};border-bottom:none;"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">World Congress
                        ↗</a>
                </nav>

                <span style="{{ $col_title }}">Gallery</span>
                <nav>
                    <a href="#" wire:navigate style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">ACA 2025 — Day
                        1</a>
                    <a href="#" wire:navigate style="{{ $col_link }}"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">Day 2</a>
                    <a href="#" wire:navigate style="{{ $col_link }};border-bottom:none;"
                        onmouseover="this.style.color='#22d3ee';this.style.paddingLeft='8px';"
                        onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0';">Day 3</a>
                </nav>
            </div>

        </div>



    </div>

</footer>