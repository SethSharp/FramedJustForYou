<script setup>
import { Splide } from "@splidejs/vue-splide";
import '@splidejs/vue-splide/css';

const options = {
    focus: 'center',
    type: 'loop',
    perPage: 1,
    autoplay: true,
}

</script>

<template>
    <Splide :options="options" aria-label="Vue Splide Example">
        <slot />
    </Splide>
</template>
