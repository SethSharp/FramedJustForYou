<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Image from '@/Components/Image.vue'
</script>

<template>
    <Head title="Mirror" />

    <PrimaryLayout>
        <Section>
            <template #header> Restorations </template>
            <template #subtitle> Old frames and pictures needing some love? </template>
            <template #content>
                <p class="mb-4">
                    If you have a frame or picture that needs to well deserved tender loving care,
                    then we can provide that.
                </p>
                <Image src="restorations/reprint-and-frame.png" alt="Reprinted and framed photo" />
            </template>
        </Section>

        <Section>
            <template #header> Our Process </template>
            <template #content>
                <p class="mb-4">
                    Step 1: Get into photoshop and make adjustments,
                    Step 2: Print to correct size using our state of the art printing system
                    Step 3: Get together the framing items
                    Step 4: Put together
                    Step 5: Admire
                </p>
            </template>
        </Section>
    </PrimaryLayout>
</template>
