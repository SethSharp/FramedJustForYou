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
    props.active
        ? 'decoration-primary-500 hover:decoration-primary-300'
        : 'hover:decoration-primary-500',
)
</script>

<template>
    <div class="text-gray-600">
        <div v-if="!href">
            <span :class="classes" class="px-2">
                <slot />
            </span>
        </div>
        <div v-else>
            <Link
                :href="href"
                :class="classes"
                class="block w-full px-2 transition duration-300 ease-in-out decoration-4 underline underline-offset-4 decoration-gray-300"
            >
                <slot />
            </Link>
        </div>
    </div>
</template>
