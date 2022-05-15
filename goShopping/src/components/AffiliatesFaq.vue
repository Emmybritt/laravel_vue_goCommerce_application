<template>
  <div class="bg-white py-9 font-source">
      <h1 class="text-3xl font-signika text-gray-700 text-center mb-4">Frequently Asked Questions</h1>
      <div class="flex justify-center items-center">
      <router-link class="font-bold flex items-center space-x-2 text-center text-2xl rounded-md bg-blue-500 text-white px-6 py-4" :to="{name: 'Faqs'}">
          <div>
              Click here to view all faqs
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
          </router-link>
    </div>
  </div>
</template>

<script setup>

</script>

<style>

</style>