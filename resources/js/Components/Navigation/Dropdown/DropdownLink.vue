<script setup>
import { Link } from "@inertiajs/vue3";
import {computed} from "vue";

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
        default: false,
    },
});

const classes = computed(() =>
    props.active
        ? 'text-black block w-full text-lg inline-flex items-right px-4 py-1 underline decoration-white underline-offset-4 decoration-6 animation duration-300 ease-in-out'
        : 'text-black block w-full text-lg inline-flex items-right px-4 py-1 hover:underline decoration-gray-200 underline-offset-4 decoration-6 animation duration-300 ease-in-out'
);
</script>

<template>
    <Link
        :href="href"
        :active="active"
        :class="classes"
    >
        <slot />
    </Link>
</template>
