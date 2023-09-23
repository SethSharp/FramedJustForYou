<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import * as TeamMemberCards from "@/Components/Card/Team";
import Section from "@/Components/Section.vue";
import Carousel from "@/Components/Carousel.vue";
import PrimaryButton from "@/Components/Button/PrimaryButton.vue";

const teamMembers = [
    {
        name: "Diane",
        position: "Founder",
        description: "Aliqua aute velit aliquip anim duis minim consectetur eiusmod minim pariatur ex irure. Nisi eiusmod ipsum consequat veniam dolor adipisicing Lorem voluptate. Dolore id consectetur consectetur ad. Ex velit aute ut amet aute enim culpa nulla. Ex et cillum enim. Esse minim aliqua laborum cupidatat esse do reprehenderit anim sunt sint elit eu quis laboris.",
        image: "/images/team/dianne-temp.jpeg",
        side: false,
        component: 'RightTeamMember'
    },
    {
        name: "Karen",
        position: "Senior Framer",
        description: "Aliqua aute velit aliquip anim duis minim consectetur eiusmod minim pariatur ex irure. Nisi eiusmod ipsum consequat veniam dolor adipisicing Lorem voluptate. Dolore id consectetur consectetur ad. Ex velit aute ut amet aute enim culpa nulla. Ex et cillum enim. Esse minim aliqua laborum cupidatat esse do reprehenderit anim sunt sint elit eu quis laboris.",
        image: "/images/team/dianne-temp.jpeg",
        side: false,
        component: 'LeftTeamMember'
    },
    {
        name: "John",
        position: "Senior Framer",
        description: "Aliqua aute velit aliquip anim duis minim consectetur eiusmod minim pariatur ex irure. Nisi eiusmod ipsum consequat veniam dolor adipisicing Lorem voluptate. Dolore id consectetur consectetur ad. Ex velit aute ut amet aute enim culpa nulla. Ex et cillum enim. Esse minim aliqua laborum cupidatat esse do reprehenderit anim sunt sint elit eu quis laboris.",
        image: "/images/team/dianne-temp.jpeg",
        side: false,
        component: 'RightTeamMember'
    },
    {
        name: "Bethany",
        position: "Junior Framer",
        description: "Aliqua aute velit aliquip anim duis minim consectetur eiusmod minim pariatur ex irure. Nisi eiusmod ipsum consequat veniam dolor adipisicing Lorem voluptate. Dolore id consectetur consectetur ad. Ex velit aute ut amet aute enim culpa nulla. Ex et cillum enim. Esse minim aliqua laborum cupidatat esse do reprehenderit anim sunt sint elit eu quis laboris.",
        image: "/images/team/dianne-temp.jpeg",
        side: false,
        component: 'LeftTeamMember'
    },
]
</script>

<template>
    <Head title="Home" />

    <PrimaryLayout>
        <div class="mb-20">
            <Carousel />
        </div>
        <div id="intro">
            <Section>
                <template #header>
                    <span> Your Custom Picture Framers! </span>
                </template>
                <template #subtitle>
                    <span> Locally owned and operated for 20+ years </span>
                </template>
                <template #content>
                    <div class="my-6">
                        <h1 class="text-gray-700 text-2xl font-medium mb-3"> Who are we? </h1>
                        <p>
                            Eu et sit aliqua. Ullamco officia nostrud adipisicing labore velit eu dolor eiusmod fugiat. Dolor amet veniam eiusmod proident enim. Excepteur magna ullamco mollit quis proident do do. Deserunt voluptate sunt dolor velit in qui adipisicing ullamco est id magna. Sint duis magna sint deserunt commodo ullamco tempor labore esse labore magna excepteur reprehenderit proident. Ad proident amet amet sit ex ipsum tempor reprehenderit esse commodo.

                            Ea est eiusmod incididunt Lorem culpa. Tempor officia ut non nulla enim ut labore et laboris voluptate. Commodo est ullamco sint incididunt do consequat. Id et enim in velit ullamco mollit proident cupidatat est. Dolore et non amet consequat cupidatat.
                        </p>
                    </div>

                    <div class="my-12 text-center justify-center">
                        <div class="bg-gray-200 rounded-xl py-6 sm:w-3/4 mx-auto px-6">
                            <h1 class="text-gray-700 text-2xl font-medium mb-3"> Lets turn your idea into reality! </h1>
                            <p class="mb-12">
                                We other many services and if we don't mention it here, we probably forgot to add it.
                                Don't hesitate to get in contact with us, take a further look at our services
                                or browse our online store for ready to hang frames.
                            </p>
                            <div class="flex-wrap sm:flex gap-x-2 w-full sm:w-3/4 justify-center mx-auto">
                                <PrimaryButton :href="route('find')">
                                    Contact Us
                                </PrimaryButton>
                                <PrimaryButton :href="route('find')">
                                    Online Store
                                </PrimaryButton>
                                <PrimaryButton :href="route('find')">
                                    Portfolio
                                </PrimaryButton>
                            </div>
                        </div>
                    </div>
                </template>
            </Section>
        </div>
        <div id="team-member">
            <Section>
                <template #header>
                    <span> Meet the Team!</span>
                </template>
                <template #content>
                    <component
                        v-for="teamMember in teamMembers"
                        v-bind="teamMember"
                        :test="true"
                        :is="TeamMemberCards[teamMember.component]"
                    />
                </template>
            </Section>
        </div>
    </PrimaryLayout>
</template>
