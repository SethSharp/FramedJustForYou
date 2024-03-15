<x-layouts.app>
    <x-section.section>
        <x-section.wrapper>
            {{ \Carbon\Carbon::now()->dayOfWeek  }}

            <div class="bg-gradient-to-br from-white to-gray-200 rounded p-4">
                <h1 class="text-4xl"> Contact Us Today </h1>

                <div class="flex gap-4 mt-6">
                    <div class="w-1/2">
                        <div class="p-8 bg-white rounded text-secondary-500">
                            <p class="text-secondary-400 text-md">
                                We would love to know about your enquiries
                            </p>

                            <div class="mt-4">
                                <h2 class="text-2xl"> Contact Information </h2>

                                <ul>
                                    <li class="flex">

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2">
                        <x-contact.map/>
                    </div>
                </div>
            </div>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
