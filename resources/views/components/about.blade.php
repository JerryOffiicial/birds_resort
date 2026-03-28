{{-- ================================================================
     ABOUT SECTION
     Matches hero layout: max-w-resort, px-6 lg:px-12
================================================================ --}}
<section style="background-color: var(--color-nature);">
    <div class="w-full max-w-[var(--max-width-resort)] mx-auto px-5 sm:px-6 lg:px-12 py-20 sm:py-24 lg:py-32">

        {{-- ============================================================
             TOP BLOCK — Logo + Welcome Paragraph (Centered)
        ============================================================ --}}
        <div class="flex flex-col items-center text-center gap-6 sm:gap-8 mb-16 lg:mb-24">

            {{-- Row 1: Mini Logo --}}
            <img src="{{ asset('images/mini-logo.png') }}" alt="Birds Resort"
                class="h-10 sm:h-12 w-auto object-contain opacity-80">

            {{-- Row 2: Welcome Paragraph --}}
            <p class="font-sans text-sm sm:text-base lg:text-lg leading-relaxed max-w-2xl font-normal"
                style="color: var(--color-primary-text);">
                Welcome to the luxury home of Birds Resort — a sanctuary where the
                untamed beauty of Sri Lanka's largest aviary meets world-class comfort.
                Nestled across 50 acres of pristine wilderness, every moment here is
                designed to reconnect you with nature, without sacrificing a single
                indulgence. This is not just a stay. This is an experience crafted for
                those who seek the extraordinary.
            </p>

        </div>

        {{-- ============================================================
             BOTTOM BLOCK — Image + Stay Info
        ============================================================ --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 sm:gap-12 lg:gap-20 items-center">

            {{-- LEFT: Room Info --}}
            <div class="flex flex-col justify-center gap-6 sm:gap-8 order-2 lg:order-1">

                {{-- Eyebrow --}}
                <div class="flex items-center gap-4">
                    <span class="w-8 h-px bg-[var(--color-gold)]"></span>
                    <span class="font-sans text-[10px] tracking-[0.25em] uppercase text-[var(--color-secondary-text)]">
                        Stay Options
                    </span>
                </div>

                {{-- Heading --}}
                <h3
                    class="font-cinzel text-2xl sm:text-3xl lg:text-4xl text-[var(--color-gold)] font-medium leading-[1.3]">
                    Every room is a window<br class="hidden lg:block">into the wild
                </h3>

                {{-- Room listings --}}
                <div class="flex flex-col gap-0 mt-2">

                    {{-- Scarlet Deluxe --}}
                    <div
                        class="flex items-start gap-5 py-5 group border-l-2 border-[var(--color-border)] hover:border-[var(--color-gold)] pl-6 transition-colors duration-500">
                        <div>
                            <h4
                                class="font-cinzel text-base sm:text-lg font-medium text-[var(--color-primary-text)] group-hover:text-[var(--color-gold)] transition-colors duration-300">
                                Scarlet Deluxe
                            </h4>
                            <p
                                class="font-sans text-sm text-[var(--color-secondary-text)] mt-1.5 leading-relaxed max-w-sm">
                                Immersive nature views with refined luxury interiors.
                            </p>
                        </div>
                    </div>

                    {{-- Pheasant Superior --}}
                    <div
                        class="flex items-start gap-5 py-5 group border-l-2 border-[var(--color-border)] hover:border-[var(--color-gold)] pl-6 transition-colors duration-500">
                        <div>
                            <h4
                                class="font-cinzel text-base sm:text-lg font-medium text-[var(--color-primary-text)] group-hover:text-[var(--color-gold)] transition-colors duration-300">
                                Pheasant Superior
                            </h4>
                            <p
                                class="font-sans text-sm text-[var(--color-secondary-text)] mt-1.5 leading-relaxed max-w-sm">
                                Spacious retreats designed for total tranquillity.
                            </p>
                        </div>
                    </div>

                </div>

                {{-- CTA --}}
                <div class="mt-4 flex">
                    <a href="/stay" class="btn-primary inline-flex items-center justify-center">
                        Explore Accommodations
                    </a>
                </div>

            </div>

            {{-- RIGHT: Image --}}
            <div class="relative w-full order-1 lg:order-2 lg:self-stretch ">

                {{-- Image fills the same height as the left column on desktop --}}
                <div class="relative z-10 w-full overflow-hidden shadow-2xl h-full min-h-[320px] sm:min-h-[400px] rounded-4xl">
                    <img src="{{ asset('images/about-image.png') }}" alt="Birds Resort Stay Experience"
                        class="w-full h-full object-cover transform transition-transform duration-1000 hover:scale-105 ">
                    {{-- Gold bottom accent --}}
                    <div
                        class="absolute bottom-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-[var(--color-gold)] to-transparent opacity-60">
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
