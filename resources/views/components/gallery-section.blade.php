@props(['categories', 'images'])

<section id="gallery-section" style="background: var(--deep); padding: 120px 0; min-height: 100vh; position:relative; overflow:hidden;">

    <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(13,212,238,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(13,212,238,0.03) 1px,transparent 1px);background-size:60px 60px;pointer-events:none;"></div>
    <div style="position:absolute;top:-20%;right:-10%;width:600px;height:600px;background:radial-gradient(circle,rgba(16,185,129,0.1) 0%,transparent 70%);pointer-events:none;"></div>

    <div class="section-wrap" style="position:relative;z-index:2;">

        <div style="margin-bottom:60px;">
            <div class="inner-hero-label">Our Moments</div>
            <h2 class="section-h2 light" style="margin-bottom:16px;">Gallery</h2>
            <p style="font-size:14px;color:rgba(255,255,255,0.4);max-width:480px;line-height:1.8;">
                A visual record of our conventions, seminars, and milestones through the years.
            </p>
        </div>

        <div style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:48px;">
            <button onclick="filterGallery('all', this)" class="gallery-filter"
                style="font-family:'Space Mono',monospace;font-size:10px;letter-spacing:0.12em;text-transform:uppercase;padding:10px 24px;border:1px solid transparent;background:linear-gradient(135deg,var(--teal-mid),var(--emerald));color:white;cursor:pointer;transition:all 0.2s;">
                All
            </button>
            @foreach($categories as $category)
                <button onclick="filterGallery('{{ $category->slug }}', this)" class="gallery-filter"
                    style="font-family:'Space Mono',monospace;font-size:10px;letter-spacing:0.12em;text-transform:uppercase;padding:10px 24px;border:1px solid rgba(13,212,238,0.2);background:transparent;color:rgba(255,255,255,0.5);cursor:pointer;transition:all 0.2s;">
                    {{ $category->name }}
                </button>
            @endforeach
        </div>

        @if($images->isEmpty())
            <div style="text-align:center;padding:80px 0;color:rgba(255,255,255,0.25);">
                <div style="font-family:'Playfair Display',serif;font-size:24px;margin-bottom:8px;">No images yet</div>
                <div style="font-size:12px;letter-spacing:0.1em;text-transform:uppercase;">Check back soon</div>
            </div>
        @else
            <div id="gallery-grid" style="columns:4;column-gap:12px;">
                @foreach($images as $image)
                    <div class="gallery-item"
                        data-category="{{ $image->category?->slug ?? 'uncategorized' }}"
                        data-src="{{ Storage::disk('public')->url($image->image) }}"
                        data-title="{{ $image->title }}"
                        data-catname="{{ $image->category?->name ?? 'Uncategorized' }}"
                        style="break-inside:avoid;margin-bottom:12px;overflow:hidden;position:relative;cursor:pointer;"
                        onclick="openLightboxIndex(galleryItems.indexOf(this))"
                    >
                        <img
                            src="{{ Storage::disk('public')->url($image->image) }}"
                            alt="{{ $image->title }}"
                            loading="lazy"
                            style="width:100%;display:block;transition:transform 0.5s ease;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'"
                        />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(2,15,26,0.85) 0%,transparent 60%);opacity:0;transition:opacity 0.3s;display:flex;align-items:flex-end;padding:16px;"
                            onmouseover="this.style.opacity='1'"
                            onmouseout="this.style.opacity='0'">
                            <div>
                                <div style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:0.15em;text-transform:uppercase;color:var(--teal-bright);margin-bottom:4px;">
                                    {{ $image->category?->name ?? 'Uncategorized' }}
                                </div>
                                <div style="font-family:'Playfair Display',serif;font-size:14px;color:white;font-weight:600;">
                                    {{ $image->title }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    {{-- Lightbox --}}
    <div id="lightbox" style="display:none;position:fixed;inset:0;z-index:9999;background:rgba(2,15,26,0.97);backdrop-filter:blur(16px);flex-direction:column;align-items:center;justify-content:center;" onclick="handleLightboxClick(event)">

        {{-- Top bar --}}
        <div style="position:absolute;top:0;left:0;right:0;display:flex;align-items:center;justify-content:space-between;padding:20px 32px;z-index:10;">
            <div id="lightbox-counter" style="font-family:'Space Mono',monospace;font-size:10px;letter-spacing:0.15em;color:rgba(255,255,255,0.35);"></div>
            <div style="display:flex;gap:16px;align-items:center;">
                <button onclick="event.stopPropagation();zoomIn()" title="Zoom In"
                    style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);color:rgba(255,255,255,0.6);width:36px;height:36px;cursor:pointer;font-size:16px;display:flex;align-items:center;justify-content:center;transition:all 0.2s;"
                    onmouseover="this.style.background='rgba(13,212,238,0.15)';this.style.color='var(--teal-bright)'"
                    onmouseout="this.style.background='rgba(255,255,255,0.08)';this.style.color='rgba(255,255,255,0.6)'">+</button>
                <button onclick="event.stopPropagation();zoomOut()" title="Zoom Out"
                    style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);color:rgba(255,255,255,0.6);width:36px;height:36px;cursor:pointer;font-size:16px;display:flex;align-items:center;justify-content:center;transition:all 0.2s;"
                    onmouseover="this.style.background='rgba(13,212,238,0.15)';this.style.color='var(--teal-bright)'"
                    onmouseout="this.style.background='rgba(255,255,255,0.08)';this.style.color='rgba(255,255,255,0.6)'">−</button>
                <button onclick="event.stopPropagation();resetZoom()" title="Reset Zoom"
                    style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);color:rgba(255,255,255,0.6);width:36px;height:36px;cursor:pointer;font-size:13px;display:flex;align-items:center;justify-content:center;transition:all 0.2s;"
                    onmouseover="this.style.background='rgba(13,212,238,0.15)';this.style.color='var(--teal-bright)'"
                    onmouseout="this.style.background='rgba(255,255,255,0.08)';this.style.color='rgba(255,255,255,0.6)'">⊙</button>
                <button onclick="event.stopPropagation();closeLightbox()" title="Close"
                    style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);color:rgba(255,255,255,0.6);width:36px;height:36px;cursor:pointer;font-size:16px;display:flex;align-items:center;justify-content:center;transition:all 0.2s;"
                    onmouseover="this.style.background='rgba(220,50,50,0.2)';this.style.color='white'"
                    onmouseout="this.style.background='rgba(255,255,255,0.08)';this.style.color='rgba(255,255,255,0.6)'">✕</button>
            </div>
        </div>

        {{-- Prev button --}}
        <button id="lb-prev" onclick="event.stopPropagation();navigateLightbox(-1)"
            style="position:absolute;left:24px;top:50%;transform:translateY(-50%);background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);color:rgba(255,255,255,0.6);width:48px;height:48px;cursor:pointer;font-size:20px;display:flex;align-items:center;justify-content:center;transition:all 0.2s;z-index:10;"
            onmouseover="this.style.background='linear-gradient(135deg,var(--teal-mid),var(--emerald))';this.style.color='white';this.style.borderColor='transparent'"
            onmouseout="this.style.background='rgba(255,255,255,0.06)';this.style.color='rgba(255,255,255,0.6)';this.style.borderColor='rgba(255,255,255,0.12)'">‹</button>

        {{-- Image wrapper (zoom/pan target) --}}
        <div id="lb-img-wrap" style="overflow:hidden;display:flex;align-items:center;justify-content:center;width:90vw;max-height:78vh;" onclick="event.stopPropagation()">
            <img id="lightbox-img" src="" alt=""
                style="max-width:100%;max-height:78vh;object-fit:contain;display:block;transition:transform 0.25s ease;transform-origin:center center;cursor:grab;"
            />
        </div>

        {{-- Next button --}}
        <button id="lb-next" onclick="event.stopPropagation();navigateLightbox(1)"
            style="position:absolute;right:24px;top:50%;transform:translateY(-50%);background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);color:rgba(255,255,255,0.6);width:48px;height:48px;cursor:pointer;font-size:20px;display:flex;align-items:center;justify-content:center;transition:all 0.2s;z-index:10;"
            onmouseover="this.style.background='linear-gradient(135deg,var(--teal-mid),var(--emerald))';this.style.color='white';this.style.borderColor='transparent'"
            onmouseout="this.style.background='rgba(255,255,255,0.06)';this.style.color='rgba(255,255,255,0.6)';this.style.borderColor='rgba(255,255,255,0.12)'">›</button>

        {{-- Caption --}}
        <div style="margin-top:16px;text-align:center;" onclick="event.stopPropagation()">
            <div id="lightbox-category" style="font-family:'Space Mono',monospace;font-size:10px;letter-spacing:0.2em;text-transform:uppercase;color:var(--teal-bright);margin-bottom:6px;"></div>
            <div id="lightbox-title" style="font-family:'Playfair Display',serif;font-size:20px;color:white;"></div>
        </div>
    </div>

    <script>
        let galleryItems = [];
        let currentIndex = 0;
        let currentZoom = 1;
        const ZOOM_STEP = 0.25;
        const ZOOM_MAX = 3;
        const ZOOM_MIN = 0.5;

        // Build items array from DOM after load
        document.addEventListener('DOMContentLoaded', () => {
            galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
        });

        function getVisibleItems() {
            return galleryItems.filter(i => i.style.display !== 'none');
        }

        function openLightboxIndex(index) {
            const visible = getVisibleItems();
            currentIndex = index;
            const item = visible[currentIndex] ?? galleryItems[currentIndex];
            if (!item) return;

            resetZoom();
            document.getElementById('lightbox-img').src = item.dataset.src;
            document.getElementById('lightbox-title').textContent = item.dataset.title;
            document.getElementById('lightbox-category').textContent = item.dataset.catname;
            updateCounter();
            document.getElementById('lightbox').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function navigateLightbox(dir) {
            const visible = getVisibleItems();
            currentIndex = (currentIndex + dir + visible.length) % visible.length;
            const item = visible[currentIndex];
            resetZoom();
            document.getElementById('lightbox-img').src = item.dataset.src;
            document.getElementById('lightbox-title').textContent = item.dataset.title;
            document.getElementById('lightbox-category').textContent = item.dataset.catname;
            updateCounter();
        }

        function updateCounter() {
            const visible = getVisibleItems();
            document.getElementById('lightbox-counter').textContent = (currentIndex + 1) + ' / ' + visible.length;
        }

        function zoomIn() {
            currentZoom = Math.min(currentZoom + ZOOM_STEP, ZOOM_MAX);
            applyZoom();
        }

        function zoomOut() {
            currentZoom = Math.max(currentZoom - ZOOM_STEP, ZOOM_MIN);
            applyZoom();
        }

        function resetZoom() {
            currentZoom = 1;
            applyZoom();
        }

        function applyZoom() {
            document.getElementById('lightbox-img').style.transform = `scale(${currentZoom})`;
            document.getElementById('lightbox-img').style.cursor = currentZoom > 1 ? 'move' : 'grab';
        }

        // Scroll wheel zoom
        document.getElementById('lightbox-img')?.addEventListener('wheel', (e) => {
            e.preventDefault();
            e.deltaY < 0 ? zoomIn() : zoomOut();
        }, { passive: false });

        function handleLightboxClick(e) {
            if (e.target === document.getElementById('lightbox')) {
                closeLightbox();
            }
        }

        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
            document.body.style.overflow = '';
            resetZoom();
        }

        function filterGallery(slug, btn) {
            document.querySelectorAll('.gallery-filter').forEach(b => {
                b.style.background = 'transparent';
                b.style.borderColor = 'rgba(13,212,238,0.2)';
                b.style.color = 'rgba(255,255,255,0.5)';
            });
            btn.style.background = 'linear-gradient(135deg,var(--teal-mid),var(--emerald))';
            btn.style.borderColor = 'transparent';
            btn.style.color = 'white';
            document.querySelectorAll('.gallery-item').forEach(item => {
                item.style.display = (slug === 'all' || item.dataset.category === slug) ? 'block' : 'none';
            });
        }

        // Keyboard navigation
        document.addEventListener('keydown', e => {
            const lb = document.getElementById('lightbox');
            if (lb.style.display === 'none') return;
            if (e.key === 'Escape')       closeLightbox();
            if (e.key === 'ArrowRight')   navigateLightbox(1);
            if (e.key === 'ArrowLeft')    navigateLightbox(-1);
            if (e.key === '+')            zoomIn();
            if (e.key === '-')            zoomOut();
            if (e.key === '0')            resetZoom();
        });

        // Fix: rebuild galleryItems index on click using visible items
        document.addEventListener('DOMContentLoaded', () => {
            galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
            galleryItems.forEach((item, i) => {
                item.onclick = () => {
                    const visible = getVisibleItems();
                    currentIndex = visible.indexOf(item);
                    openLightboxIndex(currentIndex);
                };
            });
        });
    </script>
</section>          