<script setup>
import { ArrowRightOnRectangleIcon } from '@heroicons/vue/20/solid/index.js'

defineProps({
    icon: {
        type: Boolean,
        default: true,
    },
})

let openingHoursConfig = [
    {
        day: 'Sunday',
        hours: 'Closed',
    },
    {
        day: 'Monday',
        hours: '8:30-5:00',
    },
    {
        day: 'Tuesday',
        hours: '8:30-5:00',
    },
    {
        day: 'Wednesday',
        hours: '8:30-5:00',
    },
    {
        day: 'Thursday',
        hours: '8:30-5:00',
    },
    {
        day: 'Friday',
        hours: '8:30-5:00',
    },
    {
        day: 'Saturday',
        hours: '9:00-4:00',
    },
]
</script>

<template>
    <div class="my-2">
        <div class="flex gap-x-2">
            <ArrowRightOnRectangleIcon v-if="icon" class="w-8 h-8 text-gray-400" />
            <div class="grid grid-cols-1">
                <div
                    v-for="day in openingHoursConfig"
                    :class="
                        openingHoursConfig[new Date().getDay()].day === day.day
                            ? 'font-bold text-lg'
                            : ''
                    "
                >
                    <span> {{ day.day }}: </span>
                    <span> {{ day.hours }} </span>
                </div>
            </div>
        </div>
    </div>
</template>
