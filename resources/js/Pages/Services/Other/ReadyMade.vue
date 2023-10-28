<script setup>
import { Head } from '@inertiajs/vue3';
import Section from "@/Components/Section.vue";
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
</script>

<template>
    <Head title="Ready Made" />

    <PrimaryLayout>
        <Section>
            <template #header> Ready Made Frames </template>
            <template #subtitle> Ready to hang </template>
            <template #content>
                // canvas ready to paint, offset frame - take picture -> canvases already stretched ready to paint
            </template>
        </Section>
    </PrimaryLayout>
</template>
