<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Framing Supplies" />

    <PrimaryLayout>
        <Section>
            <template #header> Framing Supplies </template>
            <template #content>
                We offer many framing supplies for you to use in your own projects!
            </template>
        </Section>

        <Section>
            <template #header> Canvas off the role </template>
            <template #content> </template>
        </Section>

        <Section>
            <template #header> Matboards cut to size </template>
            <template #content> </template>
        </Section>

        <Section>
            <template #header> Framing Materials </template>
            <template #content> </template>
        </Section>
    </PrimaryLayout>
</template>
