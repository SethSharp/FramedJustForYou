<script setup>
import { Link } from '@inertiajs/vue3'
import { ChevronLeftIcon } from '@heroicons/vue/20/solid/index.js'

defineProps({
    back: String,
})
</script>

<template>
    <div class="sm:w-3/4 mx-auto mb-6">
        <div class="text-xl sm:text-3xl text-gray-700">
            <div class="flex">
                <slot name="header" />
            </div>

            <div v-if="$slots.subtitle" class="text-gray-400 text-lg mt-2">
                <slot name="subtitle" />
            </div>
        </div>
        <div class="text-md sm:text-lg leading-relaxed text-gray-500">
            <div class="text-gray-500 text-lg font-medium">
                <slot name="title" />
            </div>
            <div class="mt-2">
                <slot name="content" />
            </div>
        </div>
    </div>
</template>
