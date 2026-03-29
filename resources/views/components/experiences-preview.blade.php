{{-- ================================================================
     EXPERIENCES PREVIEW SECTION
================================================================ --}}
@php
$resortCards = [
    [
        'title'     => 'Bird Park',
        'tag'       => 'Signature Experience',
        'desc'      => 'Explore a living sanctuary of over 10,000 birds through guided buggy tours and intimate feeding encounters — open daily from 6am to 6pm.',
        'link'      => '/experiences#bird-park',
        'image'     => '/images/experiences/birds-park.jpg',
        'featured'  => true,
    ],
    [
        'title'     => 'Elephant Feeding',
        'tag'       => null,
        'desc'      => 'A rare close-up encounter with our elephants, guided by expert keepers in their natural habitat. Available daily at 5:30pm.',
        'link'      => '/experiences#elephant',
        'image'     => '/images/experiences/elephant.jpg',
        'featured'  => false,
    ],
    [
        'title'     => 'Tree House Escape',
        'tag'       => 'Romantic',
        'desc'      => 'Elevate your stay above the canopy with a private treehouse overlooking Nagara Lake — a serene setting for romance, reflection, and unforgettable moments.',
        'link'      => '/experiences#treehouse',
        'image'     => '/images/experiences/tree-house.jpg',
        'featured'  => false,
    ],
    [
        'title'     => 'Pool & Floating Meals',
        'tag'       => null,
        'desc'      => 'Drift into stillness at our 100ft secluded pool. Begin your morning with a floating breakfast or unwind beside the water as the day fades.',
        'link'      => '/experiences#pool',
        'image'     => '/images/experiences/pool.jpg',
        'featured'  => false,
    ],
    [
        'title'     => 'Organic Farm Journey',
        'tag'       => 'Eco Experience',
        'desc'      => 'Discover our farm-to-table philosophy with a guided tour through lush organic gardens that nourish both our cuisine and wildlife.',
        'link'      => '/experiences#farm',
        'image'     => '/images/experiences/farm.jpg',
        'featured'  => false,
    ],
    [
        'title'     => 'Culinary Experience',
        'tag'       => null,
        'desc'      => 'Join our chefs in crafting authentic dishes using fresh local ingredients, blending Sri Lankan tradition with refined culinary artistry.',
        'link'      => '/experiences#culinary',
        'image'     => 'https://images.unsplash.com/photo-1498654896293-37aacf113fd9?auto=format&fit=crop&w=800&q=80',
        'featured'  => false,
    ],
    [
        'title'     => 'Weddings & Events',
        'tag'       => null,
        'desc'      => 'Sri Lanka\'s most spectacular backdrop for intimate weddings, private celebrations, and unforgettable milestone moments.',
        'link'      => '/experiences#weddings',
        'image'     => '/images/experiences/wedding.jpg',
        'featured'  => false,
    ],
];
@endphp

<section class="relative overflow-hidden" style="background-color: var(--color-nature);">
    <div class="w-full max-w-[var(--max-width-resort)] mx-auto px-5 sm:px-6 lg:px-12 py-20 sm:py-24 lg:py-32">

        {{-- SECTION HEADER --}}
        <div class="flex flex-col items-center text-center gap-4 mb-16 lg:mb-20">
            <div class="flex items-center gap-4">
                <span class="w-8 h-px bg-[var(--color-gold)]"></span>
                <span class="font-sans text-[10px] tracking-[0.25em] uppercase text-[var(--color-secondary-text)]">
                    During Your Stay
                </span>
                <span class="w-8 h-px bg-[var(--color-gold)]"></span>
            </div>
            <h2 class="font-cinzel text-2xl sm:text-3xl lg:text-4xl font-medium text-[var(--color-primary-text)]">
                Life at Birds Resort
            </h2>
            <p class="font-sans text-sm sm:text-base text-[var(--color-secondary-text)] font-light max-w-xl leading-relaxed mt-2">
                From tranquil moments to unforgettable encounters, discover what awaits during your stay.
            </p>
        </div>

        {{-- CARDS GRID --}}
        {{-- 
            Desktop: 4 cols, 2 rows (7 cards — featured spans 2 cols so row 1 = 4 units, row 2 = 3 cards filling left)
            Mobile: show only first 3 cards, rest hidden
        --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6 w-full items-stretch">

            @foreach($resortCards as $index => $card)

            <div class="
                {{ $card['featured'] ? 'md:col-span-2 lg:col-span-2' : 'col-span-1' }}
                {{ $index >= 3 ? 'hidden md:flex' : 'flex' }}
                group flex-col overflow-hidden border border-[var(--color-border)] bg-white shadow-sm transition-all duration-500 hover:shadow-lg hover:-translate-y-1">

                {{-- Image Block --}}
                <div class="relative overflow-hidden {{ $card['featured'] ? 'h-[240px] sm:h-[280px]' : 'h-[200px] sm:h-[220px]' }} w-full shrink-0">
                    <img src="{{ $card['image'] }}"
                         alt="{{ $card['title'] }}"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>

                    @if($card['tag'])
                    <div class="absolute top-4 left-4">
                        <span class="font-sans text-[9px] tracking-[0.25em] uppercase bg-[var(--color-gold)] text-white px-3 py-1.5">
                            {{ $card['tag'] }}
                        </span>
                    </div>
                    @endif
                </div>

                {{-- Card Body --}}
                <div class="flex flex-col flex-1 p-6 lg:p-8 gap-3">
                    <div class="w-6 h-px bg-[var(--color-gold)] mb-1"></div>
                    <h4 class="font-cinzel {{ $card['featured'] ? 'text-xl lg:text-2xl' : 'text-base lg:text-lg' }} font-medium text-[var(--color-primary-text)] group-hover:text-[var(--color-gold)] transition-colors duration-300 leading-snug">
                        {{ $card['title'] }}
                    </h4>
                    <p class="font-sans text-sm text-[var(--color-secondary-text)] leading-relaxed flex-1">
                        {{ $card['desc'] }}
                    </p>
                    <a href="{{ $card['link'] }}"
                       class="mt-2 inline-flex items-center gap-3 font-sans text-[11px] tracking-[0.2em] uppercase text-[var(--color-gold)] hover:text-[var(--color-primary-text)] transition-colors duration-300 group/link">
                        View Experience
                        <span class="w-6 h-px bg-[var(--color-gold)] group-hover/link:w-10 transition-all duration-300"></span>
                    </a>
                </div>

            </div>

            @endforeach

        </div>

        {{-- MOBILE: View All Button (shown only when cards are hidden) --}}
        <div class="flex md:hidden justify-center mt-10">
            <a href="/experiences"
               class="inline-flex items-center gap-4 font-sans text-[11px] tracking-[0.25em] uppercase text-[var(--color-primary-text)] border border-[var(--color-border)] px-8 py-4 hover:border-[var(--color-gold)] hover:text-[var(--color-gold)] transition-all duration-300 group">
                View All Experiences
                <span class="w-6 h-px bg-[var(--color-primary-text)] group-hover:bg-[var(--color-gold)] group-hover:w-10 transition-all duration-300"></span>
            </a>
        </div>

    </div>
</section>