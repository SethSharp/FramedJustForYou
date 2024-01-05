<script setup>
defineProps({
    back: String,
})
</script>

<template>
    <div class="sm:w-4/5 mx-auto mb-6">
        <div class="text-xl sm:text-3xl text-gray-700 px-6 sm:px-0">
            <div class="flex">
                <slot name="header" />
            </div>

            <div v-if="$slots.subtitle" class="text-gray-400 text-lg">
                <slot name="subtitle" />
            </div>
        </div>

        <div class="text-md sm:text-lg text-gray-500 mt-4">
            <div class="text-gray-500 px-8 sm:px-0 text-lg font-medium">
                <slot name="title" />
            </div>

            <div class="leading-loose">
                <slot name="content" />
            </div>
        </div>
    </div>
</template>
