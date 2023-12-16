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
                    Its that time of year again! The team at Framed Just For You Wish you a very
                    Merry Christmas and a Happy New Year!
                    <br />
                    <br />
                    Our hours are changing over the Christmas break so lock these in your memory so
                    you don't catch us on our days off!
                </div>
            </div>

            <div></div>
        </template>
    </Section>
</template>
