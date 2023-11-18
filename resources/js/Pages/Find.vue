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
    <Head title="Find us" />

    <PrimaryLayout>
        <Section>
            <template #header>
                <span> Come see us today! </span>
            </template>
            <template #content>
                <div class="rounded-xl flex-wrap sm:flex bg-gray-200">
                    <div class="w-full p-4 grid sm:grid-cols-2">
                        <div>
                            <p class="text-gray-600">Want to get in contact?</p>
                            <ContactDetails />
                            <div class="flex">
                                <BuildingStorefrontIcon class="w-8 h-8 text-gray-400" />
                                <span class=" text-gray-500 font-bold"> Unit 1-2, 122 Brisbane Road, Labrador 4215 </span>
                            </div>
                        </div>
                        <div>
                            <p class="text-gray-600">Opening Hours</p>
                            <OpeningHours />
                        </div>
                    </div>
                    <div class="w-full">
                        <Map />
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
