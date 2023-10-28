<script setup>
import { Link } from '@inertiajs/vue3'
import { ChevronRightIcon } from '@heroicons/vue/20/solid/index.js'

defineProps({
    title: String,
    href: String,
    links: Array,
})
</script>

<template>
    <div class="text-xl pl-6 flex-wrap">
        <Link v-if="title" :href="href" class="font-bold flex hover:underline underline-offset-2">
            {{ title }}
            <ChevronRightIcon class="w-7 h-7" />
        </Link>
        <ul class="ml-2 mt-2 list-inside">
            <li v-for="link in links" class="my-4">
                <Link
                    :href="link.href"
                    :active="link.href"
                    class="decoration-2 hover:underline hover:underline-offset-2"
                >
                    {{ link.name }}
                </Link>
            </li>
        </ul>
    </div>
</template>
