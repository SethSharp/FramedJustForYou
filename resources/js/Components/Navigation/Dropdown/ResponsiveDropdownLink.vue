<script setup>
import ResponsiveNavLink from "@/Components/Navigation/ResponsiveNavLink.vue";

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
    <ResponsiveNavLink
        :href="href"
        :active="active"
        class="!text-black block w-full text-left py-2 my-1"
    >
        <slot />
    </ResponsiveNavLink>
</template>
