<script setup>
import * as SocialIcons from "@/Components/Icons/Social"
import OpeningHours from "@/Components/OpeningHours.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

const navigation = {
    pages: [
        { name: 'Store', href: '#' },
        { name: 'Home', href: '#' },
        { name: 'About', href: '#' },
        { name: 'Art Studio', href: '#' },
        { name: 'Gallery', href: '#' },
        { name: 'Contact(Find us)', href: '#' },
    ],
    framing: [
        { name: 'Custom Services', href: '#' },
        { name: 'Jersey', href: '#' },
        { name: 'Jigsaw Puzzles', href: '#' },
        { name: 'Mirror', href: '#' },
        { name: 'Embroidery', href: '#' },
    ],
    generalServices: [
        { name: 'Printing on Canvas', href: '#' },
        { name: 'Photos on Canvas', href: '#' },
        { name: 'Custom made Canvases', href: '#' },
    ],
}

const social = [
    {
        name: 'Facebook',
        href: '#',
        icon: SocialIcons['Facebook'],
    },
    {
        name: 'Instagram',
        href: 'https://www.instagram.com/framedjust4u/',
        icon: SocialIcons['Instagram'],
    },
    {
        name: 'Shopify',
        href: 'https://www.facebook.com/framedjustforyou/',
        icon: SocialIcons['Shopify'],
    },
]
</script>

<template>
    <footer class="bg-primary-700">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:pt-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-8">
                    <ApplicationLogo />
                    <p class="text-md leading-6 text-gray-300">Framing all your needs on the Gold Coast since 1993</p>
                    <div class="flex space-x-6">
                        <a v-for="item in social" :key="item.name" :href="item.href" class="text-gray-500 hover:text-gray-400">
                            <span class="sr-only">{{ item.name }}</span>
                            <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                        </a>
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-16">
                        <div>
                            <h3 class="text-md font-semibold leading-6 text-white">Pages</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li v-for="item in navigation.pages" :key="item.name">
                                    <a :href="item.href" class="text-md leading-6 text-gray-300 hover:text-white">{{ item.name }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-md font-semibold leading-6 text-white">Framing</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li v-for="item in navigation.framing" :key="item.name">
                                    <a :href="item.href" class="text-md leading-6 text-gray-300 hover:text-white">{{ item.name }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-md font-semibold leading-6 text-white">Other</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li v-for="item in navigation.generalServices" :key="item.name">
                                    <a :href="item.href" class="text-md leading-6 text-gray-300 hover:text-white">{{ item.name }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:gap-8">
                        <div>
                            <h3 class="font-semibold leading-6 text-white">Hours</h3>
                            <div class="!text-gray-300 !text-sm">
                                <OpeningHours :icon="false" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24">
                <p class="text-xs leading-5 text-gray-400">&copy; 2023 FramedJustForYou, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>
</template>
