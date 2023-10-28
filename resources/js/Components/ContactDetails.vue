<script setup>
import {
    DevicePhoneMobileIcon,
    PhoneIcon,
    EnvelopeIcon,
} from "@heroicons/vue/20/solid/index.js";
</script>

<template>
    <div class="flex-wrap">
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
                <span class="my-auto text-sm md:text-lg"> framedjust4u@bigpond.com </span>
            </div>
        </div>
    </div>

</template>
