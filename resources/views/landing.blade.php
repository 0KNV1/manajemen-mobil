<x-front-layout>
    <!-- Hero -->

    <!-- Popular Cars -->
    <section class="bg-darkGrey" id="popularCars">
        <div class="container relative py-[100px]">
            <header class="mb-[30px]">
                <h2 class="font-bold text-dark text-[26px] mb-1">
                    Daftar Mobil Kantor
                </h2>
                <p class="text-base text-secondary">Start your big day</p>
            </header>

            <!-- Cars -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-[29px]">
                @foreach ($cars as $car)
                    <!-- Card -->
                    <div class="card-popular">
                        <div>
                            <h5 class="text-lg text-dark font-bold mb-[2px]">
                                {{ $car->name }}
                            </h5>
                            <p class="text-sm font-normal text-secondary">
                                {{ $car->type ? $car->type->name : '-' }}
                            </p>
                            <a href="{{ route('detail', $car->slug) }}" class="absolute inset-0"></a>
                        </div>
                        <img src="{{ $car->thumbnail }}" class="rounded-[18px] min-w-[216px] w-full h-[150px]"
                            alt="">
                        <div class="flex items-center justify-between gap-1">
                            <!-- Price -->
                            <p class="text-sm font-normal text-secondary">
                                <span class="text-base font-bold text-primary">Available</span>
                            </p>
                            <!-- Rating -->

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="container relative py-[100px]">
        <header class="text-center mb-[50px]">
            <h2 class="font-bold text-dark text-[26px] mb-1">
                Frequently Asked Questions
            </h2>
            <p class="text-base text-secondary">Learn more about car management website</p>
        </header>

        <!-- Questions -->
        <div class="grid md:grid-cols-2 gap-x-[50px] gap-y-6 max-w-[910px] w-full mx-auto">
            <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
                id="faq1">
                <div class="flex items-center justify-between gap-1">
                    <p class="text-base font-semibold text-dark">
                        Bagaimana cara peminjaman
                    </p>
                    <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
                </div>
                <div class="hidden pt-4 max-w-[335px]" id="faq1-content">
                    <p class="text-base text-dark leading-[26px]">
                        Ipsum top talent busy making race that
                        agreed both party. You can si amet lorem
                        dolor get the rewards after winninng.
                    </p>
                </div>
            </a>
            <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
                id="faq2">
                <div class="flex items-center justify-between gap-1">
                    <p class="text-base font-semibold text-dark">
                        Batas waktu peminjaman
                    </p>
                    <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
                </div>
                <div class="hidden pt-4 max-w-[335px]" id="faq2-content">
                    <p class="text-base text-dark leading-[26px]">
                        Ipsum top talent busy making race that
                        agreed both party. You can si amet lorem
                        dolor get the rewards after winninng.
                    </p>
                </div>
            </a>
            <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
                id="faq3">
                <div class="flex items-center justify-between gap-1">
                    <p class="text-base font-semibold text-dark">
                        Diamana bisa meminjam mobil
                    </p>
                    <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
                </div>
                <div class="hidden pt-4 max-w-[335px]" id="faq3-content">
                    <p class="text-base text-dark leading-[26px]">
                        Ipsum top talent busy making race that
                        agreed both party. You can si amet lorem
                        dolor get the rewards after winninng.
                    </p>
                </div>
            </a>
            <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
                id="faq4">
                <div class="flex items-center justify-between gap-1">
                    <p class="text-base font-semibold text-dark">
                        Siapa yang berhak untuk meminjam mobil
                    </p>
                    <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
                </div>
                <div class="hidden pt-4 max-w-[335px]" id="faq4-content">
                    <p class="text-base text-dark leading-[26px]">
                        Ipsum top talent busy making race that
                        agreed both party. You can si amet lorem
                        dolor get the rewards after winninng.
                    </p>
                </div>
            </a>
            <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
                id="faq5">
                <div class="flex items-center justify-between gap-1">
                    <p class="text-base font-semibold text-dark">
                        Contact yang dapat dihubungi jika ada masalah
                    </p>
                    <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
                </div>
                <div class="hidden pt-4 max-w-[335px]" id="faq5-content">
                    <p class="text-base text-dark leading-[26px]">
                        Ipsum top talent busy making race that
                        agreed both party. You can si amet lorem
                        dolor get the rewards after winninng.
                    </p>
                </div>
            </a>
            <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
                id="faq6">
                <div class="flex items-center justify-between gap-1">
                    <p class="text-base font-semibold text-dark">
                        Bagaimana jika mobil rusak
                    </p>
                    <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
                </div>
                <div class="hidden pt-4 max-w-[335px]" id="faq6-content">
                    <p class="text-base text-dark leading-[26px]">
                        Ipsum top talent busy making race that
                        agreed both party. You can si amet lorem
                        dolor get the rewards after winninng.
                    </p>
                </div>
            </a>
        </div>
    </section>

    <!-- Instant Booking -->
    <section class="relative bg-[#060523]">
        <div class="container py-20">
            <div class="flex flex-col">
                <header class="mb-[50px] max-w-[360px] w-full">
                    <h2 class="font-bold text-white text-[26px] mb-4">
                        Drive Yours Today. <br>
                        Drive Faster.
                    </h2>
                    <p class="text-base text-subtlePars">Get an new way to manage car and catch up whatever your
                        really want to achieve today, yes.</p>
                </header>
                <!-- Button Primary -->
                <div class="p-1 rounded-full bg-primary group w-max">
                    <a href="#popularCars" class="btn-primary">
                        <p class="transition-all duration-[320ms] translate-x-3 group-hover:-translate-x-1">
                            Book Now
                        </p>
                        <img src="/svgs/ic-arrow-right.svg"
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-[320ms]"
                            alt="">
                    </a>
                </div>
            </div>
            <div class="absolute bottom-[-30px] right-0 lg:w-[764px] max-h-[332px] hidden lg:block">
                <img src="/images/porsche_small.webp" alt="">
            </div>
        </div>
    </section>

    <footer class="py-10 md:pt-[100px] md:pb-[70px] container">
        <p class="text-base text-center text-secondary">
            All Rights Reserved. Copyright Alfaruq 2023.
        </p>
    </footer>
</x-front-layout>
