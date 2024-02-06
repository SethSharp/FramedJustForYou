<script setup>
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Components/Section.vue'
</script>

<template>
    <PrimaryLayout>
        <Section>
            <template #header> Framed Just For You Sitemap</template>
            <template #subtitle>an easy place to see all available links</template>
            <template #content>
                <div>
                    <div>
                        <div class="grid lg:grid-cols-4 xl:grid-cols-4 gap-6">
                            <div>
                                <h1 class="text-lg font-bold">Main Pages</h1>

                                <ul class="list-inside ml-2">
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('home')"
                                        >
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('about')"
                                        >
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('faq')"
                                        >
                                            FAQ
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('contact')"
                                        >
                                            Find
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('locator')"
                                        >
                                            Locator
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- For /services/ parent route -->
                            <div>
                                <h1 class="text-lg font-bold">Custom Framing Services</h1>

                                <ul class="list-inside ml-2">
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.framing')"
                                            >Framing</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.printing')"
                                            >Printing</a
                                        >
                                    </li>
                                </ul>
                            </div>

                            <!-- For /services/framing/  -->
                            <div>
                                <h1 class="text-lg font-bold">Framing Services</h1>

                                <ul class="list-inside ml-2">
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.framing.acrylic')"
                                            >Acrylic Framing</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.framing.australian')"
                                            >Australian Made Framing Kits</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.framing.canvases')"
                                            >Canvases</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.framing.indigenous-art')"
                                            >Indigenous Art</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.framing.jigsaws')"
                                            >Jigsaws</a
                                        >
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h1 class="text-lg font-bold">More Framing Services</h1>

                                <ul class="list-inside ml-2">
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.framing.medals-memorabilia')"
                                            >Medals and Memorabilia</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.framing.mirror')"
                                            >Mirror</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.framing.original-artwork')"
                                            >Original Artwork</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="
                                                route('services.framing.prints-posters-and-photos')
                                            "
                                            >Prints, Posters, and Photos</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.framing.hand-crafted')"
                                            >Handcrafted</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.framing.restorations')"
                                            >Restorations</a
                                        >
                                    </li>
                                </ul>
                            </div>

                            <!-- For /services/other/ route -->
                            <div>
                                <h1 class="text-lg font-bold">Other Services</h1>

                                <ul class="list-inside ml-2">
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.other.glass-cutting')"
                                            >Glass Cutting</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.other.matboard-cutting')"
                                            >Matboard Cutting</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.other.ready-made')"
                                            >Ready Made</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-primary-600 hover:text-primary-400 font-medium"
                                            :href="route('services.other.framing-supplies')"
                                            >Framing Supplies</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
