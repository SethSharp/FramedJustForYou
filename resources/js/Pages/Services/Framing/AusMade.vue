<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Australian Made Framing Kits" />

    <PrimaryLayout>
        <Section>
            <template #header> Australian Made </template>
            <template #content>
                <div>
                    <p>
                        Experience the unmatched longevity of our frames, crafted exclusively with
                        Australian-sourced materials. By supporting local artisans and harnessing
                        the durability of native resources, we ensure that your frame becomes a
                        timeless keepsake, built to last a lifetime. Beyond aesthetics, choosing one
                        of our frames is an investment in quality and sustainability.
                    </p>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
