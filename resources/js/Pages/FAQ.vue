<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Components/Section.vue'
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronUpIcon } from '@heroicons/vue/20/solid'
import PrimaryButton from "@/Components/Button/PrimaryButton.vue";

const faqs = [
    {
        title: 'How much does custom framing cost?',
        description: '...'
    },
    {
        title: 'Do you offer photo printing services?',
        description: '...'
    },
    {
        title: 'Can you cut glass, mirror, or plexiglass to size?',
        description: '...'
    },
    {
        title: 'Do you provide custom matboard cutting services?',
        description: '...'
    },
    {
        title: 'Can you modernize and reframe my old picture or frame?',
        description: '...'
    },
    {
        title: 'My picture frame\'s string has broken; can you replace it with a new wire?',
        description: '...'
    },
    {
        title: 'Do you have photo frames available for purchase?',
        description: '...'
    },
    {
        title: 'Can I buy gallery hanging systems from your store?',
        description: '...'
    },
    {
        title: 'What is a Giclee?',
        description: 'A Giclee (gee-clay) or a fine art digital print is a high resolution, high fidelity reproduction done ona special large format printer. Producing a high quality picture of a piece of art work',
        href: route('services.printing') + '#giclee'
    },
]
</script>

<template>
    <Head title="FAQ" />

    <PrimaryLayout>
        <Section>
            <template #header> FAQ </template>
            <template #content>
                <div class="w-full px-4">
                    <div class="mx-auto w-full rounded-2xl p-2">
                        <Disclosure v-slot="{ open }" v-for="faq in faqs">
                            <DisclosureButton
                                class="flex my-2 w-full justify-between rounded-lg bg-primary-100 px-4 py-2 text-left text-lg font-medium text-primary-900 hover:bg-primary-200"
                            >
                                <span>
                                    {{ faq.title }}
                                </span>
                                <ChevronUpIcon
                                    :class="open ? 'rotate-180 transform' : ''"
                                    class="h-7 w-7 text-primary-500"
                                />
                            </DisclosureButton>
                            <DisclosurePanel class="px-4 pt-4 pb-2 text-md text-gray-500">
                                <div>
                                    {{ faq.description }}
                                </div>
                                <PrimaryButton as="button" class="mt-4">
                                    Link to somewhere
                                </PrimaryButton>
                            </DisclosurePanel>
                        </Disclosure>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
