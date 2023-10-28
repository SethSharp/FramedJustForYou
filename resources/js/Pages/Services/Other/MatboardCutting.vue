<script setup>
import { Head } from '@inertiajs/vue3'
import Image from '@/Components/Image.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Components/Section.vue'
</script>

<template>
    <Head title="Matboard Cutting" />

    <PrimaryLayout>
        <Section>
            <template #header> Matboard Cutting </template>

            <template #content>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                    <div class="my-auto">
                        <h1 class="font-bold">Computerised Matboard Cutter</h1>
                        Here we are ahead of the game using a computerised matboard cutter. This
                        allows us to cut and make just about any shape, any curve and do it with
                        precision. This is perfect for items requiring multiple items such as a
                        Gymnastic competition or a day out collecting cool leafs, we can map out the
                        layout and achieve an amazing layout.
                    </div>
                    <Image src="restorations/matboard-cutter.png" />
                </div>
                <div class="grid grid-cols-3 gap-x-4 mt-8">
                    <Image src="restorations/multiple-squares-and-circles.png" class="my-auto" />
                    <Image src="restorations/shape-red.png" />
                    <Image src="restorations/tools.png" class="my-auto" />
                </div>
            </template>
        </Section>
        <Section>
            <template #header> Just need a matboard? </template>

            <template #content>
                If you just need a new matboard that has gone all crusty over the years, then we can
                grab that and create a brand new one for you!
            </template>
        </Section>
    </PrimaryLayout>
</template>
