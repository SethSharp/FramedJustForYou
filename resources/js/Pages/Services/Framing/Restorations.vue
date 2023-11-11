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

                <h1 class="text-2xl mt-5">Our Process</h1>
                <ul class="mb-4 list-disc list-decimal list-inside space-y-4 my-8">
                    <li> Make a high quality copy of the photo </li>
                    <li> Move into photoshop and make necessary adjustments </li>
                    <li> Print to correct size using our state of the art printing system </li>
                    <li> Discover the look that you want to go for and put together the items </li>
                    <li> Combine all pieces together using the new printed photo </li>
                    <li> Hang Up!</li>
                </ul>
            </template>
        </Section>
    </PrimaryLayout>
</template>
