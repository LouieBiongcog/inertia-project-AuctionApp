<template>
    <Navbar />
    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Cars List</h1>

        <input
            type="text"
            v-model="searchQuery"
            @input="searchCars"
            placeholder="Search cars..."
            class="p-2 border rounded-md w-full mb-4"
        />

        <table class="bg-white p-4 shadow-md rounded-lg w-full border-collapse">
    <thead>
        <tr class="border-b">
            <th class="py-2 px-4 text-left">Make</th>
            <th class="py-2 px-4 text-left">Model</th>
            <th class="py-2 px-4 text-left">Year</th>
            <th class="py-2 px-4 text-left">Miles</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="car in cars" :key="car.id" class="border-b">
            <td class="py-2 px-4">{{ car.make }}</td>
            <td class="py-2 px-4">{{ car.model }}</td>
            <td class="py-2 px-4">{{ car.year }}</td>
            <td class="py-2 px-4">{{ car.miles }} miles</td>
        </tr>
    </tbody>
</table>

    </div>
</template>

<script setup>
import Navbar from "../Components/navbar.vue";
import { ref } from "vue";
import { router } from "@inertiajs/vue3";

const props = defineProps({ cars: Array, search: String });
const searchQuery = ref(props.search || "");

const searchCars = () => {
    router.get("/cars", { search: searchQuery.value }, { preserveState: true });
};
</script>
