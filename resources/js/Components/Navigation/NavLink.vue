<script setup>
import { computed } from 'vue'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    href: {
        type: String,
    },
    active: {
        type: Boolean,
    },
})

const classes = computed(() =>
    props.active ? 'underline decoration-white' : 'hover:underline decoration-gray-200',
)
</script>

<template>
    <div
        class="text-gray-200 text-lg inline-flex items-center px-1 pt-1 decoration-6 underline-offset-4 transition duration-300 ease-in-out"
    >
        <div v-if="!href">
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
