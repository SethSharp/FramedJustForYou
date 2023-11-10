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
                <ul class="my-2 space-y-4 list-disc list-inside">
                    <li>Canvas off the role</li>
                    <li>Matboards cut to size</li>
                    <li>Framing Materials</li>
                </ul>
            </template>
        </Section>
    </PrimaryLayout>
</template>
