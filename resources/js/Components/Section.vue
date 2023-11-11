<script setup>
import { Link } from '@inertiajs/vue3'
import { ChevronLeftIcon } from '@heroicons/vue/20/solid/index.js'

defineProps({
    back: String,
})
</script>

<template>
    <div class="sm:w-3/4 mx-auto mb-6">
        <div class="text-xl sm:text-3xl py-5 text-gray-700">
            <Link
                v-if="back"
                :href="back"
                class="bg-gray-200 mb-10 rounded-xl w-fit px-2 py-2 text-xl flex hover:bg-gray-300"
            >
                <ChevronLeftIcon class="w-7 h-7" />
                <span class="pr-4"> Back </span>
            </Link>
            <slot name="header" />
            <div v-if="$slots.subtitle" class="text-gray-400 text-lg mt-2">
                <slot name="subtitle" />
            </div>
        </div>
        <div class="text-md sm:text-lg leading-relaxed text-gray-500 my-3">
            <div class="my-6 text-gray-500 text-2xl font-medium mb-3">
                <slot name="title" />
            </div>
            <div>
                <slot name="content" />
            </div>
        </div>
    </div>
</template>
