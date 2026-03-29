{{-- ================================================================
     ROOMS PREVIEW SECTION
================================================================ --}}
<section style="background-color: #FFFFFF;">
    <div class="w-full max-w-[var(--max-width-resort)] mx-auto px-5 sm:px-6 lg:px-12 py-20 sm:py-24 lg:py-32">

        {{-- SECTION HEADER --}}
        <div class="mb-16 lg:mb-20">
            <div class="flex flex-col items-center text-center gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div class="flex flex-col items-center text-center gap-4 lg:flex-1">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-px bg-[var(--color-gold)]"></span>
                        <span
                            class="font-sans text-[10px] tracking-[0.25em] uppercase text-[var(--color-secondary-text)]">
                            Accommodations
                        </span>
                    </div>
                    <h2
                        class="font-cinzel text-2xl sm:text-3xl lg:text-4xl font-medium text-[var(--color-primary-text)]">
                        Your Room Awaits
                    </h2>
                    <p
                        class="font-sans text-sm sm:text-base text-[var(--color-secondary-text)] font-light max-w-xl leading-relaxed">
                        Each room is a thoughtfully designed retreat — where natural light, refined comfort, and the
                        sounds of the sanctuary come together.
                    </p>
                </div>
                <a href="/stay"
                    class="hidden lg:inline-flex items-center gap-4 font-sans text-xs tracking-[0.2em] uppercase transition-all duration-300 group shrink-0"
                    style="color: var(--color-primary-text);">
                    View All Rooms
                    <span class="w-8 h-px transition-all duration-300 group-hover:w-12"
                        style="background-color: var(--color-gold);"></span>
                </a>
            </div>
        </div>

        {{-- GRID --}}
        @php
            $rooms = [
                [
                    'id' => 'scarlet-deluxe',
                    'tag' => 'Luxury Room',
                    'image' => '/images/rooms/scarlet-deluxe.webp',
                    'video' => '/videos/rooms/scarlet-deluxe.mp4',
                    'price' => '180',
                    'rating' => '4.9',
                    'title' => 'Scarlet Deluxe',
                    'description' => 'Immersive nature views with refined luxury interiors and bespoke amenities.',
                    'beds' => '1 Bed',
                    'baths' => '1 Bath',
                    'sqft' => '380 sqft',
                ],
                [
                    'id' => 'pheasant-superior',
                    'tag' => 'Superior Room',
                    'image' => '/images/rooms/pheasant-superior.webp',
                    'video' => '/videos/rooms/pheasant-superior.mp4',
                    'price' => '240',
                    'rating' => '5.0',
                    'title' => 'Pheasant Superior',
                    'description' =>
                        'Spacious retreats designed for total tranquillity with panoramic sanctuary views.',
                    'beds' => '1 Bed',
                    'baths' => '2 Bath',
                    'sqft' => '520 sqft',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7 lg:gap-8">

            @foreach ($rooms as $room)
                <div x-data="{ playing: false }"
                    class="group relative flex flex-col rounded-3xl overflow-visible bg-white shadow-md hover:shadow-xl transition-all duration-500 hover:-translate-y-1">

                    {{-- ── IMAGE + VIDEO BLOCK ── --}}
                    <div class="relative rounded-3xl overflow-hidden shrink-0" style="height: 260px;">

                        {{-- Room Image --}}
                        <img src="{{ asset($room['image']) }}" alt="{{ $room['title'] }}"
                            class="absolute inset-0 w-full h-full object-cover transition-all duration-700 group-hover:scale-105"
                            :class="playing ? 'opacity-0' : 'opacity-100'">

                        {{-- Room Video --}}
                        <video x-ref="video" src="{{ asset($room['video']) }}"
                            class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500"
                            :class="playing ? 'opacity-100' : 'opacity-0'" loop muted playsinline>
                        </video>

                        {{-- Gradient overlay --}}
                        <div class="absolute inset-0 transition-opacity duration-500"
                            :class="playing ? 'opacity-0' : 'opacity-100'"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.35), transparent 60%);"></div>

                        {{--
                        Play button — desktop: shows on hover | mobile: always visible
                        Fix: blur layer is a separate child div so it renders before
                        the button animates in, preventing the blur slide delay
                    --}}
                        <div x-show="!playing"
                            class="absolute inset-0 flex items-center justify-center
                               opacity-100 lg:opacity-0 lg:group-hover:opacity-100
                               transition-opacity duration-300">

                            {{-- Blur background — desktop only, hidden on mobile --}}
                            <div class="absolute inset-0 hidden lg:block"
                                style="background: rgba(0,0,0,0.15); backdrop-filter: blur(2px); -webkit-backdrop-filter: blur(2px);">
                            </div>

                            {{-- Play button on top --}}
                            <button @click="playing = true; $nextTick(() => $refs.video.play())"
                                class="relative z-10 w-14 h-14 rounded-full flex items-center justify-center border border-white/60 bg-white/20 transition-all duration-300 hover:bg-[var(--color-gold)] hover:border-[var(--color-gold)]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white ml-0.5"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </button>
                        </div>

                        {{-- Close button — shown when playing --}}
                        <div x-show="playing" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            class="absolute top-3 right-3 z-20">
                            <button @click="playing = false; $refs.video.pause(); $refs.video.currentTime = 0;"
                                class="w-9 h-9 rounded-full flex items-center justify-center bg-black/50 border border-white/20 backdrop-blur-sm hover:bg-[var(--color-gold)] hover:border-[var(--color-gold)] transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                    </div>

                    {{-- ── PROTRUDING TAG ── --}}
                    <div class="absolute left-0 z-10" style="top: 245px; transform: translateY(-50%);">
                        <div class="flex items-center"
                            style="background-color: var(--color-primary-text); padding: 6px 16px 6px 12px; border-radius: 0 20px 20px 0; margin-left: -2px;">
                            <span class="font-sans text-white text-[10px] tracking-[0.2em] uppercase">
                                {{ $room['tag'] }}
                            </span>
                        </div>
                    </div>

                    {{-- ── DETAILS ── --}}
                    <div class="flex flex-col gap-4 px-6 pt-8 pb-6">

                        {{-- Price + Rating --}}
                        <div class="flex items-center justify-between">
                            <div class="flex items-baseline gap-1.5">
                                <span class="font-cinzel text-2xl font-semibold" style="color: var(--color-gold);">
                                    ${{ $room['price'] }}
                                </span>
                                <span class="font-sans text-xs"
                                    style="color: var(--color-secondary-text);">/night</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20"
                                    fill="currentColor" style="color: var(--color-gold);">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="font-sans text-sm font-medium"
                                    style="color: var(--color-primary-text);">{{ $room['rating'] }}</span>
                            </div>
                        </div>

                        {{-- Title --}}
                        <h3 class="font-cinzel text-xl font-medium leading-snug"
                            style="color: var(--color-primary-text);">
                            {{ $room['title'] }}
                        </h3>

                        {{-- Divider --}}
                        <div class="w-full h-px" style="background-color: var(--color-border);"></div>

                        {{-- Amenities --}}
                        <div class="flex items-center justify-between">

                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" style="color: var(--color-gold);">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span class="font-sans text-xs"
                                    style="color: var(--color-secondary-text);">{{ $room['beds'] }}</span>
                            </div>

                            <div class="w-px h-4" style="background-color: var(--color-border);"></div>

                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" style="color: var(--color-gold);">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M4 12h16M4 12a2 2 0 01-2-2V7a2 2 0 012-2h3m13 7a2 2 0 002-2V7a2 2 0 00-2-2h-3M4 12v5a2 2 0 002 2h12a2 2 0 002-2v-5" />
                                </svg>
                                <span class="font-sans text-xs"
                                    style="color: var(--color-secondary-text);">{{ $room['baths'] }}</span>
                            </div>

                            <div class="w-px h-4" style="background-color: var(--color-border);"></div>

                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" style="color: var(--color-gold);">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                </svg>
                                <span class="font-sans text-xs"
                                    style="color: var(--color-secondary-text);">{{ $room['sqft'] }}</span>
                            </div>

                        </div>

                        {{-- CTA --}}
                        <a href="/stay#{{ $room['id'] }}"
                            class="mt-1 w-full text-center font-sans text-xs tracking-[0.2em] uppercase py-3.5 transition-all duration-300"
                            style="border: 1px solid var(--color-gold); color: var(--color-gold); border-radius: 0;"
                            onmouseover="this.style.backgroundColor='var(--color-gold)'; this.style.color='white';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--color-gold)';">
                            View Room
                        </a>

                    </div>
                </div>
            @endforeach

            {{-- 3rd column — breathing room --}}
            <div class="hidden lg:block"></div>

        </div>

        {{-- Mobile CTA --}}
        <div class="flex lg:hidden justify-center mt-10">
            <a href="/stay"
                class="inline-flex items-center gap-4 font-sans text-xs tracking-[0.2em] uppercase transition-all duration-300 group"
                style="color: var(--color-primary-text);">
                View All Rooms
                <span class="w-8 h-px transition-all duration-300 group-hover:w-12"
                    style="background-color: var(--color-gold);"></span>
            </a>
        </div>

    </div>
</section>
