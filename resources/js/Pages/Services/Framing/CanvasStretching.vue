<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Layouts/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Canvas Stretching" />

    <PrimaryLayout>
        <Section>
            <template #header> Canvas Stretching </template>
            <template #content>
                <div>
                    <p>
                        Have your canvases stretched on quality stretcher frames. All canvases are
                        hand-stretched using stainless steel staples, using 100% Cotton, 12oz triple
                        primed canvas, quality timber and stainless steel staples. We offer a full
                        guarantee against warping and sagging.
                    </p>
                    <br />
                    <p>
                        If you're considering having an artwork or photograph on canvas stretched,
                        it's essential to understand what you're paying for before choosing a
                        framer.
                    </p>

                    <div class="mt-4">
                        <p class="mt-2">
                            We also stock ready-made canvases, perfect for your painting projects.
                            If you require a specific size not in stock, we can arrange for a
                            custom-stretched canvas using our high-quality materials. These canvases
                            are ready to hang, allowing you to showcase your finished piece
                            instantly in your space.
                        </p>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
