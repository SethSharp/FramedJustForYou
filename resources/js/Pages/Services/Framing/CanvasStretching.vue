<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Canvas Stretching" />

    <PrimaryLayout>
        <Section>
            <template #header> Canvas Stretching </template>
            <template #content>
                <p>
                    Have your canvas's stretched on quality stretcher frames. All canvas's are hand
                    stretched using stainless steel staples. We give a full guarantee against
                    warping and sagging.
                </p>
                <p>
                    If you want an artwork or photograph on canvas stretched, make sure you know
                    what you are paying fo before you choose a framer.
                </p>
            </template>
        </Section>

        <Section>
            <template #header> Custom Artist Stretched Canvases </template>
            <template #content>
                <p>
                    Framed Just For You makes quality stretched canvases, using 100% Cotton, 12oz
                    triple primed canvas, quality timber and stainless steel staples.
                </p>
            </template>
        </Section>
    </PrimaryLayout>
</template>
