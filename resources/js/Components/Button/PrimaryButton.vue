<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({
    href: String,
})
</script>
<template>
    <Link
        v-if="href"
        :href="href"
        class="items-center my-3 px-4 py-2 my-auto bg-primary-500 border rounded-md font-semibold text-sm text-white tracking-widest hover:bg-primary-600 transition ease-in-out duration-150"
    >
        <slot />
    </Link>
    <button
        v-else
        class="items-center my-3 px-4 py-2 my-auto bg-primary-500 border rounded-md font-semibold text-sm text-white tracking-widest hover:bg-primary-600 transition ease-in-out duration-150"
    >
        <slot />
    </button>
</template>
