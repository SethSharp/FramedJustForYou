<script setup>
import {Splide, SplideSlide} from "@splidejs/vue-splide";
import '@splidejs/vue-splide/css';

const options = {
    focus: 'center',
    type: 'loop',
    perPage: 1,
    autoplay: true,
}

const images = [
    "/images/dianne-temp 1.png",
    "/images/dummylogo.jpeg"
]
</script>

<template>
    <Splide :options="options" aria-label="Vue Splide Example">
        <SplideSlide v-for="img in images">
            <img :src="img" alt="Sample 1">
        </SplideSlide>
    </Splide>
</template>
