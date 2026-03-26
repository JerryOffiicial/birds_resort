<div x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">

    {{-- ================================================================
         DESKTOP NAVBAR - Horizontal Top Bar
    ================================================================ --}}
    <nav
        class="hidden lg:flex fixed top-0 left-0 right-0 z-50 items-center justify-between px-10 py-6 transition-all duration-500"
        :class="scrolled ? 'bg-black/80 backdrop-blur-md py-4 shadow-lg border-b border-white/10' : 'bg-transparent'">

        {{-- Top Left Logo --}}
        <a href="/" class="shrink-0 transition-transform duration-300 hover:scale-105">
            <img src="{{ asset('images/logo.svg') }}" alt="Birds Resort"
                class="h-10 w-auto object-contain brightness-0 invert">
        </a>

        {{-- Center: Nav Links --}}
        <div class="absolute left-1/2 -translate-x-1/2 flex items-center gap-10">
            @foreach ([['Home', '/'], ['Stay', '/stay'], ['Dining', '/dining'], ['Experiences', '/experiences'], ['Gallery', '/gallery'], ['About', '/about'], ['Contact', '/contact']] as [$label, $route])
                <a href="{{ $route }}"
                    class="font-sans text-white/80 hover:text-white text-[11px] tracking-[0.25em] uppercase transition-all duration-300 relative group">
                    {{ $label }}
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-px bg-[var(--color-gold)] transition-all duration-300 group-hover:w-full"></span>
                </a>
            @endforeach
        </div>

        {{-- Right: Logo + Menu Icon --}}
        <div class="ml-auto flex items-center gap-6">

            {{-- Divider --}}
            <span class="w-px h-6 bg-white/20"></span>

            {{-- Menu Icon --}}
            <button @click="open = !open"
                class="flex flex-col justify-center items-end gap-1.5 w-8 h-8 focus:outline-none group relative z-[60]"
                aria-label="Toggle menu">
                <span :class="open ? 'w-6 rotate-45 translate-y-[7.5px] bg-[var(--color-gold)]' : 'w-6 bg-white group-hover:bg-[var(--color-gold)]'"
                    class="block h-px transition-all duration-300 origin-center"></span>
                <span :class="open ? 'w-6 -rotate-45 -translate-y-[7.5px] bg-[var(--color-gold)]' : 'w-4 bg-white group-hover:bg-[var(--color-gold)] group-hover:w-6'"
                    class="block h-px transition-all duration-300 origin-center"></span>
            </button>
        </div>
    </nav>

    {{-- ================================================================
         DESKTOP SLIDE PANEL - Right Side
    ================================================================ --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="hidden lg:block fixed inset-0 z-40" style="display: none;">

        {{-- Overlay --}}
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" @click="open = false"></div>

        {{-- Slide Panel --}}
        <div x-show="open" x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0 opacity-100"
            x-transition:leave-end="translate-x-full opacity-0"
            class="absolute right-0 top-0 h-full w-[400px] border-l border-white/10 bg-black/80 backdrop-blur-2xl flex flex-col justify-center gap-5 px-10 py-20 shadow-2xl">

            {{-- Sharp Glassy Cards --}}

            {{-- Email --}}
            <a href="mailto:info@birdsresort.com"
                class="flex items-center gap-5 rounded-none px-6 py-5 bg-white/5 border border-white/10 hover:border-[var(--color-gold)] hover:bg-white/10 transition-all duration-500 group">
                <div class="w-10 h-10 flex items-center justify-center border border-white/20 shrink-0 group-hover:border-[var(--color-gold)] transition-colors duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white group-hover:text-[var(--color-gold)] transition-colors duration-500" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="font-sans text-white/40 text-[10px] tracking-[0.2em] uppercase mb-1">Email</p>
                    <p class="font-sans text-white text-sm group-hover:text-[var(--color-gold)] transition-colors duration-500">info@birdsresort.com</p>
                </div>
            </a>

            {{-- Phone --}}
            <a href="tel:+94XXXXXXXXX"
                class="flex items-center gap-5 rounded-none px-6 py-5 bg-white/5 border border-white/10 hover:border-[var(--color-gold)] hover:bg-white/10 transition-all duration-500 group">
                <div class="w-10 h-10 flex items-center justify-center border border-white/20 shrink-0 group-hover:border-[var(--color-gold)] transition-colors duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white group-hover:text-[var(--color-gold)] transition-colors duration-500" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 7V5z" />
                    </svg>
                </div>
                <div>
                    <p class="font-sans text-white/40 text-[10px] tracking-[0.2em] uppercase mb-1">Phone</p>
                    <p class="font-sans text-white text-sm group-hover:text-[var(--color-gold)] transition-colors duration-500">+94 XX XXX XXXX</p>
                </div>
            </a>

            {{-- WhatsApp --}}
            <a href="https://wa.me/94XXXXXXXXX" target="_blank"
                class="flex items-center gap-5 rounded-none px-6 py-5 bg-white/5 border border-white/10 hover:border-[var(--color-gold)] hover:bg-white/10 transition-all duration-500 group">
                <div class="w-10 h-10 flex items-center justify-center border border-white/20 shrink-0 group-hover:border-[var(--color-gold)] transition-colors duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white group-hover:text-[var(--color-gold)] transition-colors duration-500" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                    </svg>
                </div>
                <div>
                    <p class="font-sans text-white/40 text-[10px] tracking-[0.2em] uppercase mb-1">WhatsApp</p>
                    <p class="font-sans text-white text-sm group-hover:text-[var(--color-gold)] transition-colors duration-500">+94 XX XXX XXXX</p>
                </div>
            </a>

            {{-- Book Now --}}
            <a href="/book"
                class="mt-4 bg-[var(--color-gold)] text-white font-sans text-[11px] tracking-[0.25em] uppercase px-6 py-5 rounded-none text-center hover:bg-white hover:text-[var(--color-primary-text)] transition-colors duration-500">
                Book Now
            </a>

        </div>
    </div>

    {{-- ================================================================
         MOBILE TOPBAR
    ================================================================ --}}
    <div
        class="lg:hidden fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-6 py-4 transition-all duration-500"
        :class="scrolled ? 'bg-black/90 backdrop-blur-md shadow-lg border-b border-white/10' : 'bg-transparent'">

        {{-- Top Left Logo --}}
        <a href="/" class="shrink-0 relative z-[60]">
            <img src="{{ asset('images/logo.svg') }}" alt="Birds Resort"
                class="h-10 w-auto object-contain brightness-0 invert">
        </a>

        {{-- Menu Icon --}}
        <button @click="open = !open" class="flex flex-col justify-center items-end gap-1.5 w-8 h-8 focus:outline-none group relative z-[60]"
            aria-label="Toggle menu">
            <span :class="open ? 'w-6 rotate-45 translate-y-[7.5px] bg-[var(--color-gold)]' : 'w-6 bg-white'"
                class="block h-px transition-all duration-300 origin-center group-hover:bg-[var(--color-gold)]"></span>
            <span :class="open ? 'w-6 -rotate-45 -translate-y-[7.5px] bg-[var(--color-gold)]' : 'w-4 bg-white group-hover:w-6'"
                class="block h-px transition-all duration-300 origin-center group-hover:bg-[var(--color-gold)]"></span>
        </button>
    </div>

    {{-- ================================================================
         MOBILE SIDEBAR
    ================================================================ --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="lg:hidden fixed inset-0 z-40 flex" style="display: none;">

        {{-- Overlay --}}
        <div class="flex-1 bg-black/60 backdrop-blur-md" @click="open = false"></div>

        {{-- Sidebar Panel --}}
        <div x-show="open" x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="w-80 h-full bg-black/95 backdrop-blur-2xl border-l border-white/10 flex flex-col pt-24 pb-8 px-8 shadow-2xl relative z-50">

            {{-- Nav Links --}}
            <div class="flex-1 overflow-y-auto [&::-webkit-scrollbar]:hidden mt-6">
                <ul class="flex flex-col gap-6 pb-8">
                    @foreach ([['Home', '/'], ['Stay', '/stay'], ['Dining', '/dining'], ['Experiences', '/experiences'], ['Gallery', '/gallery'], ['About', '/about'], ['Contact', '/contact']] as [$label, $route])
                        <li>
                            <a href="{{ $route }}" @click="open = false"
                                class="font-sans text-white/70 hover:text-[var(--color-gold)] text-sm tracking-[0.2em] uppercase transition-all duration-300 block">
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                {{-- Divider --}}
                <div class="w-full h-px bg-white/10 my-8"></div>

                {{-- Contact Details --}}
                <div class="flex flex-col gap-5">
                    <a href="mailto:info@birdsresort.com"
                        class="flex items-center gap-4 text-white/50 hover:text-[var(--color-gold)] transition-all duration-300 group">
                        <div class="w-8 h-8 flex items-center justify-center border border-white/20 shrink-0 group-hover:border-[var(--color-gold)] transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="font-sans text-xs tracking-wider group-hover:text-[var(--color-gold)] transition-colors duration-300">info@birdsresort.com</span>
                    </a>
                    <a href="tel:+94XXXXXXXXX"
                        class="flex items-center gap-4 text-white/50 hover:text-[var(--color-gold)] transition-all duration-300 group">
                        <div class="w-8 h-8 flex items-center justify-center border border-white/20 shrink-0 group-hover:border-[var(--color-gold)] transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 7V5z" />
                            </svg>
                        </div>
                        <span class="font-sans text-xs tracking-wider group-hover:text-[var(--color-gold)] transition-colors duration-300">+94 XX XXX XXXX</span>
                    </a>
                </div>
            </div>

            {{-- Book Now --}}
            <div class="pt-8 mt-auto shrink-0 mb-4">
                <a href="/book"
                    class="block bg-[var(--color-gold)] text-white font-sans text-[11px] tracking-[0.25em] uppercase px-6 py-4 rounded-none border border-[var(--color-gold)] text-center transition-all duration-300 hover:bg-white hover:border-white hover:text-[var(--color-primary-text)]">
                    Book Now
                </a>
            </div>

        </div>
    </div>

</div>
