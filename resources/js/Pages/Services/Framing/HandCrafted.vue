<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Image from '@/Components/Image.vue'
</script>

<template>
    <Head title="Tapestries and Needlework" />

    <PrimaryLayout>
        <Section>
            <template #header> Hand Crafted artwork</template>
            <template #content>
                <div>
                    <div class="lg:flex mt-8 space-y-6">
                        <div class="sm:w-1/2 sm:w-full md:p-8">
                            Explore the enchanting world of handcrafted art that celebrates the
                            timeless tradition of
                            <b>cross-stitched, beaded art, tapestries, and needlework</b>. Immerse
                            yourself in the intricate details and delicate stitches that bring each
                            piece to life, showcasing the dedication and skill of the artisans
                            behind these creations. From the vibrant hues of meticulously
                            cross-stitched designs to the shimmering allure of beaded masterpieces,
                            our handcrafted art collection is a testament to the beauty of
                            traditional craftsmanship.
                        </div>
                        <div class="sm:w-1/2 sm:w-full my-auto">
                            <Image src="handcrafted/pressed.webp" class="w-3/4 mx-auto" />
                        </div>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
