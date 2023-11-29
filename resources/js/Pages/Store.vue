<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Layouts/Section.vue'
</script>

<template>
    <Head title="Store" />

    <PrimaryLayout>
        <Section>
            <template #header> Coming soon... </template>
            <template #content>
                Our online store will become available soon, showing off all our in-store frames
                where you can easily purchase online and pick up in store. If you are interested in
                this send us a message so we know people are interested in a feature like this!
            </template>
        </Section>
    </PrimaryLayout>
</template>
