{{-- Vertical Sidebar Navbar --}}
<div x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">

    {{-- DESKTOP SIDEBAR --}}
    <nav :class="scrolled ? 'bg-primary-text/80 backdrop-blur-sm' : 'bg-transparent'"
        class="hidden lg:flex fixed left-0 top-0 h-screen w-16 z-50 flex-col items-center justify-between py-8 transition-all duration-500">

        {{-- Logo (Anchored Top) --}}
        <a href="/" class="flex items-center justify-center w-full shrink-0 outline-none focus-visible:ring-1 focus-visible:ring-gold focus-visible:ring-offset-2 focus-visible:ring-offset-primary-text">
            <span class="font-cinzel text-white text-xs tracking-[0.3em] uppercase"
                style="writing-mode: vertical-rl; transform: rotate(180deg);">
                Birds
            </span>
        </a>

        {{-- Nav Links (Scrollable on short screens) --}}
        <div class="flex-1 w-full overflow-y-auto py-8 [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
            <ul class="flex flex-col items-center justify-center min-h-full gap-8">
                @foreach ([['Home', '/'], ['Stay', '/stay'], ['Dining', '/dining'], ['Experiences', '/experiences'], ['Gallery', '/gallery'], ['About', '/about'], ['Contact', '/contact']] as [$label, $route])
                    <li>
                        <a href="{{ $route }}"
                            class="text-white/70 hover:text-white focus-visible:text-white font-sans text-[11px] tracking-[0.25em] uppercase transition-all duration-300 outline-none"
                            style="writing-mode: vertical-rl; transform: rotate(180deg);">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Book Now (Anchored Bottom) --}}
        <a href="/book" class="flex items-center justify-center w-full shrink-0 outline-none"
            style="writing-mode: vertical-rl; transform: rotate(180deg);">
            <span
                class="bg-gold text-white font-sans text-[11px] tracking-[0.25em] uppercase px-3 py-4 transition-all duration-300 hover:opacity-90 hover:bg-white hover:text-gold">
                Book Now
            </span>
        </a>
    </nav>

    {{-- MOBILE TOPBAR --}}
    <div :class="scrolled ? 'bg-primary-text/80 backdrop-blur-sm' : 'bg-transparent'"
        class="lg:hidden fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-6 py-4 transition-all duration-500">

        {{-- Logo --}}
        <a href="/" class="font-cinzel text-white text-lg tracking-[0.3em] uppercase outline-none">
            Birds
        </a>

        {{-- Hamburger (Untouched per your request) --}}
        <button @click="open = !open"
            class="text-white focus:outline-none w-8 h-8 relative flex flex-col justify-center items-end gap-1.5"
            aria-label="Toggle menu">
            {{-- Line 1 - long --}}
            <span :class="open ? 'w-6 rotate-45 translate-y-[7.5px]' : 'w-6'"
                class="block h-px bg-white transition-all duration-300 origin-center"></span>
            {{-- Line 2 - short --}}
            <span :class="open ? 'w-6 -rotate-45 -translate-y-[7.5px]' : 'w-4'"
                class="block h-px bg-white transition-all duration-300 origin-center"></span>
        </button>
    </div>

    {{-- MOBILE DRAWER --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full" class="lg:hidden fixed inset-0 z-40 flex" style="display: none;">

        {{-- Drawer Panel --}}
        <div class="w-72 h-full bg-primary-text/95 backdrop-blur-xl flex flex-col pt-24 pb-10 px-10 shadow-2xl">

            {{-- Nav Links (Scrollable area) --}}
            <div class="flex-1 overflow-y-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                <ul class="flex flex-col gap-8 pb-8">
                    @foreach ([['Home', '/'], ['Stay', '/stay'], ['Dining', '/dining'], ['Experiences', '/experiences'], ['Gallery', '/gallery'], ['About', '/about'], ['Contact', '/contact']] as [$label, $route])
                        <li>
                            <a href="{{ $route }}" @click="open = false"
                                class="font-sans text-white/70 hover:text-white text-xl tracking-widest uppercase transition-all duration-300 outline-none focus-visible:text-gold block">
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Book Now (Consistent with desktop styles) --}}
            <div class="pt-6 border-t border-white/10 mt-auto shrink-0">
                <a href="/book"
                    class="block btn-primary">
                    Book Now
                </a>
            </div>

        </div>

        {{-- Overlay --}}
        <div class="flex-1 bg-black/60 backdrop-blur-sm cursor-pointer" @click="open = false" aria-hidden="true"></div>
    </div>

</div>
