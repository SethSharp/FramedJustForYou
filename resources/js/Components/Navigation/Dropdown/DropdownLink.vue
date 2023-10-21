<script setup>
import { Link} from "@inertiajs/vue3";
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
        ? 'whitespace-nowrap block w-full px-2 py-1 border-l-8 border-primary-500 hover:border-primary-300 transition duration-300 ease-in-out'
        : 'whitespace-nowrap block w-full px-2 py-1 border-l-8 hover:border-primary-500 transition duration-300 ease-in-out'
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
