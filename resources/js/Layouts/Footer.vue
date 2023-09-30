<script setup>
import * as SocialIcons from "@/Components/Icons/Social"
import OpeningHours from "@/Components/OpeningHours.vue";
import ContactDetails from "@/Components/ContactDetails.vue";

const socialLinks = [
    {
        name: "Instagram",
        link: "https://www.instagram.com/framedjust4u/",
        icon: "Instagram"
    },
    {
        name: "Facebook",
        link: "https://www.facebook.com/framedjustforyou/",
        icon: "Facebook"
    },
    {
        name: "Shopify",
        link: "https://www.facebook.com/framedjustforyou/",
        icon: "Shopify"
    }
]
</script>

<template>
    <footer class="bg-primary-600 p-6 text-white font-medium">
        <div class="grid grid-cols-1 sm:grid-cols-2 mx-5 sm:mx-10 space-y-4">
            <div class="grid grid-cols-2 sm:grid-cols-3">
                <div>
                    <h1 class="text-2xl"> General </h1>
                    <ul class="list-none list-inside text-lg text-gray-200 space-y-1">
                        <li> <a :href="route('home')"> Home </a></li>
                        <li> <a :href="route('about')"> About </a></li>
                        <li> <a :href="route('services')"> Art Studio </a></li>
                        <li> <a :href="route('portfolio')"> Portfolio </a></li>
                        <li> <a :href="route('find')"> Find Us </a></li>
                    </ul>
                </div>
                <div>
                    <h1 class="text-2xl"> Framing </h1>
                    <ul class="list-none list-inside text-lg text-gray-200 space-y-1">
                        <li> <a href="/custom-framing#custom">Custom</a> </li>
                        <li> <a href="/custom-framing#jersey">Jersey</a> </li>
                        <li> <a href="/custom-framing#memorabilia">Memorabilia</a> </li>
                        <li> <a href="/custom-framing#jig-saw">Jigsaw</a> </li>
                        <li> <a href="/custom-framing#mirror">Mirror</a> </li>
                    </ul>
                </div>
                <div>
                    <h1 class="text-2xl"> Printing </h1>
                    <ul class="list-none list-inside text-gray-200 space-y-1">
                    </ul>
                </div>
            </div>
            <div class="!text-gray-200 mx-auto flex-wrap sm:flex">
                <ContactDetails />
                <OpeningHours />
            </div>
        </div>
        <div>
            <div class="inline-flex w-full justify-center py-5">
                <div class="flex">
                    <div v-for="social in socialLinks">
                        <a :href="social.link">
                            <component
                                class="mx-1"
                                :is="SocialIcons[social.icon]"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 text-center text-gray-200 font-medium text-lg">
            © 2023 FramedJustForYou. All rights reserved.
        </div>
    </footer>
</template>
