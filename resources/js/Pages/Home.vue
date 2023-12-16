<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Contact from '@/Components/Card/Home/Contact.vue'
import MainPageCarousel from '@/Components/MainPageCarousel.vue'
</script>

<template>
    <Head title="Home" />

    <PrimaryLayout>
        <template #carousel>
            <div class="relative mt-0">
                <div class="absolute inset-0 bg-black/40 z-10"></div>

                <!-- Content to be placed above the carousel -->
                <div class="absolute sm:top-10 md:top-20 left-10 md:left-40 z-20 text-white p-4">
                    <h1 class="text-3xl sm:text-4xl md:text-6xl font-medium">
                        Framed Just For you
                    </h1>
                    <h2 class="text-left text-xl sm:text-2xl md:text-3xl text-gray-300">
                        60+ years of experience
                    </h2>
                </div>

                <MainPageCarousel />
            </div>
        </template>
        <div id="intro">
            <Section>
                <template #header>
                    <div class="mx-auto">
                        <span class="text-green-700 font-bold !text-4xl !sm:text-6xl"> Merry </span>
                        <span class="text-red-700 font-bold !text-4xl !sm:text-6xl">
                            Christmas
                        </span>
                    </div>
                </template>
                <template #content>
                    <div class="text-center">
                        Its that time of year again! The team at Framed Just For You Wish a very
                        Merry Christmas and a Happy New Year!

                        <br />
                        <br />

                        Our hours are changing over the christmas break so lock these in your memory
                        so you don't catch us on our days off!
                    </div>
                </template>
            </Section>
            <Section>
                <template #header>
                    <span> Your Custom Picture Framers! </span>
                </template>
                <template #subtitle>
                    <span> Locally owned and operated since 1997 </span>
                </template>
                <template #content>
                    <div class="my-6">
                        <h1 class="text-gray-500 text-2xl font-medium mb-3">Who are we?</h1>
                        <p>
                            At Framed Just For You, we are more than just a framing business; we are
                            a local institution with a passion for preserving your cherished
                            memories in the most beautiful and meaningful way. With over three
                            decades of experience, we have been the go-to destination for custom
                            framing on the Gold Coast. Our team is comprised of skilled artisans who
                            understand the value of your keepsakes, whether it's artwork,
                            photographs, needlework, or memorabilia. We take pride in our
                            craftsmanship and attention to detail, ensuring that each piece we frame
                            becomes a work of art in itself. As an Australian-based, family-owned
                            and operated business, we are deeply rooted in our community, and our
                            commitment to quality and customer satisfaction has remained unwavering
                            since day one.
                        </p>
                    </div>

                    <div class="my-6">
                        <h1 class="text-gray-500 text-2xl font-medium mb-3">
                            What are we up to now?
                        </h1>
                        <p>
                            In our ever-evolving journey, Framed Just For You continues to embrace
                            innovation and creativity in the world of custom framing. We understand
                            that art and design are constantly evolving, and we strive to stay at
                            the forefront of industry trends.
                        </p>
                    </div>

                    <div class="my-12 text-center justify-center">
                        <Contact />
                    </div>
                </template>
            </Section>
        </div>
    </PrimaryLayout>
</template>
