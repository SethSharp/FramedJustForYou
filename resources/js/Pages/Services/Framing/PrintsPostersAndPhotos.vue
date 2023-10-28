<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Original Artwork" />

    <PrimaryLayout>
        <Section>
            <template #header> Prints Posters and Photos </template>
            <template #content> </template>
        </Section>

        <Section>
            <template #header> Wedding Photos </template>
            <template #content> </template>
        </Section>
    </PrimaryLayout>
</template>
