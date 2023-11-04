<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Image from "@/Components/Image.vue";
</script>

<template>
    <Head title="Prints, Posters and Photos" />

    <PrimaryLayout>
        <Section>
            <template #header> Prints Posters and Photos </template>
            <template #content>
                Anything on paper that you have we can put into a frame. Your cherished family photos, posters from your
                favourite movies we can help you select the perfect frame...

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-x-6 gap-y-6 my-8">
                    <Image src="prints-photos/picture-2.png" />
                    <Image src="prints-photos/picture-1.png" class="my-auto"/>
                    <Image src="prints-photos/poster-1.png" />
                </div>
            </template>
        </Section>

        <Section>
            <template #header> Wedding Photos </template>
            <template #content> Wedding Photos are a important piece of frame and we ensure... </template>
        </Section>
    </PrimaryLayout>
</template>
