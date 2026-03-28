{{-- ================================================================
     VALUE STRIP SECTION
     Row 1: Social proof — avatars + "booked by 10k"
     Row 2: Infinite marquee — platform names
     Row 3: 4 value points with gold numbers
     Row 4: "Since" text
     Background: #1A1A1A (dark)
================================================================ --}}
<section style="background-color: #FFFFFF;">
    <div class="w-full max-w-[var(--max-width-resort)] mx-auto px-5 sm:px-6 lg:px-12 py-20 sm:py-24 lg:py-32">

        {{-- ============================================================
             ROW 1: SOCIAL PROOF — Avatars + Booked by 10k
        ============================================================ --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-5 mb-14 lg:mb-16">

            {{-- Avatar circles --}}
            <div class="flex -space-x-3">
                @foreach(['avatar-1.webp','avatar-2.webp','avatar-3.webp','avatar-4.webp'] as $avatar)
                <div class="w-10 h-10 rounded-full border-2 overflow-hidden shrink-0"
                     style="border-color: #FFFFFF; background-color: var(--color-gold);">
                    <img src="{{ asset('images/avatars/' . $avatar) }}"
                         alt="Guest"
                         class="w-full h-full object-cover"
                         onerror="this.parentElement.style.background='#9F7D44'">
                </div>
                @endforeach
            </div>

            {{-- Divider --}}
            <div class="hidden sm:block w-px h-8"
                 style="background-color: var(--color-border);"></div>

            {{-- Text --}}
            <div class="flex flex-col items-center sm:items-start gap-1">
                <div class="flex items-center gap-2">
                    @for($i = 0; $i < 5; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 20 20" fill="currentColor"
                         style="color: var(--color-gold);">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="font-sans text-sm" style="color: var(--color-secondary-text);">
                    Booked by <span style="color: var(--color-primary-text);" class="font-medium">over 10,000 guests</span> worldwide
                </p>
            </div>

        </div>

        {{-- ============================================================
             ROW 2: INFINITE MARQUEE — Platforms
        ============================================================ --}}
        <div class="relative overflow-hidden mb-16 lg:mb-20 border-y"
             style="border-color: var(--color-border); padding: 18px 0;">

            {{-- Fade edges --}}
            <div class="absolute left-0 top-0 bottom-0 w-24 z-10 pointer-events-none"
                 style="background: linear-gradient(to right, #FFFFFF, transparent);"></div>
            <div class="absolute right-0 top-0 bottom-0 w-24 z-10 pointer-events-none"
                 style="background: linear-gradient(to left, #FFFFFF, transparent);"></div>

            {{-- Marquee track --}}
            <div class="flex gap-16 animate-[marquee_20s_linear_infinite] whitespace-nowrap w-max">
                @php
                $platforms = [
                    ['TripAdvisor',    '★ Travellers\' Choice'],
                    ['Agoda',          '★ Top Rated Property'],
                    ['Booking.com',    '★ Exceptional 9.4'],
                    ['Google Reviews', '★ 4.9 / 5.0'],
                    ['TripAdvisor',    '★ Travellers\' Choice'],
                    ['Agoda',          '★ Top Rated Property'],
                    ['Booking.com',    '★ Exceptional 9.4'],
                    ['Google Reviews', '★ 4.9 / 5.0'],
                ];
                @endphp

                @foreach($platforms as [$name, $badge])
                <div class="inline-flex items-center gap-4 shrink-0">
                    <span class="font-cinzel text-base font-medium tracking-widest uppercase"
                          style="color: var(--color-primary-text);">
                        {{ $name }}
                    </span>
                    <span class="font-sans text-xs tracking-[0.2em]"
                          style="color: var(--color-gold);">
                        {{ $badge }}
                    </span>
                    <span class="w-1 h-1 rounded-full shrink-0"
                          style="background-color: var(--color-border);"></span>
                </div>
                @endforeach
            </div>

        </div>

        {{-- ============================================================
             ROW 3: 4 VALUE POINTS — Gold numbers
        ============================================================ --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0">

            @php
            $values = [
                ['01', 'Living Sanctuary', 'Set within a rare ecosystem where birds, water, and wilderness exist uninterrupted.'],
                ['02', 'Quiet Escape',     'Step away from noise into a slower, more grounded rhythm of living.'],
                ['03', 'Refined Comfort',  'Thoughtfully designed spaces that balance elegance with natural surroundings.'],
                ['04', 'Distinct Setting', 'Positioned alongside one of South Asia\'s most unique natural habitats.'],
            ];
            @endphp

            @foreach($values as $index => [$number, $title, $description])
            <div class="flex flex-col gap-5 py-8 lg:py-0 lg:px-8
                        {{ $index !== 0 ? 'border-t sm:border-t-0 sm:border-l' : '' }}
                        {{ $index === 2 ? 'sm:border-t lg:border-t-0' : '' }}"
                 style="border-color: var(--color-border);">

                {{-- Gold number --}}
                <span class="font-cinzel text-4xl font-semibold"
                      style="color: var(--color-gold); opacity: 0.7;">
                    {{ $number }}
                </span>

                {{-- Title --}}
                <h4 class="font-cinzel text-base font-medium tracking-wide"
                    style="color: var(--color-primary-text);">
                    {{ $title }}
                </h4>

                {{-- Description --}}
                <p class="font-sans text-sm leading-relaxed"
                   style="color: var(--color-secondary-text);">
                    {{ $description }}
                </p>

            </div>
            @endforeach

        </div>

        {{-- ============================================================
             ROW 4: SINCE TEXT
        ============================================================ --}}
        <div class="flex items-center justify-center gap-4 mt-16 lg:mt-20 pt-10"
             style="border-top: 1px solid var(--color-border);">
            <span class="w-12 h-px" style="background-color: var(--color-gold); opacity: 0.5;"></span>
            <p class="font-sans text-xs tracking-[0.35em] uppercase"
               style="color: var(--color-secondary-text);">
                Serving Nature Lovers Since 2018
            </p>
            <span class="w-12 h-px" style="background-color: var(--color-gold); opacity: 0.5;"></span>
        </div>

    </div>
</section>

<style>
@keyframes marquee {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
</style>
