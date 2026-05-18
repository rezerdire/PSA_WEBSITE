<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div class="ticker-wrap">
    <div class="ticker-track">
        <span class="ticker-item">Midyear Convention 2026 <span class="ticker-sep">◆</span> May 14 · KCC Events Center ·
            General Santos City</span>
        <span class="ticker-item">ASEAN Congress of Anesthesiologists 2025 <span class="ticker-sep">◆</span>
            ACA2025Manila.org</span>
        <span class="ticker-item">RASPHIL Convention 2026 <span class="ticker-sep">◆</span> Subspecialty &amp;
            SIG</span>
        <span class="ticker-item">Pickleball Tournament 2026 <span class="ticker-sep">◆</span> Register Now</span>
        <span class="ticker-item">Membership Open <span class="ticker-sep">◆</span> Join the PSA Community</span>
        <span class="ticker-item">Midyear Convention 2026 <span class="ticker-sep">◆</span> May 14 · KCC Events Center ·
            General Santos City</span>
        <span class="ticker-item">ASEAN Congress of Anesthesiologists 2025 <span class="ticker-sep">◆</span>
            ACA2025Manila.org</span>
        <span class="ticker-item">RASPHIL Convention 2026 <span class="ticker-sep">◆</span> Subspecialty &amp;
            SIG</span>
        <span class="ticker-item">Pickleball Tournament 2026 <span class="ticker-sep">◆</span> Register Now</span>
        <span class="ticker-item">Membership Open <span class="ticker-sep">◆</span> Join the PSA Community</span>
    </div>
</div>

<!-- MISSION / VISION / VALUES -->
<section id="mvv">
    <div class="section-wrap">
        <div class="eyebrow" style="color:rgba(13,212,238,.6)"><span style="background:rgba(13,212,238,.6)"></span>Who
            we are</div>
    </div>
    <div class="mvv-grid reveal">
        <div class="mvv-cell">
            <div class="mvv-num">01</div>
            <div class="mvv-line"></div>
            <div class="mvv-title">Mission</div>
            <p class="mvv-body">To promote and maintain a community of <strong>responsible anesthesiologists</strong>
                who can practice safe and quality anesthesia care in pursuit of serving the interests of its members,
                their patients, and the nation.</p>
        </div>
        <div class="mvv-cell">
            <div class="mvv-num">02</div>
            <div class="mvv-line"></div>
            <div class="mvv-title">Vision</div>
            <p class="mvv-body">A Society that envisions the <strong>Filipino anesthesiologist</strong> as a world-class
                professional pursuing the PSA Mission with a deep sense of fulfillment and pride.</p>
        </div>
        <div class="mvv-cell">
            <div class="mvv-num">03</div>
            <div class="mvv-line"></div>
            <div class="mvv-title">Shared Values</div>
            <p class="mvv-body" style="margin-bottom:24px">
                <strong>Commitment to Quality Care</strong> · Excellence in every procedure and patient
                encounter.<br /><br />
                <strong>Concern for Members</strong> · Supporting our community of professionals.<br /><br />
                <strong>Professional Growth</strong> · Lifelong learning and advancement.
            </p>
            <a href="https://www.youtube.com/watch?v=hkIcSJ5enp8" target="_blank" class="link-teal"
                style="font-size:10px;color:var(--teal-bright);">Listen to PSA Hymn</a>
        </div>
    </div>
</section>

<!-- CONVENTION FEATURE -->
<section id="convention">
    <div class="section-wrap">
        <div class="conv-grid">
            <div class="conv-image-stack reveal">
                <img class="conv-img-main"
                    src="https://www.psa-inc.org/images/gallery/aca_2025/day2/_plenary_lectures/_AX_0631.jpg"
                    alt="Convention" onerror="this.src='https://www.psa-inc.org/images/gradient_bg3.jpg'" />
                <div class="conv-img-badge">
                    <div class="date">May 14<br />2026</div>
                    <div class="place">General Santos City<br />KCC Events Center</div>
                </div>
            </div>
            <div class="conv-content reveal reveal-delay-1">
                <div class="eyebrow">Featured Event</div>
                <h2 class="section-h2" style="margin-bottom:24px">Midyear<br />Convention<br />2026</h2>
                <p>Join the nation's finest anesthesiologists in General Santos City for the PSA Midyear Convention
                    2026. Featuring world-class scientific sessions, social programs, and professional networking.</p>
                <div class="conv-cards">
                    <a href="https://www.psa-inc.org/scientific-program" target="_blank" class="conv-card">
                        <div class="conv-card-icon">🔬</div>
                        <div class="conv-card-title">Scientific Program</div>
                        <div class="conv-card-sub">Lectures &amp; workshops</div>
                    </a>
                    <a href="https://www.psa-inc.org/midyear-registration-details" target="_blank" class="conv-card">
                        <div class="conv-card-icon">📋</div>
                        <div class="conv-card-title">Registration</div>
                        <div class="conv-card-sub">Secure your slot</div>
                    </a>
                    <a href="https://www.psa-inc.org/social-program" target="_blank" class="conv-card">
                        <div class="conv-card-icon">🎉</div>
                        <div class="conv-card-title">Social Programs</div>
                        <div class="conv-card-sub">Events &amp; networking</div>
                    </a>
                    <a href="https://www.psa-inc.org/pickleball-tournament" target="_blank" class="conv-card">
                        <div class="conv-card-icon">🏓</div>
                        <div class="conv-card-title">Pickleball Tournament</div>
                        <div class="conv-card-sub">Sports &amp; recreation</div>
                    </a>
                </div>
                <a class="btn-teal" href="#" wire:navigate>View All Details</a>
            </div>
        </div>
    </div>
</section>

<!-- RECENT EVENTS -->
<section id="events">
    <div class="section-wrap">
        <div class="events-header reveal">
            <div>
                <div class="eyebrow">Latest</div>
                <h2 class="section-h2">Recent Events &amp;<br />Announcements</h2>
            </div>
            <a class="link-teal" href="#" wire:navigate>View Gallery</a>
        </div>
    </div>
    <div style="max-width:1400px;margin:0 auto;padding:0 48px;">
        <div class="events-grid reveal">
            <div class="event-card" onclick="window.open('https://aca2025manila.org/','_blank')">
                <div class="event-card-img-wrap">
                    <img class="event-card-img"
                        src="https://www.psa-inc.org/images/gallery/aca_2025/day1/asean_night/DSC_3063.jpg"
                        alt="ACA 2025" />
                </div>
                <div class="event-card-body">
                    <span class="event-tag">Congress · Oct 2025</span>
                    <div class="event-title">ASEAN Congress of Anesthesiologists 2025</div>
                    <div class="event-meta">Marriott Grand Ballroom · Pasay City, Philippines</div>
                    <div class="event-arrow">→</div>
                </div>
            </div>
            <div class="event-card" onclick="window.location='#'">
                <div class="event-card-img-wrap">
                    <img class="event-card-img"
                        src="https://www.psa-inc.org/images/gallery/aca_2025/day3/FPSA_CONFERNMENT/DMS_0095.jpg"
                        alt="Midyear 2026" />
                </div>
                <div class="event-card-body">
                    <span class="event-tag">Convention · May 2026</span>
                    <div class="event-title">PSA Midyear Convention 2026</div>
                    <div class="event-meta">KCC Events Center · General Santos City</div>
                    <div class="event-arrow">→</div>
                </div>
            </div>
            <div class="event-card" onclick="window.open('https://www.psa-inc.org/pickleball-tournament','_blank')">
                <div class="event-card-img-wrap">
                    <img class="event-card-img"
                        src="https://www.psa-inc.org/images/gallery/aca_2025/day2/gala_night/DSC_5013.jpg"
                        alt="Pickleball" />
                </div>
                <div class="event-card-body">
                    <span class="event-tag">Sports · May 2026</span>
                    <div class="event-title">Pickleball Tournament 2026</div>
                    <div class="event-meta">General Santos City · Midyear Convention</div>
                    <div class="event-arrow">→</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact">
    <div class="section-wrap">
        <div class="contact-grid">
            <div class="contact-info reveal">
                <div class="eyebrow">Contact</div>
                <h2 class="section-h2" style="margin-bottom:24px;">Get in<br />Touch</h2>
                <p>Our secretariat team is available Monday through Friday to assist with membership, events, and
                    professional inquiries.</p>
                <div class="contact-block">
                    <div class="contact-label">Address</div>
                    <div class="contact-val">Room 102, PMA Building<br />1100 North Ave, Diliman<br />Quezon City, 1100
                        Metro Manila</div>
                </div>
                <div class="contact-block">
                    <div class="contact-label">Phone</div>
                    <div class="contact-val">Globe: 0917 832 9069<br />Smart: 0920 952 2120<br />(+63) 02 8452-2058 · 02
                        8929-5852</div>
                </div>
                <div class="contact-block">
                    <div class="contact-label">Email</div>
                    <div class="contact-val"><a href="mailto:psainc_sec@yahoo.com"
                            style="color:var(--teal-mid);text-decoration:none;">psainc_sec@yahoo.com</a></div>
                </div>
                <div class="contact-block">
                    <div class="contact-label">Office Hours</div>
                    <div class="contact-val">Monday – Friday<br />9:00 AM – 5:00 PM</div>
                </div>
            </div>
            <div class="contact-map reveal reveal-delay-1">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9180.579689802897!2d121.02786002090562!3d14.658309365108796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6e2af5aed05%3A0xa349a00f5cc8d19!2sThe%20Philippine%20Society%20of%20Anesthesiologists%2C%20Inc.!5e0!3m2!1sen!2sph!4v1745475471114!5m2!1sen!2sph"
                    allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>