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
    <Splide :options="options" aria-label="Carousel">
        <SplideSlide>
            <Image src="store/front.webp" alt="The main desk" rounded-class="!rounded-none" />
        </SplideSlide>
        <SplideSlide>
            <Image src="store/gallery-side.webp" alt="Gallery" rounded-class="!rounded-none" />
        </SplideSlide>
        <SplideSlide>
            <Image
                src="store/framing-bench.webp"
                alt="Framing bench and available frames"
                rounded-class="!rounded-none"
            />
        </SplideSlide>
        <SplideSlide>
            <Image
                src="store/gallery.webp"
                alt="Framing bench and available frames"
                rounded-class="!rounded-none"
            />
        </SplideSlide>
    </Splide>
</template>
