<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
import {
    DevicePhoneMobileIcon,
    PhoneIcon,
    EnvelopeIcon,
    BuildingStorefrontIcon,
    ArrowRightOnRectangleIcon
} from "@heroicons/vue/20/solid/index.js";

let openingHoursConfig = [
    {
        day: "Monday",
        hours: "8:30-5:00"
    },
    {
        day: "Tuesday",
        hours: "8:30-5:00"
    },
    {
        day: "Wednesday",
        hours: "8:30-5:00"
    },
    {
        day: "Thursday",
        hours: "8:30-5:00"
    },
    {
        day: "Friday",
        hours: "8:30-5:00"
    },
    {
        day: "Saturday",
        hours: "9:00-4:00"
    },
    {
        day: "Sunday",
        hours: "Closed"
    }
]
</script>

<template>
    <Head title="Find us" />

    <PrimaryLayout>
        <Section>
            <template #header>
                <span> Come see us! </span>
            </template>
            <template #content>
                <div class="rounded-xl flex-wrap sm:flex bg-gray-200">
                    <div class="w-full p-4 flex-wrap md:flex">
                        <div class="w-full md:w-3/5">
                            <p class=" text-gray-600"> Want to get in contact? </p>
                            <div class="my-2">
                                <div class="flex gap-x-2">
                                    <DevicePhoneMobileIcon class="w-8 h-8" />
                                    <span> 0412 068 330 </span>
                                </div>
                            </div>
                            <div class="my-2">
                                <div class="flex gap-x-2">
                                    <PhoneIcon class="w-8 h-8" />
                                    <span> 07 5563 9799 </span>
                                </div>
                            </div>
                            <div class="my-2">
                                <div class="flex gap-x-2">
                                    <EnvelopeIcon class="w-8 h-8" />
                                    <span class="my-auto text-sm sm:text-xl"> framedjust4u@bigpond.com </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-2/5">
                            <p class=" text-gray-600"> Opening Hours </p>
                            <div class="my-2">
                                <div class="flex gap-x-2">
                                    <ArrowRightOnRectangleIcon class="w-8 h-8" />
                                    <div class="grid grid-cols-1">
                                        <div
                                            v-for="day in openingHoursConfig"
                                            :class="openingHoursConfig[new Date().getDay()-1].day === day.day ? 'font-bold' : ''"
                                        >
                                            <span> {{ day.day }}: </span>
                                            <span> {{ day.hours }} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-4">
                        <p class="text-gray-600"> Below you can find our conveniently located store: </p>
                        <div class="my-2">
                            <div class="flex gap-x-2">
                                <BuildingStorefrontIcon class="w-8 h-8" />
                                <span> Unit 1-2, 122 Brisbane Road, Labrador 4215 </span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3524.8969669304674!2d153.38945268171742!3d-27.935803714305003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b91104badf99849%3A0x5081ce9cf421fff2!2sFramed%20Just%20for%20You!5e0!3m2!1sen!2sau!4v1695429359471!5m2!1sen!2sau"
                            class="w-full"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
