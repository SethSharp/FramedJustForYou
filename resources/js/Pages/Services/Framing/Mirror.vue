<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Mirror" />

    <PrimaryLayout>
        <Section :back="route('services.framing')">
            <template #header> Mirror </template>
            <template #content> Photos on Bethany's phone I think... made to order</template>
        </Section>
    </PrimaryLayout>
</template>
