<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import { Link } from '@inertiajs/vue3';

let showingNavigationDropdown = ref(false);


/* FRAMING
* Custom
* Memorabilia
* Mirror
* Jersey
* */


/* Other Services (In links)
(Not going to be a drop-down but going to go to a
grid of services with a dedicated page for each, maybe some grouping)
* Floating frames
* Canvas
* Custom Printing
* Fabric Framing
* Blank Canvases
* Fine art
* Needle works (other options)
* */

/* Canvas, also on links
* Canvases
* Stretching
* Photos on Canvas
* */

const links = [
    {
        // Include the team here
        name: "Home",
        href: "home"
    },
    {
        name: "Services",
        href: "team"
    },
    {
        name: "Canvas",
        href: "team"
    },
    {
        name: "Framing",
        href: "team",
        options: [
            {
                name: "Custom",
                href: "home",
            },
            {
                name: "Memorabilia",
                href: "home",
            },
            {
                name: "Mirror",
                href: "home",
            },
            {
                name: "Jersey",
                href: "home",
            }
        ]
    },
    {
        name: "Get in touch",
        href: "team"
    },
    {
        name: "Portfolio",
        href: "team"
    }
]
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav>
                <!-- Primary Navigation Menu -->
                <div class="px-4 sm:px-6 lg:px-8 bg-primary-600">
                    <div class="flex h-16 h-fit py-4">
                        <div class="flex h-fit w-full">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('home')">
                                    <ApplicationLogo
                                        class="block h-9 w-auto"
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex justify-end w-full">
                                <div
                                    v-for="link in links"
                                    class="animation duration-300 my-auto"
                                >
                                    <div v-if="! link.options">
                                        <NavLink :href="route(link.href)">
                                            {{ link.name }}
                                        </NavLink>
                                    </div>
                                    <div v-else>
                                        <Dropdown>
                                            <template #trigger>
                                                Framing
                                            </template>
                                            <template #content>
                                                <DropdownLink
                                                    v-for="item in link.options"
                                                    :href="route(item.href)">
                                                    {{ item.name }}
                                                </DropdownLink>
                                            </template>
                                        </Dropdown>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-black hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <div class="mx-10 mt-10 bg-gray-200 min-h-screen">
                    <slot />
                </div>
            </main>

            <footer class="bg-primary-500 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    Footer
                </div>
            </footer>
        </div>
    </div>
</template>
