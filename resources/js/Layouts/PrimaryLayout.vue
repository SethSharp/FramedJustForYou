<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);

const products = [
    {
        name: "Canvases",
        href: "product.canvas",
        active: "active.*"
    }
]

const framingOptions = [
    {
        name: "Custom Framing",
        href: "product.canvas",
        active: "active.*"
    },
    {
        name: "Memorabilia Framing",
        href: "product.canvas",
        active: "active.*"
    }
]

const links = [
    {
        name: "Home",
        href: "home"
    },
    {
        name: "The Team",
        href: "team"
    },
]
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav>
                <!-- Primary Navigation Menu -->
                <div class="px-4 sm:px-6 lg:px-8 bg-primary-600">
                    <div class="flex h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('home')">
                                    <ApplicationLogo
                                        class="block h-9 w-auto"
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <NavLink
                                    v-for="link in links"
                                    :href="route(link.href)"
                                    :active="route().current(link.href)"
                                    class="animation duration-300"
                                >
                                    {{ link.name }}
                                </NavLink>
                                <Dropdown>
                                    <template #trigger>
                                        <div class="cursor-pointer"> Products </div>
                                    </template>
                                    <template #content>
                                        <DropdownLink
                                            v-for="product in products"
                                            :active="route().current(product.href)"
                                            :href="route(product.href)">
                                            {{ product.name }}
                                        </DropdownLink>
                                    </template>
                                </Dropdown>

                                <Dropdown>
                                    <template #trigger>
                                        <div class="cursor-pointer"> Framing </div>
                                    </template>
                                    <template #content>
                                        <DropdownLink
                                            v-for="framing in framingOptions"
                                            :active="route().current(framing.href)"
                                            :href="route(framing.href)">
                                            {{ framing.name }}
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
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
