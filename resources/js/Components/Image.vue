<script setup>
import {ref} from "vue";
import {ArrowPathIcon} from "@heroicons/vue/20/solid/index.js"

const props = defineProps({
    src: String,
})

let isLoading = ref(true)

const imageLoaded = () => {
    isLoading.value = false
}

const imageError = () => {
    isLoading.value = false
}

// replace img src once setup
let configPath = 's3 url/' + props.src
</script>

<template>
    <div class="relative">
        <div v-if="isLoading" class="absolute w-full h-full flex flex-col justify-center items-center">
            <p class="animate-spin">
                <ArrowPathIcon class="w-10 h-10 text-gray-300"/>
            </p>
        </div>
        <img @load="imageLoaded" :src="src" alt="Framing wall #2" />
    </div>
</template>
