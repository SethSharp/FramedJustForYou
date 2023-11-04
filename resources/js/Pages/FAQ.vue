<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Components/Section.vue'
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { PlusIcon, MinusIcon } from '@heroicons/vue/20/solid'
import PrimaryButton from '@/Components/Button/PrimaryButton.vue'

const faqs = [
    {
        title: 'How much does custom framing cost?',
        description: 'Custom Framing isn\'t what everyone expects, it can become pricey depending on the size of your item. But custom framing isn\'t about the money, it\'s about turning your piece into something amazing and giving it the love it deserves.',
        href: route('services.framing'),
        button: 'Custom framing here'
    },
    {
        title: 'Do you offer photo printing services?',
        description: '...',
        href: route('services.printing'),
        button: 'Printing services here'
    },
    {
        title: 'Can you cut glass, mirror, or plexiglass to size?',
        description: '...',
        href: route('services.other.glass-cutting'),
        button: 'Glass cutting here'
    },
    {
        title: 'Do you provide custom matboard cutting services?',
        description: '...',
        href: route('services.other.matboard-cutting'),
        button: 'Matboard cutting here'
    },
    {
        title: 'Can you modernize and reframe my old picture or frame?',
        description: '...',
        href: route('services.framing.restorations'),
        button: 'Modernise or fix here'
    },
    {
        title: "My picture frame's string has broken; can you replace it with a new wire?",
        description: '...',
        href: route('services.other.framing-supplies'),
        button: 'Framing supplies here'
    },
    {
        title: 'Do you have photo frames available for purchase?',
        description: '...',
        href: route('services.other.ready-made'),
        button: 'Ready made frames here'
    },
    {
        title: 'Can I buy gallery hanging systems from your store?',
        description: '...',
    },
    {
        title: 'What is a Giclee?',
        description:
            'A Giclee (gee-clay) or a fine art digital print is a high resolution, high fidelity reproduction done ona special large format printer. Producing a high quality picture of a piece of art work',
        href: route('services.printing') + '#giclee',
        button: 'See more here'
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
                    We get asked numerous questions about framing everyday and these are the most common and helpful ones
                    that could answer your queries. If not, call us up or come in store for a friendly chat!
                    <div class="mx-auto w-full rounded-2xl p-2">
                        <Disclosure v-slot="{ open }" v-for="faq in faqs">
                            <DisclosureButton
                                class="flex my-2 w-full justify-between rounded-lg bg-primary-100 px-4 py-2 text-left text-lg font-medium text-primary-900 hover:bg-primary-200"
                            >
                                <span>
                                    {{ faq.title }}
                                </span>
                                <PlusIcon
                                    v-if="!open"
                                    class="h-7 w-7 text-primary-500"
                                />
                                <MinusIcon
                                    v-if="open"
                                    class="h-7 w-7 text-primary-500"
                                />
                            </DisclosureButton>
                            <DisclosurePanel class="px-4 pt-4 pb-2 text-md text-gray-500">
                                <div>
                                    {{ faq.description }}
                                </div>
                                <PrimaryButton as="button" :href="faq?.href" class="mt-4">
                                    {{ faq.button ? faq.button : 'Click here'}}
                                </PrimaryButton>
                            </DisclosurePanel>
                        </Disclosure>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
