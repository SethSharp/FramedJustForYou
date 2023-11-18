<script setup>
import { DevicePhoneMobileIcon, PhoneIcon, EnvelopeIcon } from '@heroicons/vue/20/solid/index.js'
</script>

<template>
    <div class="flex-wrap">
        <div class="my-2">
            <div class="flex gap-x-2">
                <DevicePhoneMobileIcon class="w-8 h-8 text-gray-400" />
                <a href="tel:0412068330" class="font-bold"> 0412 068 330 </a>
            </div>
        </div>
        <div class="my-2">
            <div class="flex gap-x-2">
                <PhoneIcon class="w-8 h-8 text-gray-400" />
                <a href="tel:0755639799" class="font-bold"> 07 5563 9799 </a>
            </div>
        </div>
        <div class="my-2">
            <div class="flex gap-x-2">
                <EnvelopeIcon class="w-8 h-8 text-gray-400" />
                <a
                    href="mailto:framedjust4u@gmail.com"
                    class="my-auto text-sm md:text-lg font-bold"
                >
                    framedjust4u@bigpond.com
                </a>
            </div>
        </div>
    </div>
</template>
