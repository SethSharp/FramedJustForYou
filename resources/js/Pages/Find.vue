<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
</script>

<template>
    <Head title="Find us" />

    <PrimaryLayout>
        <Section>
            <template #header>
                <span> Where can you find us? </span>
            </template>
            <template #content>
                <div class="rounded-xl flex-wrap sm:flex bg-gray-200">
                    <div class="w-full sm:w-1/2 p-4">
                        <div>
                            <span> Location </span>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3524.8969669304674!2d153.38945268171742!3d-27.935803714305003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b91104badf99849%3A0x5081ce9cf421fff2!2sFramed%20Just%20for%20You!5e0!3m2!1sen!2sau!4v1695429359471!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
