<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Layouts/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Original Artwork" />

    <PrimaryLayout>
        <Section>
            <template #header> Original Artwork </template>
            <template #content>
                <div>
                    <p>
                        Elevate the essence of original artwork by framing it with the utmost care
                        and precision. Original pieces embody the artist's unique vision and
                        craftsmanship, making it essential to showcase them in frames that
                        complement and protect their intrinsic value. Choosing a high-quality frame
                        and materials not only enhances the aesthetic appeal of the artwork but also
                        ensures its longevity. The right frame serves as a seamless extension of the
                        art, providing a sophisticated presentation that captures the viewer's
                        attention. Investing in a premium frame tailored to the specific needs of
                        the artwork not only preserves its beauty but also adds a layer of
                        sophistication, making the viewing experience truly exceptional.
                    </p>
                </div></template
            >
        </Section>
    </PrimaryLayout>
</template>
