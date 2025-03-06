<template>
    <Navbar />
    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Bidders List</h1>

        <input
            type="text"
            v-model="searchQuery"
            @input="searchBidders"
            placeholder="Search bidders..."
            class="p-2 border rounded-md w-full mb-4"
        />

        <ul class="bg-white p-4 shadow-md rounded-lg">
            <li v-for="bidder in bidders" :key="bidder.id" class="border-b py-2">
                {{ bidder.first_name }} {{ bidder.last_name }} - {{ bidder.email }}
            </li>
        </ul>
    </div>
</template>

<script setup>
import Navbar from "../Components/navbar.vue";
import { ref, watchEffect } from "vue";
import { router } from "@inertiajs/vue3";

const props = defineProps({ bidders: Array, search: String });
const searchQuery = ref(props.search || "");

const searchBidders = () => {
    router.get("/bidders", { search: searchQuery.value }, { preserveState: true });
};
</script>
