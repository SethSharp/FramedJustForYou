<script setup>
import NavLink from "@/Components/NavLink.vue";

defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <NavLink
        :href="href"
        :active="active"
        class="!text-black block w-full text-right text-md py-2"
    >
        <slot />
    </NavLink>
</template>
