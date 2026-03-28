{{-- ================================================================
     EXPERIENCES PREVIEW SECTION
     Staggered Layout Integrated with Theme Variables
================================================================ --}}
@php
$resortCards = [
    [
        'title' => 'Bird Park',
        'desc' => 'Buggy tours, bird feeding, and free access to over 10,000 birds — open daily from 6am to 6pm.',
        'link' => '/experiences#bird-park',
        'image' => 'https://images.unsplash.com/photo-1552728089-57168a141872?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80',
    ],
    [
        'title' => 'Elephant Feeding',
        'desc' => 'A rare close-up encounter with our elephants guided by expert keepers. Available daily at 5:30pm.',
        'link' => '/experiences#elephant',
        'image' => 'https://images.unsplash.com/photo-1557050543-4d5f4e07ef46?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80',
    ],
    [
        'title' => 'Pool & Floating Meals',
        'desc' => 'A 100ft secluded pool with floating breakfast, relaxing vibes, and a dedicated kids\' section.',
        'link' => '/experiences#pool',
        'image' => 'https://images.unsplash.com/photo-1576013551527-c15b5636efa9?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80',
    ],
    [
        'title' => 'Weddings & Events',
        'desc' => 'Sri Lanka\'s most spectacular destination for unique weddings, meetings, and private celebrations.',
        'link' => '/experiences#weddings',
        'image' => 'https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80',
    ],
];
@endphp

<section class="relative overflow-hidden bg-nature">
    
    {{-- CONTENT WRAPPER --}}
    <div class="w-full max-w-[var(--max-width-resort)] mx-auto px-5 sm:px-6 lg:px-12 py-20 sm:py-24 lg:py-32 relative z-10 flex flex-col items-center">
        
        {{-- SECTION HEADER --}}
        <div class="flex flex-col items-center text-center gap-4 mb-16 lg:mb-20">
            <div class="flex items-center gap-3">
                <span class="w-8 h-px bg-gold"></span>
                <span class="font-sans text-[10px] tracking-[0.25em] uppercase text-secondary-text">
                    During Your Stay
                </span>
                <span class="w-8 h-px bg-gold"></span>
            </div>
            <h2 class="font-cinzel text-2xl sm:text-3xl lg:text-4xl font-medium text-primary-text">
                Crafted Experiences
            </h2>
        </div>

        {{-- CARDS GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 w-full relative z-20">
            @foreach($resortCards as $card)
            <div class="bg-white rounded-[2.5rem] border border-border shadow-sm p-8 lg:p-10 flex flex-col items-center text-center transition-transform hover:-translate-y-2 duration-500 w-full">
                <div class="w-16 h-16 rounded-full overflow-hidden mb-6 border-4 border-nature shadow-sm">
                    <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover">
                </div>
                <h4 class="text-[18px] lg:text-[20px] font-cinzel font-semibold text-primary-text leading-tight mb-3 lg:mb-4">
                    {{ $card['title'] }}
                </h4>
                <p class="text-[13px] lg:text-[14px] font-sans text-secondary-text leading-relaxed mb-6 lg:mb-8">
                    {{ $card['desc'] }}
                </p>
                <a href="{{ $card['link'] }}" class="btn-primary mt-auto text-[10px] lg:text-[11px] px-6 py-2.5">
                    Read More
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>
