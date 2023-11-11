<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Indigenous Art" />

    <PrimaryLayout>
        <Section>
            <template #header> Indigenous Art </template>
            <template #content>
                <div>
                    <p>
                        Immerse yourself in the rich cultural tapestry of Indigenous Australian art,
                        a captivating expression of the world's oldest living culture. Drawing
                        inspiration from the ancient Dreamtime stories and the diverse landscapes of
                        the continent, Indigenous Australian art encompasses a profound connection
                        to the land, its history, and the spiritual significance embedded in every
                        stroke. Vibrant dot paintings, intricate line work, and symbolic motifs
                        convey not only artistic brilliance but also narratives that reflect the
                        identity and wisdom of Indigenous communities.
                    </p>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
