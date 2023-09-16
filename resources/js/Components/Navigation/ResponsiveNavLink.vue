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
        ? 'block w-full border-l-8 border-primary-500 hover:border-primary-300 transition duration-300 ease-in-out'
        : 'block w-full border-l-8 hover:border-primary-500 transition duration-300 ease-in-out'
);
</script>

<template>
    <div class="text-gray-600 text-xl px-4 my-0.5">
        <div v-if="! href">
            <span :class="classes" class="px-2">
                <slot />
            </span>
        </div>
        <div v-else>
            <Link :href="href" :class="classes" class="px-2">
                <slot />
            </Link>
        </div>
    </div>
</template>
