<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Layouts/Section.vue'
import Image from '@/Components/Image.vue'
import ListingCard from '@/Components/Card/ListingCard.vue'
</script>

<template>
    <Head title="Services" />

    <PrimaryLayout>
        <Section>
            <template #header> Art Studio for hire </template>
            <template #subtitle>
                <Image src="art-studio.jpeg" alt="Art Class in action" />
            </template>
            <template #content>
                <div>
                    <h1 class="text-2xl font-medium">Studio 122</h1>
                    <p>
                        Nestled at the rear of Framed Just For You, you'll discover a tranquil and
                        generously sized space. This inviting area is open to individuals or groups
                        interested in renting it for a day of creative works such as painting or
                        drawing.
                    </p>

                    <h1 class="text-2xl font-medium mt-6">Facilities</h1>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-x-4 gap-y-4 my-6">
                        <ListingCard title="Air Conditioning" />
                        <ListingCard title="Tables and chairs" />
                        <ListingCard title="Easels" />
                        <ListingCard title="Kitchen Facilities" />
                        <ListingCard title="Fridge" />
                        <ListingCard title="Microwave" />
                    </div>

                    <h1 class="text-2xl font-medium mt-6">Pricing & Enquiries</h1>
                    <p>
                        For enquires
                        <a
                            href="mailto:framedjust4u@gmail.com"
                            class="text-primary-600 font-medium"
                        >
                            framedjust4u@gmail.com
                        </a>
                        the prices are as below. If you plan to do this on a week to week basis then
                        the prices are <b> negotiable </b>.
                    </p>

                    <div class="grid md:grid-cols-3 gap-x-2 gap-y-2 my-6 mb-12">
                        <div class="p-4 rounded-lg shadow w-full text-center">
                            $160: Half the day
                        </div>

                        <div class="p-4 rounded-lg shadow w-full text-center">
                            $300: The whole day
                        </div>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
