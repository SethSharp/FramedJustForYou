<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Components/Section.vue'
import { BuildingStorefrontIcon } from '@heroicons/vue/20/solid/index.js'
import OpeningHours from '@/Components/OpeningHours.vue'
import ContactDetails from '@/Components/ContactDetails.vue'
import Map from '@/Components/Map.vue'
</script>

<template>
    <Head title="Locator" />

    <PrimaryLayout>
        <Section>
            <template #header> Come see us today! </template>
            <template #subtitle> Conveniently located off of Brisbane road</template>
            <template #content>
                <div class="w-full">
                    <Map />
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
