<script setup>
import { Splide, SplideSlide } from '@splidejs/vue-splide'
import '@splidejs/vue-splide/css'
import Image from '@/Components/Image.vue'

const options = {
    focus: 'center',
    type: 'loop',
    perPage: 1,
    autoplay: true,
    arrows: false,
    pagination: false,
}
</script>

<template>
    <div>
        <div class="absolute inset-0 bg-black/40 z-30"></div>

        <div class="absolute top-5 md:top-15 bottom-10 left-0 sm:left-5 z-40 pl-4 sm:pl-6">
            <h1 class="text-3xl sm:text-6xl text-white">Framed Just For you</h1>

            <h2 class="text-left text-xl sm:text-2xl md:text-3xl text-gray-300">
                60+ years of experience
            </h2>
        </div>

        <Splide :options="options" aria-label="Carousel">
            <SplideSlide>
                <Image src="store/front.png" alt="The main desk" rounded-class="!rounded-none" />
            </SplideSlide>

            <SplideSlide>
                <Image src="store/gallery-side.png" alt="Gallery" rounded-class="!rounded-none" />
            </SplideSlide>

            <SplideSlide>
                <Image
                    src="store/framing-bench.png"
                    alt="Framing bench and available frames"
                    rounded-class="!rounded-none"
                />
            </SplideSlide>

            <SplideSlide>
                <Image
                    src="store/gallery.png"
                    alt="Framing bench and available frames"
                    rounded-class="!rounded-none"
                />
            </SplideSlide>
        </Splide>
    </div>
</template>
