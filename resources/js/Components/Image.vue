<script setup>
import { ref } from 'vue'
import { ArrowPathIcon } from '@heroicons/vue/20/solid/index.js'

const props = defineProps({
    src: String,
    alt: String,
    roundedClass: String,
})

let isLoading = ref(true)

const imageLoaded = () => {
    isLoading.value = false
}

// replace img src once setup
let configPath = 'https://d2bq6z9lholfa6.cloudfront.net/images/' + props.src
</script>

<template>
    <div class="relative">
        <div
            v-if="isLoading"
            class="absolute w-full h-full flex flex-col justify-center items-center"
        >
            <p class="animate-spin">
                <ArrowPathIcon class="w-10 h-10 text-gray-200" />
            </p>
        </div>
        <img
            @load="imageLoaded"
            :src="configPath"
            :alt="alt"
            :aria-label="alt"
            :class="roundedClass"
            class="object-fill w-full rounded-xl"
        />
    </div>
</template>
