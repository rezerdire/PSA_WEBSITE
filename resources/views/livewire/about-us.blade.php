<?php

use Livewire\Component;

new class extends Component {
    public string $activeTab = 'officers';
    public string $legacyTab = 'past-presidents';

    public function setTab(string $tab): void
    {
        $this->activeTab = $tab;
    }

    public function setLegacyTab(string $tab): void
    {
        $this->legacyTab = $tab;
    }
};
?>

{{-- Single root element required by Livewire --}}
<div>

{{-- INNER HERO --}}
<div class="inner-hero">
    <div class="section-wrap inner-hero-content">
        <div class="inner-hero-label">About Us</div>
        <h1 class="inner-hero-title">Officers, Boards<br />&amp; Legacy</h1>
    </div>
</div>

{{-- STICKY TAB NAV --}}
<div id="about-tabs-bar" style="
    position: sticky;
    top: 72px;
    z-index: 100;
    background: rgba(2,15,26,0.97);
    backdrop-filter: blur(16px);
    border-bottom: 1px solid rgba(13,212,238,0.12);
">
    <div class="section-wrap" style="display:flex;gap:0;overflow-x:auto;scrollbar-width:none;">
        @php
            $tabs = [
                'officers'     => 'Officers &amp; Board',
                'subspecialty' => 'Subspecialty &amp; SIG',
                'chapters'     => 'Chapter Presidents',
                'legacy'       => 'Legacy',
            ];
        @endphp

        @foreach($tabs as $key => $label)
            <button
                wire:click="setTab('{{ $key }}')"
                style="
                    font-family: 'Space Mono', monospace;
                    font-size: 10px;
                    letter-spacing: 0.12em;
                    text-transform: uppercase;
                    padding: 20px 28px;
                    background: none;
                    border: none;
                    border-bottom: 2px solid {{ $activeTab === $key ? 'var(--teal-bright)' : 'transparent' }};
                    color: {{ $activeTab === $key ? 'var(--teal-bright)' : 'rgba(255,255,255,0.45)' }};
                    cursor: pointer;
                    white-space: nowrap;
                    transition: color 0.2s, border-color 0.2s;
                "
            >{!! $label !!}</button>
        @endforeach
    </div>
</div>

{{-- ── TAB 1: OFFICERS & BOARD ── --}}
@if($activeTab === 'officers')
<div class="inner-body">
    <div class="section-wrap">

        <div style="margin-bottom:64px;">
            <p style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.2em;text-transform:uppercase;color:var(--teal-mid);margin-bottom:10px;">2026 Term</p>
            <h2 class="section-h2" style="margin-bottom:16px;">Current Executive<br/>Officers &amp; Board</h2>
            <p style="font-size:13.5px;line-height:1.8;color:var(--muted);max-width:480px;">
                The elected officers and directors who guide the Philippine Society of Anesthesiologists in advancing safe, quality anesthesia care nationwide.
            </p>
        </div>

        {{-- EXECUTIVE OFFICERS --}}
        <div style="margin-bottom:72px;">
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:32px;">
                <div style="width:28px;height:2px;background:linear-gradient(90deg,var(--teal-bright),var(--emerald-bright));"></div>
                <span style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.18em;text-transform:uppercase;color:var(--teal-mid);">Executive Officers</span>
            </div>
            <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);">
                <img
                    src="{{ asset('Images/PSA_Executive_Officers.png') }}"
                    alt="PSA Executive Officers 2026"
                    style="width:100%;display:block;"
                />
            </div>
        </div>

        {{-- BOARD OF DIRECTORS --}}
        <div style="margin-bottom:72px;">
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:32px;">
                <div style="width:28px;height:2px;background:linear-gradient(90deg,var(--teal-bright),var(--emerald-bright));"></div>
                <span style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.18em;text-transform:uppercase;color:var(--teal-mid);">Board of Directors</span>
            </div>
            <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);">
                <img
                    src="{{ asset('Images/PSA_Board_of_Directors.png') }}"
                    alt="PSA Board of Directors 2026"
                    style="width:100%;display:block;"
                />
            </div>
        </div>

        {{-- REGIONAL DIRECTORS --}}
        <div>
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:32px;">
                <div style="width:28px;height:2px;background:linear-gradient(90deg,var(--teal-bright),var(--emerald-bright));"></div>
                <span style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.18em;text-transform:uppercase;color:var(--teal-mid);">Regional Directors</span>
            </div>
            <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);">
                <img
                    src="{{ asset('Images/PSA_Regional_Directors.png') }}"
                    alt="PSA Regional Directors 2026"
                    style="width:100%;display:block;"
                />
            </div>
        </div>

    </div>
</div>
@endif

{{-- ── TAB 2: SUBSPECIALTY & SIG ── --}}
@if($activeTab === 'subspecialty')
<div class="inner-body">
    <div class="section-wrap">

        <div style="margin-bottom:64px;">
            <p style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.2em;text-transform:uppercase;color:var(--teal-mid);margin-bottom:10px;">Specialty Groups</p>
            <h2 class="section-h2" style="margin-bottom:16px;">Subspecialty &amp;<br/>Affiliate & Special Interest Groups</h2>
            <p style="font-size:13.5px;line-height:1.8;color:var(--muted);max-width:520px;">
                Focused communities within the PSA that advance specific areas of anesthesia practice, research, and education.
            </p>
        </div>

        {{-- RASPHIL --}}
        <div style="margin-bottom:72px;">
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:32px;">
                <div style="width:28px;height:2px;background:linear-gradient(90deg,var(--teal-bright),var(--emerald-bright));"></div>
                <span style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.18em;text-transform:uppercase;color:var(--teal-mid);">Subspecialty Societies (RASPHIL)</span>
            </div>
            <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);">
                <img
                    src="{{ asset('Images/Subspecialty-and-ISG.png') }}"
                    alt="PSA Subspecialty Societies"
                    style="width:100%;display:block;"
                />
            </div>
        </div>

        {{-- SIG --}}
        <div>
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:32px;">
                <div style="width:28px;height:2px;background:linear-gradient(90deg,var(--teal-bright),var(--emerald-bright));"></div>
                <span style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.18em;text-transform:uppercase;color:var(--teal-mid);">Special Interest Groups (SIG)</span>
            </div>
            <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);">
                <img
                    src="{{ asset('Images/Subspecialty-and-ISG_1.png') }}"
                    alt="PSA Special Interest Groups"
                    style="width:100%;display:block;"
                />
            </div>
        </div>



    </div>
</div>


@endif

{{-- ── TAB 3: CHAPTER PRESIDENTS ── --}}
@if($activeTab === 'chapters')
<div class="inner-body">
    <div class="section-wrap">

        <div style="margin-bottom:64px;">
            <p style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.2em;text-transform:uppercase;color:var(--teal-mid);margin-bottom:10px;">Regional Chapters</p>
            <h2 class="section-h2" style="margin-bottom:16px;">Chapter Presidents</h2>
            <p style="font-size:13.5px;line-height:1.8;color:var(--muted);max-width:520px;">
                PSA chapters across Luzon, Visayas, and Mindanao led by dedicated presidents who champion anesthesia standards in their respective regions.
            </p>
        </div>

        {{-- LUZON --}}
        <div style="margin-bottom:72px;">
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:32px;">
                <div style="width:28px;height:2px;background:linear-gradient(90deg,var(--teal-bright),var(--emerald-bright));"></div>
                <span style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.18em;text-transform:uppercase;color:var(--teal-mid);">Luzon</span>
            </div>
            <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);">
                <img
                    src="{{ asset('Images/Chapter-Presidents_Luzon.png') }}"
                    alt="PSA Chapter Presidents — Luzon"
                    style="width:100%;display:block;"
                />
            </div>
        </div>

        {{-- VISAYAS --}}
        <div style="margin-bottom:72px;">
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:32px;">
                <div style="width:28px;height:2px;background:linear-gradient(90deg,var(--teal-bright),var(--emerald-bright));"></div>
                <span style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.18em;text-transform:uppercase;color:var(--teal-mid);">Visayas</span>
            </div>
            <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);">
                <img
                    src="{{ asset('Images/Chapter-Presidents_Visayas.png') }}"
                    alt="PSA Chapter Presidents — Visayas"
                    style="width:100%;display:block;"
                />
            </div>
        </div>

        {{-- MINDANAO --}}
        <div>
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:32px;">
                <div style="width:28px;height:2px;background:linear-gradient(90deg,var(--teal-bright),var(--emerald-bright));"></div>
                <span style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.18em;text-transform:uppercase;color:var(--teal-mid);">Mindanao</span>
            </div>
            <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);">
                <img
                    src="{{ asset('Images/Chapter-Presidents_Mindanao.png') }}"
                    alt="PSA Chapter Presidents — Mindanao"
                    style="width:100%;display:block;"
                />
            </div>
        </div>

    </div>
</div>
@endif

{{-- ── TAB 4: LEGACY ── --}}
@if($activeTab === 'legacy')
<div class="inner-body">
    <div class="section-wrap">

        <div style="margin-bottom:48px;">
            <p style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.2em;text-transform:uppercase;color:var(--teal-mid);margin-bottom:10px;">70+ Years of Excellence</p>
            <h2 class="section-h2" style="margin-bottom:16px;">Our Legacy</h2>
            <p style="font-size:13.5px;line-height:1.8;color:var(--muted);max-width:520px;">
                Honoring the distinguished leaders and outstanding members who have shaped the Philippine Society of Anesthesiologists since 1954.
            </p>
        </div>

        {{-- Sub-tabs --}}
        <div style="display:flex;gap:0;border-bottom:1px solid var(--border);margin-bottom:56px;">
            @php
                $ltabs = [
                    'past-presidents' => 'Past Presidents',
                    'awardees'        => 'Awardees',
                    'hymn'            => 'PSA Hymn',
                ];
            @endphp

            @foreach($ltabs as $lk => $lv)
                <button
                    wire:click="setLegacyTab('{{ $lk }}')"
                    style="
                        font-family:'Space Mono',monospace;
                        font-size:10px;
                        letter-spacing:0.12em;
                        text-transform:uppercase;
                        padding:14px 28px;
                        background:none;
                        border:none;
                        border-bottom:2px solid {{ $legacyTab === $lk ? 'var(--teal-mid)' : 'transparent' }};
                        color:{{ $legacyTab === $lk ? 'var(--ocean)' : 'var(--muted)' }};
                        cursor:pointer;
                        transition:all 0.2s;
                        margin-bottom:-1px;
                    "
                >{{ $lv }}</button>
            @endforeach
        </div>

        {{-- PAST PRESIDENTS --}}
        @if($legacyTab === 'past-presidents')
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:32px;">
                <div style="width:28px;height:2px;background:linear-gradient(90deg,var(--teal-bright),var(--emerald-bright));"></div>
                <span style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.18em;text-transform:uppercase;color:var(--teal-mid);">Presidents of the PSA since 1954</span>
            </div>
            <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);">
                <img
                    src="{{ asset('Images/Past_Presidents_2025.png') }}"
                    alt="PSA Past Presidents"
                    style="width:100%;display:block;"
                />
            </div>
        @endif

      {{-- AWARDEES --}}
        @if($legacyTab === 'awardees')
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:32px;">
                <div style="width:28px;height:2px;background:linear-gradient(90deg,var(--teal-bright),var(--emerald-bright));"></div>
                <span style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.18em;text-transform:uppercase;color:var(--teal-mid);">PSA Awardees</span>
            </div>

            {{-- Quintin J. Gomez Awardees --}}
            <div style="margin-bottom:32px;">
                <p style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.15em;text-transform:uppercase;color:var(--teal-mid);margin-bottom:12px;">Quintin J. Gomez Award</p>
                <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);">
                    <img
                        src="{{ asset('Images/Quintin_J_Gomez_Awardees.png') }}"
                        alt="Quintin J. Gomez Awardees"
                        style="width:100%;display:block;"
                    />
                </div>
            </div>

            {{-- Manuel Silao Leadership Awardee --}}
            <div>
                <p style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.15em;text-transform:uppercase;color:var(--teal-mid);margin-bottom:12px;">Manuel Silao Leadership Award</p>
                <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);">
                    <img
                        src="{{ asset('Images/Manuel_Silao_Leadership_Awardee.png') }}"
                        alt="Manuel Silao Leadership Awardee"
                        style="width:100%;display:block;"
                    />
                </div>
            </div>
        @endif
        {{-- HYMN --}}
        @if($legacyTab === 'hymn')
            <div style="max-width:720px;margin:0 auto;text-align:center;">
                <div style="margin-bottom:48px;">
           
                    <h3 style="font-family:'Playfair Display',serif;font-size:32px;font-weight:700;color:var(--ocean);margin-bottom:12px;">The PSA Hymn</h3>
                    <p style="font-size:13.5px;line-height:1.8;color:var(--muted);">
                        Our anthem embodies the values, mission, and unity of the Philippine Society of Anesthesiologists.
                    </p>
                </div>
                <div style="
                    position:relative;aspect-ratio:16/9;
                    border-radius:16px;overflow:hidden;
                    border:1px solid var(--border);
                    margin-bottom:40px;
                    box-shadow:0 24px 60px rgba(0,0,0,0.15);
                ">
                    <iframe
                        src="https://www.youtube.com/embed/hkIcSJ5enp8"
                        title="PSA Hymn"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        style="position:absolute;inset:0;width:100%;height:100%;border:none;"
                    ></iframe>
                </div>
                <a href="https://www.youtube.com/watch?v=hkIcSJ5enp8" target="_blank" class="link-teal" style="justify-content:center;">Watch on YouTube</a>
            </div>
        @endif

    </div>
</div>
@endif

</div>{{-- end single Livewire root --}}