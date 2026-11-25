@extends('layouts.app')

@section('content')
    <style>
        .thumb-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .thumb {
            width: 100%;
            aspect-ratio: 1 / 1;
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
    <div class="container py-5">

        <!-- FULLSCREEN MODAL -->
        <div id="fullscreenModal" class="fullscreen-modal" style="display:none;">
            <div class="fs-content">
                <span id="fsClose" class="fs-close">&times;</span>
                <div id="fsPreviewArea"></div>
            </div>
        </div>

        <div class="page-wrapper">

            <!-- Breadcrumb -->
            <div class="mb-2 text-muted small">
                <a href="{{ URL('/historical-seasons') }}">Historical Seasons</a>
                <a href="{{ URL('/media-albums-2025') }}" class="media-albums"><span class="mx-1">›</span> 2025 Media
                    Album</a>
                <span class="mx-1">›</span> {{ $name }}
            </div>

            <!-- Header + Desktop Buttons -->
            <div class="d-flex justify-content-between align-items-start mb-3 page-header-block">
                <div>
                    <h2 class="mb-1 sub-header">{{ $name }}</h2>
                    {{-- <div class="meta-row small">
                        10 January 2023 &nbsp; | &nbsp;
                        <i class="bi bi-geo-alt"></i> Redwood High School
                    </div> --}}
                </div>

                <!-- DESKTOP BUTTONS -->
                <div class="header-actions-desktop d-flex gap-2">
                    <button id="downloadBtn" class="icon-btn" title="Download">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1756_454)">
                                <path
                                    d="M11.25 3V15.4219L7.28906 11.4609L6.21094 12.5391L11.4609 17.7891L12 18.3047L12.5391 17.7891L17.7891 12.5391L16.7109 11.4609L12.75 15.4219V3H11.25ZM5.25 19.5V21H18.75V19.5H5.25Z"
                                    fill="#262626" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1756_454">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </button>
                    <button id="shareBtn" class="icon-btn" title="Share">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.2188 2.81226C18.6967 2.81226 18.1959 3.01965 17.8267 3.38881C17.4575 3.75797 17.2501 4.25866 17.2501 4.78073C17.2501 5.3028 17.4575 5.80349 17.8267 6.17265C18.1959 6.54181 18.6967 6.7492 19.2188 6.7492C19.7409 6.7492 20.2417 6.54181 20.6109 6.17265C20.9801 5.80349 21.1875 5.3028 21.1875 4.78073C21.1875 4.25866 20.9801 3.75797 20.6109 3.38881C20.2417 3.01965 19.7409 2.81226 19.2188 2.81226ZM15.9376 4.78073C15.9375 4.01097 16.2081 3.26568 16.7021 2.67526C17.1961 2.08485 17.8819 1.6869 18.6397 1.55104C19.3975 1.41518 20.1789 1.55006 20.8472 1.93209C21.5156 2.31411 22.0283 2.91896 22.2957 3.6408C22.5631 4.36263 22.5682 5.1555 22.3099 5.88068C22.0517 6.60585 21.5467 7.21716 20.8833 7.60765C20.2198 7.99813 19.4402 8.14293 18.6808 8.01671C17.9213 7.89048 17.2305 7.50128 16.729 6.91718L7.91181 11.0116C8.11451 11.6539 8.11451 12.343 7.91181 12.9853L16.729 17.0798C17.2591 16.4634 17.9991 16.0657 18.8056 15.9638C19.6122 15.8619 20.4279 16.063 21.0946 16.5282C21.7613 16.9933 22.2316 17.6894 22.4143 18.4815C22.5969 19.2736 22.479 20.1052 22.0834 20.8154C21.6878 21.5255 21.0426 22.0635 20.2728 22.325C19.5031 22.5866 18.6637 22.5531 17.9172 22.2311C17.1707 21.9091 16.5704 21.3215 16.2325 20.5822C15.8947 19.8428 15.8434 19.0044 16.0885 18.2293L7.27132 14.1349C6.83483 14.6435 6.25303 15.0063 5.60418 15.1744C4.95533 15.3425 4.27055 15.3079 3.64197 15.0752C3.01339 14.8425 2.47116 14.4229 2.08822 13.8728C1.70528 13.3228 1.5 12.6687 1.5 11.9985C1.5 11.3283 1.70528 10.6742 2.08822 10.1241C2.47116 9.57405 3.01339 9.15446 3.64197 8.92177C4.27055 8.68908 4.95533 8.65445 5.60418 8.82255C6.25303 8.99065 6.83483 9.3534 7.27132 9.86202L16.0885 5.76759C15.9882 5.44826 15.9373 5.11546 15.9376 4.78073ZM4.78154 10.03C4.25941 10.03 3.75866 10.2374 3.38945 10.6065C3.02024 10.9757 2.81283 11.4764 2.81283 11.9985C2.81283 12.5205 3.02024 13.0212 3.38945 13.3904C3.75866 13.7595 4.25941 13.9669 4.78154 13.9669C5.30368 13.9669 5.80443 13.7595 6.17364 13.3904C6.54284 13.0212 6.75026 12.5205 6.75026 11.9985C6.75026 11.4764 6.54284 10.9757 6.17364 10.6065C5.80443 10.2374 5.30368 10.03 4.78154 10.03ZM19.2188 17.2477C18.6967 17.2477 18.1959 17.4551 17.8267 17.8243C17.4575 18.1934 17.2501 18.6941 17.2501 19.2162C17.2501 19.7383 17.4575 20.239 17.8267 20.6081C18.1959 20.9773 18.6967 21.1847 19.2188 21.1847C19.7409 21.1847 20.2417 20.9773 20.6109 20.6081C20.9801 20.239 21.1875 19.7383 21.1875 19.2162C21.1875 18.6941 20.9801 18.1934 20.6109 17.8243C20.2417 17.4551 19.7409 17.2477 19.2188 17.2477Z"
                                fill="#262626" />
                        </svg>

                    </button>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row row-main g-0">

                <!-- LEFT COLUMN: Thumbnails -->
                <div class="col-lg-7 left-col">

                    <!-- FILTER -->
                    <div class="filter-row-block d-flex align-items-center gap-3 mb-3 filter-row">
                        <label class="fw-semibold mb-0">Media Filter</label>
                        <select id="filterSelect" class="form-select form-select-sm" style="width:140px;">
                            <option value="all">All</option>
                            <option value="photo">Photos</option>
                            <option value="video">Videos</option>
                        </select>
                    </div>

                    <!-- THUMBNAIL GRID -->
                    <div id="thumbGrid" class="thumb-grid mb-2" aria-live="polite"></div>

                    <!-- PAGINATION -->
                    <div class="thumb-pagination d-flex align-items-center justify-content-center gap-3 mt-3">
                        <button id="thumbPrev" class="thumb-nav-btn">
                            ‹
                        </button>

                        <span id="thumbPageIndicator">1 / 1</span>

                        <button id="thumbNext" class="thumb-nav-btn">
                            ›
                        </button>
                    </div>

                </div>

                <!-- RIGHT COLUMN: Preview -->
                <div class="col-lg-5 right-col">

                    <div class="preview-panel">

                        <!-- Preview Area -->
                        <div class="preview-wrap" id="previewWrap" aria-live="polite"></div>

                        <!-- Preview Controls -->
                        <div class="preview-controls">
                            <div class="preview-pagination d-flex align-items-center justify-content-center gap-4 mt-3">
                                <button id="prevMedia" class="preview-nav-btn">
                                    ‹
                                </button>

                                <span id="previewCounter">1 / 1</span>

                                <button id="nextMedia" class="preview-nav-btn">
                                    ›
                                </button>
                            </div>

                            {{-- <div class="text-end small text-muted" id="previewName">img_name.jpg</div> --}}
                        </div>

                        <!-- MOBILE BUTTONS -->
                        <div class="header-actions-mobile d-flex gap-2 mt-3">
                            <button id="downloadBtnMobile" class="icon-btn" title="Download">
                                <i class="fa-solid fa-download"></i>
                            </button>
                            <button id="shareBtnMobile" class="icon-btn" title="Share">
                                <i class="fa-solid fa-share"></i>
                            </button>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>


    <div id="imageModal" class="image-modal">
        <div class="image-modal-header">
            <div class="modal-actions">
                <button id="modalDownload">Download</button>
                <button id="modalShare">Share</button>
            </div>
            <button id="modalClose" class="modal-close">✕</button>
        </div>

        <div class="image-modal-body">
            <img id="modalImage" src="" alt="">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const params = new URLSearchParams(window.location.search);
            const mediaAlbum = params.get('mediaAlbum');

            if (mediaAlbum === 'false') {
                const link = document.querySelector('.media-albums');
                if (link) link.style.display = 'none';
            }
        });
    </script>

    <script>
        const downloadBtn = document.getElementById('downloadBtn');

        downloadBtn.addEventListener('click', () => {

            if (currentPreviewIndex < 0) return;

            const item = filteredItems[currentPreviewIndex];

            if (item.type === 'youtube') {
                alert('Download not available for YouTube videos');
                return;
            }

            const a = document.createElement('a');
            a.href = item.src;
            a.download = item.name || 'media';
            document.body.appendChild(a);
            a.click();
            a.remove();

        });

        const shareBtn = document.getElementById('shareBtn');

        shareBtn.addEventListener('click', async () => {

            if (currentPreviewIndex < 0) return;

            const item = filteredItems[currentPreviewIndex];

            if (navigator.share) {

                try {
                    await navigator.share({
                        title: item.name || 'Media',
                        url: item.src
                    });

                } catch (err) {
                    console.log(err);
                }

            } else {

                await navigator.clipboard.writeText(item.src);
                alert('Media link copied to clipboard');

            }

        });
    </script>


    <script>
        const ALBUM_FOLDER = "{{ $folder }}";
        const THUMBS_PER_PAGE = 20;

        let mediaItems = [];
        let filteredItems = [];

        let filter = 'all';
        let currentThumbPage = 1;
        let currentPreviewIndex = 0;


        const thumbGrid = document.getElementById('thumbGrid');
        const filterSelect = document.getElementById('filterSelect');

        const thumbPrev = document.getElementById('thumbPrev');
        const thumbNext = document.getElementById('thumbNext');
        const thumbPageIndicator = document.getElementById('thumbPageIndicator');

        const previewWrap = document.getElementById('previewWrap');
        const prevMedia = document.getElementById('prevMedia');
        const nextMedia = document.getElementById('nextMedia');
        const previewCounter = document.getElementById('previewCounter');
        const previewName = document.getElementById('previewName');

        //image open model

        const imageModal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalClose = document.getElementById('modalClose');
        const modalDownload = document.getElementById('modalDownload');
        const modalShare = document.getElementById('modalShare');



        // OPEN modal when preview image clicked
        previewWrap.addEventListener('click', () => {
            if (currentPreviewIndex < 0) return;

            const item = filteredItems[currentPreviewIndex];

            imageModal.classList.add('show');
            modalImage.style.display = 'none';

            // remove old video if exists
            const oldVideo = imageModal.querySelector('video');
            if (oldVideo) oldVideo.remove();

            if (item.type === 'video') {

                const video = document.createElement('video');
                video.src = item.src;
                video.controls = true;
                video.autoplay = true;
                video.style.width = '100%';

                imageModal.querySelector('.image-modal-body').appendChild(video);

            } else if (item.type === 'youtube') {

                const iframe = document.createElement('iframe');
                iframe.src = item.src;
                iframe.width = "100%";
                iframe.height = "500";
                iframe.allowFullscreen = true;
                iframe.frameBorder = "0";

                imageModal.querySelector('.image-modal-body').appendChild(iframe);

            } else {

                modalImage.src = item.src;
                modalImage.style.display = 'block';
            }
        });

        // CLOSE modal (X)
        modalClose.addEventListener('click', closeModal);

        // CLOSE on background click
        imageModal.addEventListener('click', (e) => {
            if (e.target === imageModal) closeModal();
        });

        // CLOSE on ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeModal();
        });

        function closeModal() {
            imageModal.classList.remove('show');
            modalImage.src = '';

            const video = imageModal.querySelector('video');
            if (video) video.remove();

            const iframe = imageModal.querySelector('iframe');
            if (iframe) iframe.remove();
        }

        /* DOWNLOAD */
        modalDownload.addEventListener('click', () => {
            const item = filteredItems[currentPreviewIndex];

            if (item.type === 'youtube') {
                alert('Download not available for YouTube videos');
                return;
            }

            const a = document.createElement('a');
            a.href = item.src;
            a.download = item.name;
            document.body.appendChild(a);
            a.click();
            a.remove();
        });

        /* SHARE */
        modalShare.addEventListener('click', async () => {
            const item = filteredItems[currentPreviewIndex];
            if (navigator.share) {
                await navigator.share({
                    title: item.name,
                    url: item.src
                });
            } else {
                await navigator.clipboard.writeText(item.src);
                alert('Image URL copied');
            }
        });

        fetch(`{{ url('/session-images') }}/${ALBUM_FOLDER}`)
            .then(res => res.json())
            .then(data => {
                mediaItems = data;
                applyFilter();
            })
            .catch(err => console.error(err));

        function pageCount() {
            return Math.max(1, Math.ceil(filteredItems.length / THUMBS_PER_PAGE));
        }

        function getThumbsForPage(page) {
            const start = (page - 1) * THUMBS_PER_PAGE;
            return filteredItems.slice(start, start + THUMBS_PER_PAGE);
        }

        function applyFilter() {
            if (filter === 'all') {
                filteredItems = [...mediaItems];
            } else if (filter === 'video') {
                filteredItems = mediaItems.filter(m => m.type === 'video' || m.type === 'youtube');
            } else {
                filteredItems = mediaItems.filter(m => m.type === 'photo');
            }

            currentThumbPage = 1;
            currentPreviewIndex = filteredItems.length ? 0 : -1;

            renderThumbGrid();
            renderPreview();
            updateNavButtons();
        }


        function renderThumbGrid() {
            thumbGrid.innerHTML = '';

            const thumbs = getThumbsForPage(currentThumbPage);

            thumbs.forEach((item, i) => {
                const index = (currentThumbPage - 1) * THUMBS_PER_PAGE + i;

                const div = document.createElement('div');
                div.className = 'thumb';
                div.style.backgroundImage = `url('${item.thumb}')`;
                div.dataset.index = index;

                div.addEventListener('click', () => {
                    currentPreviewIndex = index;
                    renderPreview();
                });

                thumbGrid.appendChild(div);
            });

            thumbPageIndicator.textContent =
                `Page ${currentThumbPage} / ${pageCount()}`;

            highlightSelectedThumb();
            updateNavButtons();
        }

        function highlightSelectedThumb() {
            document.querySelectorAll('.thumb').forEach(el => el.classList.remove('selected'));

            const start = (currentThumbPage - 1) * THUMBS_PER_PAGE;
            const localIndex = currentPreviewIndex - start;

            const thumbs = document.querySelectorAll('#thumbGrid .thumb');
            if (thumbs[localIndex]) thumbs[localIndex].classList.add('selected');
        }


        function renderPreview() {
            previewWrap.innerHTML = '';

            if (currentPreviewIndex < 0) return;

            const item = filteredItems[currentPreviewIndex];

            let el;

            if (item.type === 'video') {
                el = document.createElement('video');
                el.src = item.src;
                el.controls = true;
                el.playsInline = true;
                el.style.width = '100%';
                el.style.maxHeight = '500px';

            } else if (item.type === 'youtube') {

                el = document.createElement('iframe');
                el.src = item.src;
                el.width = "100%";
                el.height = "500";
                el.allowFullscreen = true;
                el.frameBorder = "0";

            } else {
                el = document.createElement('img');
                el.src = item.src;
            }

            previewWrap.appendChild(el);

            previewCounter.textContent =
                `${currentPreviewIndex + 1} / ${filteredItems.length}`;

            // auto move thumbnail page
            const neededPage = Math.floor(currentPreviewIndex / THUMBS_PER_PAGE) + 1;

            if (neededPage !== currentThumbPage) {
                currentThumbPage = neededPage;
                renderThumbGrid();
            } else {
                highlightSelectedThumb();
            }

            updateNavButtons();
        }


        function updateNavButtons() {
            // preview navigation
            prevMedia.disabled = currentPreviewIndex <= 0;
            nextMedia.disabled = currentPreviewIndex >= filteredItems.length - 1;

            // thumbnail pagination
            thumbPrev.disabled = currentThumbPage <= 1;
            thumbNext.disabled = currentThumbPage >= pageCount();
        }

        // filter
        filterSelect.addEventListener('change', e => {
            filter = e.target.value;
            applyFilter();
        });

        // thumbnail pagination (ONLY thumbs)
        thumbPrev.addEventListener('click', () => {
            if (currentThumbPage > 1) {
                currentThumbPage--;
                renderThumbGrid();
            }
        });

        thumbNext.addEventListener('click', () => {
            if (currentThumbPage < pageCount()) {
                currentThumbPage++;
                renderThumbGrid();
            }
        });

        // preview navigation (ONLY preview)
        prevMedia.addEventListener('click', () => {
            if (currentPreviewIndex > 0) {
                currentPreviewIndex--;
                renderPreview();
            }
        });

        nextMedia.addEventListener('click', () => {
            if (currentPreviewIndex < filteredItems.length - 1) {
                currentPreviewIndex++;
                renderPreview();
            }
        });
    </script>
@endsection
