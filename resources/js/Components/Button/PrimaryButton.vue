<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    href: String
})
</script>
<template>
    <Link
        :href="href"
        class="inline-flex items-center px-4 py-2 bg-primary-600 border border-transparent rounded-md
               font-semibold text-sm text-white uppercase tracking-widest hover:bg-primary-700 focus:bg-primary-700
               active:bg-primary-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
    >
        <slot />
    </Link>
</template>
