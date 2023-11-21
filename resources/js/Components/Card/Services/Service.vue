<script setup>
import {Link} from "@inertiajs/vue3";
defineProps({
    icon: Object,
    href: String,
    title: String,
    description: String,
})
</script>

<template>
    <Link class="p-4 rounded-md shadow hover:bg-gray-200 transition duration-200" :href="href">
        <div class="flex">
            <component :is="icon" class="w-8 h-8 mx-2" />
            <span class="my-auto"> {{ title }} </span>
        </div>
        <div class="mt-2" v-if="description">
            {{ description }}
        </div>
    </Link>
</template>
