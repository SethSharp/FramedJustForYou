<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Ready Made" />

    <PrimaryLayout>
        <Section>
            <template #header> Ready Made Frames </template>
            <template #subtitle> Ready to hang </template>
            <template #content>
                canvas ready to paint, offset frame - take picture -> canvases already stretched
                ready to paint
                We can get your print that matches one of our ready made frames, take it out back and put it together with the frame and a piece of your chosen glass
                perfect for a cheaper alternativ for your common sized pieces yet still produces an amazing result
            </template>
        </Section>
    </PrimaryLayout>
</template>
