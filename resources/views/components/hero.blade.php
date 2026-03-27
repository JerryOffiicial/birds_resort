{{-- ================================================================
     HERO SECTION
     Layer 1 (z-0)  → Background image / video
     Layer 2 (z-10) → Hero content + Glass video card
================================================================ --}}
<section
    x-data="{
        playing: false,
        playVideo() {
            this.playing = true;
            this.$nextTick(() => {
                const vid = document.getElementById('hero-video');
                if (vid) vid.play();
            });
        },
        pauseVideo() {
            this.playing = false;
            const vid = document.getElementById('hero-video');
            if (vid) { vid.pause(); vid.currentTime = 0; }
        }
    }"
    class="relative w-full h-[100svh] min-h-[700px] overflow-hidden flex flex-col justify-center bg-[var(--color-nature)]">

    {{-- ============================================================
         LAYER 1 (z-0): BACKGROUND — Image swaps to Video
    ============================================================ --}}

    {{-- Background Image --}}
    <div class="absolute inset-0 z-0 transition-opacity duration-1000 ease-in-out"
         :class="playing ? 'opacity-0' : 'opacity-100'">
        <img src="{{ asset('images/hero-bg.jpg') }}"
             alt="Birds Resort Nature Wilderness"
             class="w-full h-full object-cover">
        {{-- Elegant Dark Overlay for proper text contrast --}}
        <div class="absolute inset-0 bg-black/40 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-black/40"></div>
    </div>

    {{-- Background Video --}}
    <div class="absolute inset-0 z-0 transition-opacity duration-1000 ease-in-out"
         :class="playing ? 'opacity-100' : 'opacity-0'">
        <video id="hero-video"
               class="w-full h-full object-cover"
               loop muted playsinline
               src="{{ asset('videos/hero-video.mp4') }}">
        </video>
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    {{-- ============================================================
         LAYER 2 (z-10): HERO CONTENT + GLASS VIDEO CARD
    ============================================================ --}}
    <div class="relative z-10 w-full max-w-[var(--max-width-resort)] mx-auto px-6 lg:px-12 flex flex-col lg:flex-row items-center justify-between gap-12 pt-20">

        {{-- LEFT: Text Content --}}
        <div class="flex flex-col justify-center max-w-2xl w-full text-center lg:text-left items-center lg:items-start text-white">

            {{-- Eyebrow --}}
            <div class="flex items-center gap-4 mb-6 lg:mb-8">
                <span class="hidden lg:block w-12 h-px bg-[var(--color-gold)]"></span>
                <span class="font-sans text-[var(--color-gold)] text-xs md:text-sm tracking-[0.25em] uppercase font-medium">
                    Sri Lanka's First Luxury Aviary Resort
                </span>
                <span class="hidden lg:block w-12 h-px bg-[var(--color-gold)]"></span>
            </div>

            {{-- Heading --}}
            <h1 class="font-cinzel text-5xl md:text-6xl lg:text-7xl xl:text-[5rem] font-medium leading-[1.1] mb-6 lg:mb-8 drop-shadow-xl"
                style="mask-image: linear-gradient(to top, transparent 0%, black 45%); -webkit-mask-image: linear-gradient(to top, transparent 0%, black 45%);">
                Escape<br class="hidden lg:block" />
                <span class="text-[var(--color-gold)]  font-light">Into</span>
                Nature
            </h1>

            {{-- Subtext --}}
            <p class="font-sans text-white/90 text-base md:text-lg lg:text-xl font-light leading-relaxed mb-10 lg:mb-12 max-w-lg drop-shadow">
                Experience unparalleled luxury within 50 acres of pristine wilderness. Reconnect with the natural world in a sanctuary designed for the soul.
            </p>

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row items-center gap-6 w-full sm:w-auto">
                {{-- Book Now --}}
                <a href="/book" class="btn-primary w-full sm:w-auto text-center inline-flex justify-center items-center">
                    Reserve Your Stay
                </a>

                {{-- Mobile Watch Video Action --}}
                <button @click="playing ? pauseVideo() : playVideo()" class="btn-secondary w-full sm:w-auto lg:hidden text-center inline-flex justify-center items-center gap-3">
                    <span x-text="playing ? 'Pause Video' : 'Watch Film'"></span>
                    <svg x-show="!playing" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    <svg x-show="playing" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" style="display: none;" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
                    </svg>
                </button>

                {{-- Desktop Explore Action --}}
                <a href="/stay" class="hidden lg:flex items-center gap-4 text-white hover:text-[var(--color-gold)] font-sans text-sm tracking-[0.1em] uppercase transition-colors duration-300 group">
                    Explore Rooms
                    <span class="w-12 h-px bg-white group-hover:bg-[var(--color-gold)] group-hover:w-16 transition-all duration-300"></span>
                </a>
            </div>

        </div>

        {{-- RIGHT: Video Card (Desktop Only) --}}
        <div class="hidden lg:flex flex-col items-end shrink-0 w-[380px]">

            {{-- EXPANDED CARD (default video thumbnail) --}}
            <div x-show="!playing"
                 x-transition:enter="transition ease-out duration-700 delay-300"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-500"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 translate-y-8"
                 class="w-full">

                <div class="bg-black/20 backdrop-blur-md border border-white/10 p-5 rounded-[40px] hover:-translate-y-2 transition-transform duration-500 cursor-pointer group"
                     @click="playVideo()">

                    {{-- Thumbnail --}}
                    <div class="relative overflow-hidden rounded-4xl mb-6 h-56 w-full bg-gray-900 border border-white/10">
                        <img src="{{ asset('images/hero-thumbnail.jpg') }}"
                             alt="Birds Resort Cinematic"
                             class="w-full h-full  object-cover transform group-hover:scale-105 transition-transform duration-1000">
                        <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-500"></div>

                        {{-- Play Icon --}}
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full border border-white/50 flex items-center justify-center  group-hover:bg-[var(--color-gold)] group-hover:border-[var(--color-gold)] transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>

                        {{-- Duration --}}
                        <div class="absolute bottom-4 right-4 bg-black/60 px-3 py-1 text-xs font-sans text-white tracking-[0.1em]">
                            2:30
                        </div>
                    </div>

                    {{-- Info --}}
                    <div class="space-y-3 px-1">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-px bg-[var(--color-gold)]"></span>
                            <span class="font-sans text-[var(--color-gold)] text-[10px] tracking-[0.25em] uppercase">Our Story</span>
                        </div>
                        <h3 class="font-cinzel text-white text-2xl">The Birds Experience</h3>
                        <p class="font-sans text-white/60 text-sm font-light leading-relaxed">
                            Discover the perfect harmony of luxury accommodation and untamed nature in a cinematic journey.
                        </p>
                    </div>
                </div>
            </div>

            {{-- MINIMIZED CONTROLS (when playing) --}}
            <div x-show="playing"
                 x-transition:enter="transition ease-out duration-500 delay-500"
                 x-transition:enter-start="opacity-0 translate-x-12"
                 x-transition:enter-end="opacity-100 translate-x-0"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 translate-x-0"
                 x-transition:leave-end="opacity-0 translate-x-12"
                 style="display: none;">

                <button @click="pauseVideo()" class="flex items-center gap-4 bg-black/30 backdrop-blur-md border border-white/20 px-8 py-5 hover:bg-[var(--color-gold)] hover:border-[var(--color-gold)] transition-all duration-500 group">
                    <div class="flex items-end gap-1 h-4 mr-2">
                        <span class="w-[3px] bg-white group-hover:bg-white animate-[soundbar_0.8s_ease-in-out_infinite]" style="height: 40%"></span>
                        <span class="w-[3px] bg-white group-hover:bg-white animate-[soundbar_0.8s_ease-in-out_0.2s_infinite]" style="height: 100%"></span>
                        <span class="w-[3px] bg-white group-hover:bg-white animate-[soundbar_0.8s_ease-in-out_0.4s_infinite]" style="height: 60%"></span>
                        <span class="w-[3px] bg-white group-hover:bg-white animate-[soundbar_0.8s_ease-in-out_0.1s_infinite]" style="height: 80%"></span>
                    </div>
                    <span class="font-sans text-white text-xs tracking-[0.2em] uppercase">Stop Video</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
                    </svg>
                </button>
            </div>
        </div>

    </div>

    {{-- ============================================================
         SCROLL INDICATOR
    ============================================================ --}}
    <div class="absolute -bottom-5 md:bottom-10 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-4 animate-bounce">
        <span class="font-sans text-white/50 text-[10px] tracking-[0.3em] uppercase">Scroll to Explore</span>
        <div class="w-px h-12 bg-gradient-to-b from-white/50 to-transparent"></div>
    </div>

</section>

{{-- Keyframes for Soundbar --}}
<style>
@keyframes soundbar {
    0%, 100% { transform: scaleY(0.4); }
    50%       { transform: scaleY(1); }
}
</style>
