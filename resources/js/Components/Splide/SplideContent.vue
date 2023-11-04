<script setup>
import { SplideSlide } from '@splidejs/vue-splide'
import Image from '@/Components/Image.vue'

const props = defineProps({
    image: String,
    title: String,
    content: String,
})
</script>

<template>
    <SplideSlide class="flex-wrap lg:flex h-fit">
        <div class="lg:w-1/2">
            <img
                :src="'https://d2bq6z9lholfa6.cloudfront.net/images/' + image"
                class="mx-auto my-auto rounded-2xl"
            />
        </div>
        <div class="lg:w-1/2 p-6">
            <h1 class="text-xl font-bold">{{ title }}</h1>
            <p>
                {{ content }}
            </p>
        </div>
    </SplideSlide>
</template>
