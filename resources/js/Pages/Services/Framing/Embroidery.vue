<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
</script>

<template>
    <Head title="Embroidery" />

    <PrimaryLayout>
        <Section :back="route('services.framing')">
            <template #header> Embroidery </template>
        </Section>
    </PrimaryLayout>
</template>
