<script setup>
defineProps({
    back: String,
})
</script>

<template>
    <div class="w-full sm:w-4/5 mx-auto mb-6">
        <div class="text-gray-700">
            <div class="flex text-2xl sm:text-3xl">
                <slot name="header" />
            </div>

            <div v-if="$slots.subtitle" class="text-gray-400 text-md sm:text-lg">
                <slot name="subtitle" />
            </div>
        </div>

        <div class="text-md sm:text-lg text-gray-500 mt-4">
            <div class="text-gray-500 text-xl font-medium">
                <slot name="title" />
            </div>

            <div class="leading-loose text-md sm:px-2">
                <slot name="content" />
            </div>
        </div>
    </div>
</template>
