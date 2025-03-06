<template>
    <nav class="bg-gray-800 p-4 text-white flex justify-between">
        <div class="text-lg font-bold">Auction App</div>
        <ul class="flex space-x-4">
            <li>
                <Link href="/" class="hover:underline">Home</Link>
            </li>
            <li>
                <Link href="/bidders" class="hover:underline">Bidders</Link>
            </li>
            <li>
                <Link href="/cars" class="hover:underline">Cars</Link>
            </li>
        </ul>
    </nav>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>
