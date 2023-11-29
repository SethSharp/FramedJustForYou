<script setup>
import { Splide } from '@splidejs/vue-splide'
import '@splidejs/vue-splide/css'
import { getCurrentScope } from 'vue'

const props = defineProps({
    type: {
        type: String,
        default: 'loop',
    },
    autoPlay: {
        type: Boolean,
        default: true,
    },
    height: String,
})

const getCarouselHeight = () => {
    if (screen.width < 400) {
        return '10rem'
    }

    return '20rem'
}

const options = {
    focus: 'center',
    type: props.type,
    perPage: 1,
    autoplay: props.autoPlay,
    height: getCarouselHeight(),
}
</script>

<template>
    <Splide :options="options" aria-label="Carousel">
        <slot />
    </Splide>
</template>
