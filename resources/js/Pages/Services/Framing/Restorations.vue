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

                <h1 class="text-2xl mt-5"> Our Process </h1>
                <ul class="mb-4 list-disc list-inside space-y-4 my-4">
                    <li> Step 1: Get into photoshop and make adjustments </li>
                    <li> Step 2: Print to correct size using our state of the art printing system </li>
                    <li> Step 3: Discover the look that you want to go for and put together the items </li>
                    <li> Step 4: Combine all pieces together using the new printed photo </li>
                    <li> Step 5: Hang Up in your home </li>
                </ul>
            </template>
        </Section>
    </PrimaryLayout>
</template>
