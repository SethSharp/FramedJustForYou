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
