<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
</script>

<template>
    <Head title="Memorabilia" />

    <PrimaryLayout>
        <Section :back="route('services.framing')">
            <template #header>
                Memorabilia
            </template>
            <template #subtitle> Cherishing your memories in art work </template>
            <template #content>
                Aliqua tempor irure fugiat non aute officia Lorem nulla esse esse. Do labore ipsum dolore ullamco magna nostrud sit elit amet. Id id ut id voluptate laborum culpa veniam eiusmod. Magna sint minim voluptate labore ex anim qui ad nulla sit eiusmod. Anim excepteur cupidatat amet anim ipsum occaecat est cupidatat consequat elit nulla fugiat qui adipisicing.
            </template>
        </Section>
    </PrimaryLayout>
</template>
