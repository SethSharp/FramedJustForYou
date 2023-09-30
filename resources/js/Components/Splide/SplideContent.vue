<script setup>
import {SplideSlide} from "@splidejs/vue-splide";

const props = defineProps({
    image: String,
    title: String,
    content: String
})
</script>

<template>
    <SplideSlide class="flex-wrap lg:flex">
        <img class="lg:w-1/2" :src="image" alt="Framing wall #2">
        <div class="lg:w-1/2 p-6">
            <h1 class="text-xl font-bold"> {{ title }} </h1>
            <p>
                {{ content }}
            </p>
        </div>
    </SplideSlide>
</template>
