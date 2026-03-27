{{-- ================================================================
     ABOUT SECTION
     Matches hero layout: max-w-resort, px-6 lg:px-12
================================================================ --}}
<section style="background-color: var(--color-nature);">
    <div class="w-full max-w-[var(--max-width-resort)] mx-auto px-6 lg:px-12 py-24 lg:py-32">

        {{-- ============================================================
             TOP BLOCK — Logo + Welcome Paragraph (Centered)
        ============================================================ --}}
        <div class="flex flex-col items-center text-center gap-8 mb-20 lg:mb-28">

            {{-- Row 1: Mini Logo --}}
            <img src="{{ asset('images/mini-logo.png') }}"
                 alt="Birds Resort"
                 class="h-12 w-auto object-contain opacity-80">

            {{-- Row 2: Welcome Paragraph --}}
            <p class="font-sans text-base lg:text-lg leading-relaxed max-w-2xl font-normal"
               style="color: var(--color-gold);">
                Welcome to the luxury home of Birds Resort — a sanctuary where the
                untamed beauty of Sri Lanka's largest aviary meets world-class comfort.
                Nestled across 50 acres of pristine wilderness, every moment here is
                designed to reconnect you with nature, without sacrificing a single
                indulgence. This is not just a stay. This is an experience crafted for
                those who seek the extraordinary.
            </p>

        </div>

        {{-- ============================================================
             BOTTOM BLOCK — 2 Columns (Stay Options & Sharp Image)
        ============================================================ --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-8 items-center mt-12 lg:mt-24">

            {{-- ── LEFT COLUMN: Text Content (Span 5) ── --}}
            <div class="lg:col-span-5 flex flex-col justify-center gap-8 order-2 lg:order-1">

                {{-- Tag --}}
                <div class="flex items-center gap-4">
                    <span class="w-8 h-px bg-[var(--color-gold)]"></span>
                    <span class="font-sans text-[10px] tracking-[0.25em] uppercase text-[var(--color-secondary-text)]">
                        Stay Options
                    </span>
                </div>

                {{-- Bold Section Heading --}}
                <h3 class="font-cinzel text-3xl lg:text-4xl text-[var(--color-gold)] font-medium leading-[1.3]">
                    Every room is a window<br class="hidden lg:block">into the wild
                </h3>

                {{-- Room Options --}}
                <div class="flex flex-col gap-6 mt-4">

                    {{-- Scarlet Deluxe --}}
                    <div class="flex items-start gap-5 group">
                        <div class="relative w-px h-full min-h-[50px] bg-[var(--color-border)] shrink-0">
                            <div class="absolute top-0 left-0 w-full h-0 bg-[var(--color-gold)] transition-all duration-500 group-hover:h-full"></div>
                        </div>
                        <div class="pb-2">
                            <h4 class="font-cinzel text-lg font-medium text-[var(--color-primary-text)] group-hover:text-[var(--color-gold)] transition-colors duration-300">
                                Scarlet Deluxe
                            </h4>
                            <p class="font-sans text-sm text-[var(--color-secondary-text)] mt-2 leading-relaxed max-w-sm">
                                Immersive nature views with refined luxury interiors.
                            </p>
                        </div>
                    </div>

                    {{-- Pheasant Superior --}}
                    <div class="flex items-start gap-5 group">
                        <div class="relative w-px h-full min-h-[50px] bg-[var(--color-border)] shrink-0">
                            <div class="absolute top-0 left-0 w-full h-0 bg-[var(--color-gold)] transition-all duration-500 group-hover:h-full"></div>
                        </div>
                        <div class="pb-2">
                            <h4 class="font-cinzel text-lg font-medium text-[var(--color-primary-text)] group-hover:text-[var(--color-gold)] transition-colors duration-300">
                                Pheasant Superior
                            </h4>
                            <p class="font-sans text-sm text-[var(--color-secondary-text)] mt-2 leading-relaxed max-w-sm">
                                Spacious retreats designed for total tranquillity.
                            </p>
                        </div>
                    </div>

                </div>

                {{-- CTA --}}
                <div class="mt-6 flex">
                    <a href="/stay" class="btn-primary inline-flex items-center justify-center relative shadow hover:shadow-xl group transition-all duration-500">
                        Explore Accommodations
                    </a>
                </div>

            </div>

            {{-- ── RIGHT COLUMN: Sharp Image + Decorative Frame (Span 6, offset 1) ── --}}
            <div class="lg:col-span-6 lg:col-start-7 relative w-full order-1 lg:order-2 mb-10 lg:mb-0 px-6 sm:px-12 lg:px-0">
                
                {{-- Decorative Behind-Image Frame --}}
                <div class="absolute top-0 left-0 lg:-top-6 lg:-right-6 w-full h-full border border-[var(--color-gold)] opacity-40 z-0 translate-x-4 -translate-y-4 lg:translate-x-0 lg:-translate-y-0"></div>
                <div class="absolute bottom-0 right-0 w-1/2 h-1/2 bg-[var(--color-gold)] opacity-[0.03] z-0 -translate-x-4 translate-y-4 lg:-translate-x-10 lg:translate-y-10"></div>

                {{-- Image Container (Constrained & Sharp) --}}
                <div class="relative z-10 w-full max-w-xs sm:max-w-sm mx-auto lg:max-w-md lg:ml-auto lg:mr-0 shadow-2xl bg-[var(--color-nature)]">
                    <div class="aspect-[4/5] lg:aspect-[3/4] overflow-hidden">
                        <img src="{{ asset('images/about-image.png') }}"
                             alt="Birds Resort Stay Experience"
                             class="w-full h-full object-cover transform transition-transform duration-1000 hover:scale-110">
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
