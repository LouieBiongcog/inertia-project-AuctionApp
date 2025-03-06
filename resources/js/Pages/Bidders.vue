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

        <table class="bg-white p-4 shadow-md rounded-lg w-full border-collapse">
    <thead>
        <tr class="border-b">
            <th class="py-2 px-4 text-left">First Name</th>
            <th class="py-2 px-4 text-left">Last Name</th>
            <th class="py-2 px-4 text-left">Email</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="bidder in bidders" :key="bidder.id" class="border-b">
            <td class="py-2 px-4">{{ bidder.first_name }}</td>
            <td class="py-2 px-4">{{ bidder.last_name }}</td>
            <td class="py-2 px-4">{{ bidder.email }}</td>
        </tr>
    </tbody>
</table>

    </div>
</template>


