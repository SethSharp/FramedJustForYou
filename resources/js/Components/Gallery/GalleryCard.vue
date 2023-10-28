<script setup>
import Image from '@/Components/Image.vue'

defineProps({
    description: String,
    src: String,
})
</script>

<template>
    <div class="w-full flex-wrap md:flex-no-wrap flex my-6 rounded-xl overflow-hidden">
        <div class="w-full md:w-1/2 bg-opacity-50 flex">
            <Image class="object-cover w-full" :src="src" />
        </div>
        <div class="w-full md:w-1/2 flex">
            <div class="mx-8 flex rounded-l-xl transition duration-700">
                <p class="my-auto text-gray-400">
                    {{ description }}
                </p>
            </div>
        </div>
    </div>
</template>
