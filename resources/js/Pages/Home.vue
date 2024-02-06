<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Contact from '@/Components/Card/Home/Contact.vue'
import ContactDetails from '@/Components/ContactDetails.vue'
import { DevicePhoneMobileIcon, EnvelopeIcon, PhoneIcon } from '@heroicons/vue/20/solid/index.js'
</script>

<template>
    <Head title="Home" />

    <PrimaryLayout home>
        <div id="intro">
            <Section>
                <template #header>
                    <span> Your Custom Picture Framers! </span>
                </template>

                <template #content>
                    <div class="mt-8 w-full md:flex">
                        <div class="w-full md:w-1/2">
                            <div>
                                <h1 class="text-gray-500 !text-xl font-medium mb-3">Who are we?</h1>

                                <p>
                                    At Framed Just For You, we are more than just a framing
                                    business; we are a local institution with a passion for
                                    preserving your cherished memories in the most beautiful and
                                    meaningful way. With over three decades of experience, we have
                                    been the go-to destination for custom framing on the Gold Coast.
                                </p>
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 flex justify-center">
                            <div
                                class="w-3/4 mt-6 sm:mt-0 text-center overflow-hidden bg-gray-100 rounded-xl"
                            >
                                <div class="w-full bg-primary-600 text-white">
                                    Our Specialisations
                                </div>

                                <div class="text-left ml-8 font-bold py-4">
                                    <ol>
                                        <li class="my-2">Everything Custom Framing</li>

                                        <li class="my-2">Printing and Cannvases</li>

                                        <li class="my-2">Glass and Matboard Cutting</li>

                                        <li class="my-2">Supplies</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-6">
                        Our team is comprised of skilled artisans who understand the value of your
                        keepsakes, whether it's artwork, photographs, needlework, or memorabilia. We
                        take pride in our craftsmanship and attention to detail, ensuring that each
                        piece we frame becomes a work of art in itself. As an Australian-based,
                        family-owned and operated business, we are deeply rooted in our community,
                        and our commitment to quality and customer satisfaction has remained
                        unwavering since day one.
                    </div>

                    <div class="w-full gap-6 justify-center lg:flex">
                        <div class="w-full lg:w-1/2 flex justify-center">
                            <div
                                class="my-2 w-3/4 text-center overflow-hidden bg-gray-100 rounded-xl"
                            >
                                <div class="w-full bg-primary-600 text-white">Contact us</div>

                                <div>
                                    <div class="pl-6 py-4">
                                        <ContactDetails />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full lg:w-1/2 my-6">
                            <h1 class="text-gray-500 text-xl font-medium mb-3">
                                What are we up to now?
                            </h1>

                            <p>
                                In our ever-evolving journey, Framed Just For You continues to
                                embrace innovation and creativity in the world of custom framing. We
                                understand that art and design are constantly evolving, and we
                                strive to stay at the forefront of industry trends.
                            </p>
                        </div>
                    </div>

                    <div class="mt-24 text-center justify-center">
                        <Contact />
                    </div>
                </template>
            </Section>
        </div>
    </PrimaryLayout>
</template>
