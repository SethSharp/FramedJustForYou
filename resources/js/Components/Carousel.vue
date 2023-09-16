<script setup>
import {Splide, SplideSlide} from "@splidejs/vue-splide";
import '@splidejs/vue-splide/css';

const options = {
    focus: 'center',
    type: 'fade',
    perPage: 1,
    autoplay: true,
    height: '20rem',
}
</script>

<template>
    <Splide :options="options" aria-label="Vue Splide Example">
        <SplideSlide v-for="x in 10">
            <img src="/images/dummylogo.jpeg" alt="Sample 1">
        </SplideSlide>
    </Splide>
</template>
