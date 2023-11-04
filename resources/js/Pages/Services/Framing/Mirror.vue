<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Mirror" />

    <PrimaryLayout>
        <Section>
            <template #header> Mirror </template>

            <template #content>
                Framing mirrors is something that can really transform your personal space and reflect your character.
                We can provide a upfront quote of the mirror itself.
            </template>
        </Section>
    </PrimaryLayout>
</template>
