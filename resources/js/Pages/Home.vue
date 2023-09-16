<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import TeamMember from "@/Components/Card/TeamMember.vue";
import Section from "@/Components/Section.vue";
import Carousel from "@/Components/Carousel.vue";

const teamMembers = [
    {
        name: "Dianne",
        position: "Founder",
        description: "Aliqua aute velit aliquip anim duis minim consectetur eiusmod minim pariatur ex irure. Nisi eiusmod ipsum consequat veniam dolor adipisicing Lorem voluptate. Dolore id consectetur consectetur ad. Ex velit aute ut amet aute enim culpa nulla. Ex et cillum enim. Esse minim aliqua laborum cupidatat esse do reprehenderit anim sunt sint elit eu quis laboris.",
        image: "/images/team/dianne-temp.jpeg",
        side: false
    },
    {
        name: "Karen",
        position: "Senior Framer",
        description: "Aliqua aute velit aliquip anim duis minim consectetur eiusmod minim pariatur ex irure. Nisi eiusmod ipsum consequat veniam dolor adipisicing Lorem voluptate. Dolore id consectetur consectetur ad. Ex velit aute ut amet aute enim culpa nulla. Ex et cillum enim. Esse minim aliqua laborum cupidatat esse do reprehenderit anim sunt sint elit eu quis laboris.",
        image: "/images/team/dianne-temp.jpeg",
        side: false
    },
    {
        name: "John",
        position: "Senior Framer",
        description: "Aliqua aute velit aliquip anim duis minim consectetur eiusmod minim pariatur ex irure. Nisi eiusmod ipsum consequat veniam dolor adipisicing Lorem voluptate. Dolore id consectetur consectetur ad. Ex velit aute ut amet aute enim culpa nulla. Ex et cillum enim. Esse minim aliqua laborum cupidatat esse do reprehenderit anim sunt sint elit eu quis laboris.",
        image: "/images/team/dianne-temp.jpeg",
        side: false
    },
    {
        name: "Bethany",
        position: "Junior Framer",
        description: "Aliqua aute velit aliquip anim duis minim consectetur eiusmod minim pariatur ex irure. Nisi eiusmod ipsum consequat veniam dolor adipisicing Lorem voluptate. Dolore id consectetur consectetur ad. Ex velit aute ut amet aute enim culpa nulla. Ex et cillum enim. Esse minim aliqua laborum cupidatat esse do reprehenderit anim sunt sint elit eu quis laboris.",
        image: "/images/team/dianne-temp.jpeg",
        side: false
    },
]
</script>

<template>
    <Head title="Home" />

    <PrimaryLayout>
        <div>
            <Carousel />
        </div>
        <div id="team-member">
            <Section>
                <template #header>
                    <span> Meet the Team!</span>
                </template>
                <template #content>
                    <TeamMember
                        v-for="teamMember in teamMembers"
                        v-bind="teamMember"
                        :test="true"
                    />
                </template>
            </Section>
        </div>
    </PrimaryLayout>
</template>
