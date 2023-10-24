<script setup>
import { Splide } from "@splidejs/vue-splide";
import '@splidejs/vue-splide/css';

const props = defineProps({
    type: {
        type: String,
        default: 'loop'
    },
    autoPlay: {
        type: Boolean,
        default: true
    }
})

const options = {
    focus: 'center',
    type: props.type,
    perPage: 1,
    autoplay: props.autoPlay,
}

</script>

<template>
    <Splide :options="options" aria-label="Carousel">
        <slot />
    </Splide>
</template>
