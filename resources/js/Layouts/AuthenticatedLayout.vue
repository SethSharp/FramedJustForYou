<script setup>
import { ref } from 'vue'
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import NavLink from '@/Components/Navigation/NavLink.vue'
import ResponsiveNavLink from '@/Components/Navigation/ResponsiveNavLink.vue'
import { Link } from '@inertiajs/vue3'
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/20/solid/index.js'
import Footer from '@/Layouts/Footer.vue'
import Notification from '@/Components/Notification.vue'

let showingNavigationDropdown = ref(false)

const links = [
    {
        name: 'Dashboard',
        href: 'dashboard',
        active: 'dashboard',
    },
]
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-50">
            <nav>
                <div class="px-4 lg:px-8 bg-primary-600">
                    <div class="flex h-16 h-fit py-4">
                        <div class="hidden sm:flex flex h-fit w-full">
                            <div
                                class="hidden space-x-4 lg:space-x-8 sm:-my-px sm:ml-10 sm:flex w-full"
                            >
                                <div v-for="link in links" class="animation duration-300 my-auto">
                                    <NavLink
                                        :href="route(link.href)"
                                        :active="route().current(link.active)"
                                    >
                                        {{ link.name }}
                                    </NavLink>
                                </div>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 w-full flex justify-end sm:hidden">
                            <div class="w-1/2 my-auto flex justify-end">
                                <Bars3Icon
                                    v-if="!showingNavigationDropdown"
                                    @click="showingNavigationDropdown = !showingNavigationDropdown"
                                    class="w-16 h-16 text-white cursor-pointer transition duration-400 ease-in-out"
                                />
                                <XMarkIcon
                                    v-if="showingNavigationDropdown"
                                    @click="showingNavigationDropdown = !showingNavigationDropdown"
                                    class="w-12 h-12 text-white cursor-pointer transition duration-400 ease-in-out"
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{
                        block: showingNavigationDropdown,
                        hidden: !showingNavigationDropdown,
                    }"
                    class="lg:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <div v-for="link in links">
                            <div class="border-b-2">
                                <ResponsiveNavLink
                                    :href="route(link.href)"
                                    :active="route().current(link.active)"
                                >
                                    {{ link.name }}
                                </ResponsiveNavLink>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main>
                <div class="min-h-screen">
                    <div class="mx-8 mt-12 mb-8 h-20">
                        <div class="bg-white rounded-md w-full h-full flex items-center">
                            <div class="flex-grow ml-6 text-3xl font-medium">
                                <slot name="header" />
                            </div>
                            <div class="flex items-center space-x-4 mr-8">
                                <slot name="headerActions" />
                            </div>
                        </div>
                    </div>
                    <div class="mx-12">
                        <slot />
                    </div>
                </div>
            </main>
        </div>
    </div>

    <Notification :success="$page.props.success" :errors="$page.props.errors" />
</template>
