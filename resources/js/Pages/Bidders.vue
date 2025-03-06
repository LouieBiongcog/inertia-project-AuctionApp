<script setup>
import Navbar from "../Components/navbar.vue";
import { ref, computed } from "vue";
import { router } from "@inertiajs/vue3";

const props = defineProps({ bidders: Array, search: String });
const searchQuery = ref(props.search || "");


const filteredBidders = computed(() => {
    if (!searchQuery.value) return props.bidders;
    return props.bidders.filter(bidder =>
        `${bidder.first_name} ${bidder.last_name} ${bidder.email}`
            .toLowerCase()
            .includes(searchQuery.value.toLowerCase())
    );
});


const searchBidders = () => {
    router.get("/bidders", { search: searchQuery.value }, { preserveState: true });
};
</script>

<template>
    <Navbar />
    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Bidders List</h1>

        <input
            type="text"
            v-model="searchQuery"
            placeholder="Search bidders..."
            class="p-2 border rounded-md w-full mb-4"
        />

        <table class="bg-white p-4 shadow-md rounded-lg w-full border-collapse">
            <thead>
                <tr class="border-b">
                    <th class="py-2 px-4 text-left">First Name</th>
                    <th class="py-2 px-4 text-left">Last Name</th>
                    <th class="py-2 px-4 text-left">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="bidder in filteredBidders" :key="bidder.id" class="border-b">
                    <td class="py-2 px-4">{{ bidder.first_name }}</td>
                    <td class="py-2 px-4">{{ bidder.last_name }}</td>
                    <td class="py-2 px-4">{{ bidder.email }}</td>
                </tr>
                <tr v-if="filteredBidders.length === 0">
                    <td colspan="3" class="py-2 px-4 text-center text-gray-500">No bidders found</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
