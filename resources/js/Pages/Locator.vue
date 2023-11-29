<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Components/Section.vue'
import Map from '@/Components/Other/Map.vue'
</script>

<template>
    <Head title="Locator" />

    <PrimaryLayout>
        <Section>
            <template #header> Conveniently located off of Brisbane road! </template>
            <template #content>
                <div class="w-full">
                    <Map />
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
