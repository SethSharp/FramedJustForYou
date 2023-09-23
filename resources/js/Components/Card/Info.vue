<script setup>
import SecondaryButton from "@/Components/Button/SecondaryButton.vue";

defineProps({
    location: String,
    href: String,
})
</script>

<template>
    <div class="rounded-xl bg-gray-300">
        <div class="text-2xl text-gray-600 font-bold p-6">
            <slot name="header" />
        </div>
        <div class="px-4">
            <slot />
        </div>
        <div class="w-3/4 pt-6 pb-4 justify-center flex mx-auto">
            <SecondaryButton
                class="hover:-translate-y-2 duration-600"
                :href="href"
            >
                {{ location }}
            </SecondaryButton>
        </div>
    </div>
</template>
