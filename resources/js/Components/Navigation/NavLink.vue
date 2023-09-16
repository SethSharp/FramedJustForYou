<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'text-gray-200 text-lg inline-flex items-center px-1 pt-1 underline decoration-white underline-offset-4 decoration-6 animation duration-300 ease-in-out'
        : 'text-gray-200 text-lg inline-flex items-center px-1 pt-1 hover:underline decoration-gray-200 underline-offset-4 decoration-6 animation duration-300 ease-in-out'
);
</script>

<template>
    <div>
        <div v-if="! href">
            <span :class="classes">
                <slot />
            </span>
        </div>
        <div v-else>
            <Link :href="href" :class="classes">
                <slot />
            </Link>
        </div>
    </div>
</template>
