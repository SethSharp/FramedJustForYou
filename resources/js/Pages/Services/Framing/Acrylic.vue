<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Acrylic" />

    <PrimaryLayout>
        <Section :back="route('services.framing')">
            <template #header> Acrylic </template>
            <template #content> </template>
        </Section>
    </PrimaryLayout>
</template>
