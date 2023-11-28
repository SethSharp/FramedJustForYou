<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({
    href: String,
})
</script>

<template>
    <button
        class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none transition ease-in-out duration-150"
    >
        <Link v-if="href" :href="href">
            <slot />
        </Link>
        <div>
            <slot />
        </div>
    </button>
</template>
