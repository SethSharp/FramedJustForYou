<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Australian Made Framing Kits" />

    <PrimaryLayout>
        <Section>
            <template #header> Australian Made Framing Kits </template>
            <template #content>
                You can display your precious memories in style with our extensive range of
                Australian-made frames. Framed Just For You even offers a season ranged of photo and
                poster frames made in-store at the Gold Coast. All frames are made from plantation
                timber, not mdf and our frames are supplied with acid-free foam-core backings.
            </template>
        </Section>
    </PrimaryLayout>
</template>
