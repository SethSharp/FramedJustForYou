<script>
import Section from '@/Components/Section.vue'

export default {
    name: 'ChristmasSection',
    components: { Section },
}
</script>

<template>
    <Section>
        <template #header>
            <div class="mx-auto flex space-x-2.5">
                <img src="images/holly.png" class="w-6 sm:w-14 h-6 sm:h-14 inset-0 ml-2.5" />
                <span class="text-green-700 font-bold !text-4xl !sm:text-6xl"> Merry </span>
                <span class="text-red-700 font-bold !text-4xl !sm:text-6xl"> Christmas! </span>
                <img src="images/holly.png" class="w-6 sm:w-14 h-6 sm:h-14 inset-0 ml-2.5" />
            </div>
        </template>
        <template #content>
            <div class="relative sm:w-3/4 mx-auto">
                <div class="text-center z-20 relative">
                    It's that joyous time of year again! The entire team at Framed Just For You
                    extends warm wishes for a Merry Christmas and a Happy New Year filled with love,
                    laughter, and unforgettable moments!
                    <br />
                    <br />
                    As the festive season unfolds, please be aware that our business hours are
                    undergoing a temporary change during the Christmas break. Kindly take note of
                    these adjustments to ensure you don't miss us on our well-deserved days off!
                </div>

                <hr class="mt-4" />

                <div class="text-center grid gap-y-4 mt-6">
                    <span> Closing Friday the 23rd @5pm </span>
                    Reopening on
                    <span> Wednesday 27th 9am-4pm </span>
                    <span> Thursday 28th 9am-4pm </span>
                    <span> Friday 29th 9am-4pm </span>
                    <span> Saturday 30th 9am-1pm </span>
                    <span> Close Sunday 31st </span>
                    <span> Reopening Tuesday 2nd January 2024! </span>
                </div>
            </div>
        </template>
    </Section>
</template>
