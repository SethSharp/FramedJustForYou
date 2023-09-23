<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import * as TeamMemberCards from "@/Components/Card/Team";
import Section from "@/Components/Section.vue";
import PrimaryButton from "@/Components/Button/PrimaryButton.vue";

const teamMembers = [
    {
        name: "Diane",
        position: "Director",
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
        <div id="intro">
            <Section>
                <template #header>
                    <span> FramedJust4You </span>
                </template>
                <template #subtitle>
                    <span> Nothing but passion </span>
                </template>
                <template #content>
                    <div class="my-6">
                        <h1 class="text-gray-700 text-2xl font-medium mb-3"> How did it all start? </h1>
                        <p>
                            Eu et sit aliqua. Ullamco officia nostrud adipisicing labore velit eu dolor eiusmod fugiat. Dolor amet veniam eiusmod proident enim. Excepteur magna ullamco mollit quis proident do do. Deserunt voluptate sunt dolor velit in qui adipisicing ullamco est id magna. Sint duis magna sint deserunt commodo ullamco tempor labore esse labore magna excepteur reprehenderit proident. Ad proident amet amet sit ex ipsum tempor reprehenderit esse commodo.

                            Ea est eiusmod incididunt Lorem culpa. Tempor officia ut non nulla enim ut labore et laboris voluptate. Commodo est ullamco sint incididunt do consequat. Id et enim in velit ullamco mollit proident cupidatat est. Dolore et non amet consequat cupidatat.
                        </p>
                    </div>
                </template>
            </Section>
        </div>
        <div id="team-member">
            <Section>
                <template #header>
                    <span> Meet the Team </span>
                </template>
                <template #subtitle>
                    <span> 40 years of experience! </span>
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
