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

        <ul class="bg-white p-4 shadow-md rounded-lg">
            <li v-for="car in cars" :key="car.id" class="border-b py-2">
                {{ car.make }} {{ car.model }} ({{ car.year }}) - {{ car.miles }} miles
            </li>
        </ul>
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
