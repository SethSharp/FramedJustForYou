<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    title: String,
    href: String,
    links: Array
})

const isActive = (link) => {
    if (link.link) {
        return window.location.href.includes(link.link)
    }

    return route().current(link.active)
}
</script>

<template>
    <div class="text-xl pl-6 flex-wrap">
        <Link :href="href" class="mt-4 font-bold">
            {{ title }}
        </Link>
        <ul class="ml-4 mt-2 list-inside">
            <li v-for="link in links" class="my-4">
                <Link
                    :href="link.href"
                    class="decoration-2 hover:underline hover:underline-offset-8"
                    :class="{'underline underline-offset-8 ' : isActive(link)}"
                >
                    {{ link.name  }}
                </Link>
            </li>
        </ul>
    </div>
</template>
