@props(['categories', 'images'])

<section id="gallery-section"class="relative overflow-hidden min-h-screen py-[120px]">
    {{-- Background Grid --}}
    <div
        class="absolute inset-0 pointer-events-none bg-[var(--cream)] bg-[size:60px_60px]"
    ></div>

    {{-- Glow --}}
    <div
        class="absolute top-[-20%] right-[-10%] w-[600px] h-[600px] pointer-events-none bg-[radial-gradient(circle,rgba(16,185,129,0.1)_0%,transparent_70%)]"
    ></div>

    <div class="section-wrap relative z-10">

        {{-- Heading --}}
        <div class="mb-[60px]">
            <h2 class="section-h2 mb-4">Gallery</h2>

            <p class="max-w-[480px] text-sm leading-[1.8]">
                A visual record of our conventions, seminars, and milestones through the years.
            </p>
        </div>

  {{-- Filters --}}
{{-- Filters --}}
<div class="mb-8 flex flex-wrap gap-3">

    <button
        class="gallery-filter px-6 py-2.5 rounded-full text-sm font-semibold border transition-all duration-200
               bg-gradient-to-br from-[var(--teal-mid)] to-[var(--emerald)] text-white border-transparent shadow-md"
        onclick="filterGallery('all', this)"
    >
        All
    </button>

    @foreach($categories as $category)
        <button
            class="gallery-filter px-6 py-2.5 rounded-full text-sm font-semibold border transition-all duration-200
                   bg-transparent text-white/70 border-[rgba(13,212,238,0.25)]
                   hover:text-white hover:border-[rgba(13,212,238,0.6)] hover:bg-[rgba(13,212,238,0.08)]"
            onclick="filterGallery('{{ $category->slug }}', this)"
        >
            {{ $category->name }}
        </button>
    @endforeach

</div>
        {{-- Empty State --}}
        @if($images->isEmpty())

            <div class="py-20 text-center text-white/25">

                <div class="mb-2 text-2xl font-serif">
                    No images yet
                </div>

                <div class="text-xs uppercase tracking-[0.1em]">
                    Check back soon
                </div>

            </div>

        @else

            {{-- Masonry Grid --}}
            <div
                id="gallery-grid"
                class="columns-1 sm:columns-2 lg:columns-3 xl:columns-4 gap-3"
            >

                @foreach($images as $image)

                    <div
                        class="gallery-item group relative mb-3 break-inside-avoid overflow-hidden cursor-pointer"
                        data-category="{{ $image->category?->slug ?? 'uncategorized' }}"
                        data-src="{{ Storage::disk('public')->url($image->image) }}"
                        data-title="{{ $image->title }}"
                        data-catname="{{ $image->category?->name ?? 'Uncategorized' }}"
                        onclick="openLightboxIndex(galleryItems.indexOf(this))"
                    >

                        {{-- Image --}}
                        <img
                            src="{{ Storage::disk('public')->url($image->image) }}"
                            alt="{{ $image->title }}"
                            loading="lazy"
                            class="w-full block transition-transform duration-500 ease-in-out group-hover:scale-105"
                        />

                        {{-- Overlay --}}
                        <div
                            class="absolute inset-0 flex items-end p-4 opacity-0 transition-opacity duration-300 bg-gradient-to-t from-[rgba(2,15,26,0.85)] to-transparent group-hover:opacity-100"
                        >
                            <div>

                                <div class="mb-1 font-mono text-[9px] uppercase tracking-[0.15em] text-[var(--teal-bright)]">
                                    {{ $image->category?->name ?? 'Uncategorized' }}
                                </div>

                                <div class="text-sm font-semibold text-white font-serif">
                                    {{ $image->title }}
                                </div>

                            </div>
                        </div>

                    </div>

                @endforeach

            </div>

        @endif

    </div>

    {{-- LIGHTBOX --}}
    <div
        id="lightbox"
        class="fixed inset-0 z-[9999] hidden flex-col items-center justify-center bg-[rgba(2,15,26,0.97)] backdrop-blur-xl"
        onclick="handleLightboxClick(event)"
    >

        {{-- Top Bar --}}
        <div class="absolute top-0 left-0 right-0 z-10 flex items-center justify-between px-8 py-5">

            <div
                id="lightbox-counter"
                class="font-mono text-[10px] tracking-[0.15em] text-white/35"
            ></div>

            <div class="flex items-center gap-4">

                {{-- Zoom In --}}
                <button
                    onclick="event.stopPropagation();zoomIn()"
                    title="Zoom In"
                    class="w-9 h-9 flex items-center justify-center border border-white/10 bg-white/10 text-white/60 text-base transition-all duration-200 hover:bg-cyan-500/20 hover:text-cyan-300"
                >
                    +
                </button>

                {{-- Zoom Out --}}
                <button
                    onclick="event.stopPropagation();zoomOut()"
                    title="Zoom Out"
                    class="w-9 h-9 flex items-center justify-center border border-white/10 bg-white/10 text-white/60 text-base transition-all duration-200 hover:bg-cyan-500/20 hover:text-cyan-300"
                >
                    −
                </button>

                {{-- Reset --}}
                <button
                    onclick="event.stopPropagation();resetZoom()"
                    title="Reset Zoom"
                    class="w-9 h-9 flex items-center justify-center border border-white/10 bg-white/10 text-white/60 text-sm transition-all duration-200 hover:bg-cyan-500/20 hover:text-cyan-300"
                >
                    ⊙
                </button>

                {{-- Close --}}
                <button
                    onclick="event.stopPropagation();closeLightbox()"
                    title="Close"
                    class="w-9 h-9 flex items-center justify-center border border-white/10 bg-white/10 text-white/60 text-base transition-all duration-200 hover:bg-red-500/20 hover:text-white"
                >
                    ✕
                </button>

            </div>

        </div>

        {{-- Prev --}}
        <button
            id="lb-prev"
            onclick="event.stopPropagation();navigateLightbox(-1)"
            class="absolute left-6 top-1/2 -translate-y-1/2 z-10 w-12 h-12 flex items-center justify-center border border-white/10 bg-white/5 text-white/60 text-[20px] transition-all duration-200 hover:bg-gradient-to-br hover:from-[var(--teal-mid)] hover:to-[var(--emerald)] hover:text-white hover:border-transparent"
        >
            ‹
        </button>

        {{-- Image Wrapper --}}
        <div
            id="lb-img-wrap"
            class="flex items-center justify-center overflow-hidden w-[90vw] max-h-[78vh]"
            onclick="event.stopPropagation()"
        >

            <img
                id="lightbox-img"
                src=""
                alt=""
                class="max-w-full max-h-[78vh] object-contain transition-transform duration-200 ease-in-out cursor-grab"
            />

        </div>

        {{-- Next --}}
        <button
            id="lb-next"
            onclick="event.stopPropagation();navigateLightbox(1)"
            class="absolute right-6 top-1/2 -translate-y-1/2 z-10 w-12 h-12 flex items-center justify-center border border-white/10 bg-white/5 text-white/60 text-[20px] transition-all duration-200 hover:bg-gradient-to-br hover:from-[var(--teal-mid)] hover:to-[var(--emerald)] hover:text-white hover:border-transparent"
        >
            ›
        </button>

        {{-- Caption --}}
        <div
            class="mt-4 text-center"
            onclick="event.stopPropagation()"
        >

            <div
                id="lightbox-category"
                class="mb-1 font-mono text-[10px] uppercase tracking-[0.2em] text-[var(--teal-bright)]"
            ></div>

            <div
                id="lightbox-title"
                class="text-[20px] text-white font-serif"
            ></div>

        </div>

    </div>

    <script>
        let galleryItems = [];
        let currentIndex = 0;
        let currentZoom = 1;

        const ZOOM_STEP = 0.25;
        const ZOOM_MAX = 3;
        const ZOOM_MIN = 0.5;

        document.addEventListener('DOMContentLoaded', () => {
            galleryItems = Array.from(document.querySelectorAll('.gallery-item'));

            galleryItems.forEach((item) => {
                item.onclick = () => {
                    const visible = getVisibleItems();
                    currentIndex = visible.indexOf(item);
                    openLightboxIndex(currentIndex);
                };
            });
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

            document.getElementById('lightbox').classList.remove('hidden');
            document.getElementById('lightbox').classList.add('flex');

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

            document.getElementById('lightbox-counter').textContent =
                (currentIndex + 1) + ' / ' + visible.length;
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
            const img = document.getElementById('lightbox-img');

            img.style.transform = `scale(${currentZoom})`;
            img.style.cursor = currentZoom > 1 ? 'move' : 'grab';
        }

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
            const lb = document.getElementById('lightbox');

            lb.classList.remove('flex');
            lb.classList.add('hidden');

            document.body.style.overflow = '';

            resetZoom();
        }

        function filterGallery(slug, btn) {

            document.querySelectorAll('.gallery-filter').forEach(b => {
                b.classList.remove(
                    'bg-gradient-to-br',
                    'from-[var(--teal-mid)]',
                    'to-[var(--emerald)]',
                    'text-white',
                    'border-transparent'
                );

                b.classList.add(
                    'bg-transparent',
                    'text-white/50',
                    'border-[rgba(13,212,238,0.2)]'
                );
            });

            btn.classList.add(
                'bg-gradient-to-br',
                'from-[var(--teal-mid)]',
                'to-[var(--emerald)]',
                'text-white',
                'border-transparent'
            );

            btn.classList.remove(
                'bg-transparent',
                'text-white/50',
                'border-[rgba(13,212,238,0.2)]'
            );

            document.querySelectorAll('.gallery-item').forEach(item => {
                item.style.display =
                    (slug === 'all' || item.dataset.category === slug)
                        ? 'block'
                        : 'none';
            });
        }

        document.addEventListener('keydown', e => {

            const lb = document.getElementById('lightbox');

            if (lb.classList.contains('hidden')) return;

            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') navigateLightbox(1);
            if (e.key === 'ArrowLeft') navigateLightbox(-1);
            if (e.key === '+') zoomIn();
            if (e.key === '-') zoomOut();
            if (e.key === '0') resetZoom();

        });
    </script>

</section>