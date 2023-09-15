<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
</script>

<template>
    <Head title="Team" />

    <PrimaryLayout>
        <Transition
            enter-active-class="transition ease-out duration-200 transform"
            enter-class="opacity-0 translate-y-4"
            enter-to-class="opacity-100 translate-y-0"
            leave-active-class="transition ease-in duration-75 transform"
            leave-class="opacity-100 translate-y-0"
            leave-to-class="opacity-0 translate-y-4"
        >
            <div v-if="true">
                Howdy
            </div>
        </Transition>
    </PrimaryLayout>
</template>
