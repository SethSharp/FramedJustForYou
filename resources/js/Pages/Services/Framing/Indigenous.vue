<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Image from '@/Components/Image.vue'
</script>

<template>
    <Head title="Indigenous Art" />

    <PrimaryLayout>
        <Section>
            <template #header> Indigenous Art </template>
            <template #content>
                <div class="sm:flex mt-8">
                    <div class="sm:w-1/2 my-auto">
                        Immerse yourself in the rich cultural tapestry of Indigenous Australian art,
                        a captivating expression of the world's oldest living culture. Drawing
                        inspiration from the ancient Dreamtime stories and the diverse landscapes of
                        the continent. For every piece we find its perfect match, a frame
                        meticulously chosen to enhance its beauty. Visit us to see how our love for
                        framing transforms pictures into timeless masterpieces.
                    </div>
                    <div class="w-1/2 my-2 sm:w-2/5 mx-auto">
                        <Image src="Indigenous/indigenous.webp" alt="Indigenous print" />
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
