<script setup>
defineProps({
    icon: Object,
    title: String,
    description: String,
})
</script>

<template>
    <a class="p-4 rounded-md shadow">
        <div class="flex">
            <component v-if="icon" :is="icon" class="w-8 h-8 mx-2" />
            <span class="my-auto"> {{ title }} </span>
        </div>
    </a>
</template>
