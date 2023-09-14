<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'text-white text-2xl inline-flex items-center px-1 pt-1 underline decoration-primary-500 underline-offset-4 decoration-6 animation duration-300 ease-in-out'
        : 'text-white text-2xl inline-flex items-center px-1 pt-1 hover:underline decoration-primary-500 underline-offset-4 decoration-6 animation duration-300 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
