<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import GalleryCard from "@/Components/Gallery/GalleryCard.vue";

let galleryConfig = [
    {
        description: "This is a testing card for the gallery, testing its capabilities and overall design.",
        src: "/images/framing/flinders.png"
    }
]
</script>

<template>
    <Head title="Gallery" />

    <PrimaryLayout>
        Temporary (remove for production) -> Fully integrate with admin side of things
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <GalleryCard v-for="galleryItem in galleryConfig" v-bind="galleryItem"/>
        </div>
    </PrimaryLayout>
</template>
