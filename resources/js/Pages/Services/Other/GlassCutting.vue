<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Components/Section.vue'
import IconTable from '@/Components/Card/IconTable.vue'

const glassingOptions = {
    title: '',
    columns: [
        '',
        '99% UV Protection',
        'Abrasion Resistance',
        'Anti-Reflective',
        'Anti-Static',
        'Non-Glare',
        'Shatter & Resistance safety',
    ],
    rows: ['Museum Glass', 'Conservation Clear', 'UltraVue UV70'],
    data: [
        [true, false, true, false, true, false],
        [true, false, false, false, false, false],
        [false, false, true, false, true, false],
    ],
}
</script>

<template>
    <Head title="Glass Cutting" />

    <PrimaryLayout>
        <Section>
            <template #header> Glass & Glass Cutting </template>

            <template #content>
                Many of us make the mistake of dropping a frame while moving or from our kids
                playing a bit too rough! Well we got you sorted, bring in your frame and we will fit
                it with some of our high quality glass options as mentioned above. We can provide a
                quote over the phone but make sure to visit us to check out the different kinds of
                glass up close.
            </template>
        </Section>

        <Section>
            <template #header> Glassing Options </template>
            <template #content>
                Glassing is a very important aspect of a frame, here is a list of some of the glass
                we provide and how they compare.

                <IconTable :data="glassingOptions" />
            </template>
        </Section>
    </PrimaryLayout>
</template>
