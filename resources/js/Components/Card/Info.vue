<script setup>
defineProps({
    location: String,
    href: String,
    border: String
})
</script>

<template>
    <div class="bg-gray-200 border border-4 sm:border-8" :class="'border-'+border">
        <div class="text-2xl text-gray-600 font-bold p-6">
            <slot name="header" />
        </div>
        <div class="px-4">
            <slot />
        </div>
        <div class="w-3/4 pt-6 pb-4 justify-center flex mx-auto">
            <slot name="button" />
        </div>
    </div>
</template>
