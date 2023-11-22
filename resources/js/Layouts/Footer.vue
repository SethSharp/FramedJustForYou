<script setup>
import { Link } from '@inertiajs/vue3'
import * as SocialIcons from '@/Components/Icons/Social'
import ApplicationLogo from '@/Components/ApplicationLogo.vue'

const navigation = {
    pages: [
        { name: 'Home', href: route('home') },
        { name: 'About', href: route('about') },
        { name: 'FAQ', href: route('faq') },
        { name: 'Art Studio', href: route('studio') },
        { name: 'Contact', href: route('contact') },
    ],
    customFraming1: [
        {
            name: 'Acrylic',
            href: route('services.framing.acrylic'),
            active: 'services.framing.acrylic',
        },
        {
            name: 'Australian Made',
            href: route('services.framing.australian'),
            active: 'services.framing.australian',
        },
        {
            name: 'Canvas Stretching',
            href: route('services.framing.canvases'),
        },
        {
            name: 'Indigenous Art',
            href: route('services.framing.indigenous-art'),
        },
        {
            name: 'Jigsaws',
            href: route('services.framing.jigsaws'),
        },
        {
            name: 'Medals & Memorabilia',
            href: route('services.framing.medals-memorabilia'),
        },
    ],
    customFraming2: [
        {
            name: 'Mirror',
            href: route('services.framing.mirror'),
        },
        {
            name: 'Original Artwork',
            href: route('services.framing.original-artwork'),
        },
        {
            name: 'Prints, Posters & Photos',
            href: route('services.framing.prints-posters-and-photos'),
        },
        {
            name: 'Hand Crafted Artwork',
            href: route('services.framing.hand-crafted'),
        },
        {
            name: 'Restorations',
            href: route('services.framing.restorations'),
        },
    ],
    printing: [
        { name: 'Photos on Canvas', href: route('services.printing') + '#photos-on-canvases' },
        { name: 'Printing on Demand', href: route('services.printing') + '#printing-on-canvases' },
    ],
}

const social = [
    {
        name: 'Instagram',
        href: 'https://www.instagram.com/framedjust4u/',
        icon: SocialIcons['Instagram'],
    },
    {
        name: 'Facebook',
        href: 'https://www.facebook.com/framedjustforyou/',
        icon: SocialIcons['Facebook'],
    },
]
</script>

<template>
    <footer class="bg-primary-700">
        <div class="lg:flex w-full">
            <div class="sm:w-2/5 lg:my-auto ml-16">
                <div class="pt-8 lg:pt-0">
                    <Link :href="route('home')">
                        <ApplicationLogo class="w-3/4" />
                    </Link>
                </div>
                <div class="mt-4">
                    <p class="text-md leading-6 text-gray-300">
                        Framing all your needs on the Gold Coast since 1997
                    </p>
                    <div class="flex space-x-6 mt-4">
                        <a
                            v-for="item in social"
                            :key="item.name"
                            :href="item.href"
                            :aria-label="item.name"
                            class="text-gray-500 hover:text-gray-400"
                        >
                            <span class="sr-only">{{ item.name }}</span>
                            <component :is="item.icon" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:w-3/5 text-sm">
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-x-4 gap-y-6 mx-4 py-12">
                    <div>
                        <h1 class="text-md font-semibold leading-6 text-white">Pages</h1>
                        <ul role="list" class="mt-6 space-y-4">
                            <li v-for="item in navigation.pages" :key="item.name">
                                <Link
                                    :href="item.href"
                                    :aria-label="item.name"
                                    class="text-md leading-6 text-gray-300 hover:text-white"
                                >
                                    {{ item.name }}
                                </Link>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h1 class="text-md font-semibold leading-6 text-white">Services</h1>
                        <ul role="list" class="mt-6 space-y-4">
                            <li v-for="item in navigation.customFraming1" :key="item.name">
                                <Link
                                    :href="item.href"
                                    :aria-label="item.name"
                                    class="text-md leading-6 text-gray-300 hover:text-white"
                                >
                                    {{ item.name }}
                                </Link>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul role="list" class="mt-12 space-y-4">
                            <li v-for="item in navigation.customFraming2" :key="item.name">
                                <Link
                                    :href="item.href"
                                    :aria-label="item.name"
                                    class="text-md leading-6 text-gray-300 hover:text-white"
                                >
                                    {{ item.name }}
                                </Link>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h1 class="text-md font-semibold leading-6 text-white">Printing</h1>
                        <ul role="list" class="mt-6 space-y-4">
                            <li v-for="item in navigation.printing" :key="item.name">
                                <Link
                                    :href="item.href"
                                    :aria-label="item.name"
                                    class="text-md leading-6 text-gray-300 hover:text-white"
                                >
                                    {{ item.name }}
                                </Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 border-t border-white/10 flex p-12">
            <div class="flex justify-start items-center">
                <p class="text-xs leading-5 text-gray-200">
                    &copy; 2023 FramedJustForYou. All rights reserved.
                </p>
            </div>
            <div></div>
        </div>
    </footer>
</template>
