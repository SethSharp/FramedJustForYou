<script setup>
import { Head } from '@inertiajs/vue3';
import Section from "@/Components/Section.vue";
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
</script>

<template>
    <Head title="Australian Made Framing Kits" />

    <PrimaryLayout>
        <Section :back="route('services.framing')">
            <template #header> Australian Made Framing Kits </template>
            <template #content> </template>
        </Section>
    </PrimaryLayout>
</template>
