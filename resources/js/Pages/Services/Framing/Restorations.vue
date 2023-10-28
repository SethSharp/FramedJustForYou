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
                <Image src="fixes/fixed-1.png" alt="Fix image 1" />
            </template>
        </Section>

        <Section>
            <template #header> Our Process </template>
            <template #content>
                <p class="mb-4">Step 1....</p>
            </template>
        </Section>
    </PrimaryLayout>
</template>
