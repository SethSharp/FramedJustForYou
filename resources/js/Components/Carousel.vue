<script setup>
import {Splide, SplideSlide} from "@splidejs/vue-splide";
import '@splidejs/vue-splide/css';

const options = {
    rewind: false,
    type: 'loop',
    perPage: 2,
    perMove: 1,
    focus: 'center',
    autoPlay: true,
    drag: 'free',
}
</script>

<template>
    <Splide :options="options" aria-label="Vue Splide Example">
        <SplideSlide>
            <img src="/images/dummylogo.jpeg" alt="Sample 1">
        </SplideSlide>
        <SplideSlide>
            <img src="/images/dummylogo.jpeg" alt="Sample 2">
        </SplideSlide>
        <SplideSlide>
            <img src="/images/dummylogo.jpeg" alt="Sample 2">
        </SplideSlide>
    </Splide>
</template>
