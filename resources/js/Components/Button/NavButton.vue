<script setup>
const props = defineProps({
    href: String
})
const scrollToId = () => document.getElementById(props.href).scrollIntoView({ behavior: "smooth" })
</script>

<template>
    <button
        @click="scrollToId()"
        class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold
                text-xs text-gray-700 tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none transition ease-in-out duration-150"
    >
        <slot />
    </button>
</template>
