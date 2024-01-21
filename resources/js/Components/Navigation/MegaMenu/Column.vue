<script setup>
import { Link } from '@inertiajs/vue3'
import { ChevronRightIcon } from '@heroicons/vue/20/solid/index.js'

defineProps({
    title: {
        type: String,
        default: null,
    },
    href: String,
    link: {
        type: String,
        default: null,
    },
    active: String,
    links: Array,
})

const isActive = (link) => {
    if (link.link) {
        return window.location.href.includes(link.link)
    }

    return route().current(link.active)
}
</script>

<template>
    <div class="text-md pl-3 flex-wrap text-gray-100 lg:text-black">
        <div v-if="title" class="font-bold flex">
            <Link
                v-if="href"
                :href="href"
                class="decoration-2 hover:underline underline-offset-4 flex"
                :class="{ '!underline': route().current(link) }"
            >
                {{ title }}
                <ChevronRightIcon class="w-7 h-7 my-auto" />
            </Link>
            <div v-else>
                {{ title }}
            </div>
        </div>
        <ul class="ml-2 mt-2 list-inside">
            <li v-for="link in links" class="my-4">
                <Link
                    :href="link.href"
                    class="decoration-2 lg:decoration-black underline-offset-4 hover:underline"
                    :class="{ '!underline': isActive(link) }"
                >
                    {{ link.name }}
                </Link>
            </li>
        </ul>
    </div>
</template>
