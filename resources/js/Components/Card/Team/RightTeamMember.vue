<script setup>
import Image from '@/Components/Image.vue'

const props = defineProps({
    name: String,
    position: String,
    description: String,
    src: String,
    alt: String,
})
</script>

<template>
    <div class="w-full flex-wrap md:flex-no-wrap flex my-6 rounded-xl overflow-hidden">
        <div
            class="w-full lg:w-1/2 flex"
        >
            <Image
                v-if="src"
                class="mx-auto my-auto w-3/5"
                :src="src"
                :alt="alt"
            />
        </div>
        <div
            :class="{ 'lg:w-full': !src, 'lg:w-1/2': src }"
            class="w-full flex"
        >
            <div class="mx-8 my-10 rounded-r-xl transition duration-700 p-2">
                <h1 class="text-4xl text-gray-600">{{ name }}</h1>
                <span class="text-2xl text-gray-500"> {{ position }} </span>
                <p class="mt-4 text-gray-400">
                    {{ description }}
                </p>
            </div>
        </div>
    </div>
</template>
