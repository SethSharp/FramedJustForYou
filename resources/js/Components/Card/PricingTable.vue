<script setup>
defineProps({
    data: Object,
})
</script>

<template>
    <div class="-mx-4 -my-2 mt-6 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <h1 class="ml-8 text-xl text-black"> {{ data.title }} </h1>
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <table class="min-w-full divide-y divide-gray-300">
                <thead>
                <tr>
                    <th v-for="heading in data.headings" scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                        {{ heading }}
                    </th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                <tr v-for="(row, rowIndex) in data.data" :key="rowIndex">
                    <td v-for="(cell, cellIndex) in row" :key="cellIndex"  class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ cell }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
