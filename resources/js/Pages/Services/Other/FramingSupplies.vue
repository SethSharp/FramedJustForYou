<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Framing Supplies" />

    <PrimaryLayout>
        <Section>
            <template #header> Framing Supplies </template>
            <template #content>
                We offer many framing supplies for you to use in your own projects!
                <ul class="my-2 space-y-4 list-disc list-inside">
                    <li>Canvas off the role</li>
                    <li>Matboards</li>
                    <li>Glassing</li>
                    <li>Hanging Systems</li>
                </ul>
                <h1 class="mt-4 text-xl text-gray-700">Materials</h1>
                <div>
                    <p>
                        Explore our comprehensive selection of framing essentials, offering
                        mouldings by the length, matting by the sheet, and a variety of d-rings in
                        different sizes. Additionally, we provide screws and an array of framing
                        hardware, tapes, and backing boards available in both fomecore and MDF.
                        Complete your framing project with our assortment of wire, string, and
                        standbacks.
                    </p>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
