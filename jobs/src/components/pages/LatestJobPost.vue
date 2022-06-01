<template>
  <div class=" px-[6rem] py-[2rem] bg-white">
      <h1 class="text-3xl font-extrabold font-signika text-center">Latest Job <span class="text-blue-600">Post</span> </h1>
      <div class="w-[70%] mx-auto">
      <p class="text-center text-gray-500 mt-2">Explore Thousands of jobs here Lorem 
          ipsum dolor sit, amet consectetur adipisicing elit. Ad obcaecati cumque nihil!</p>
          <div class="flex items-center text-sm font-bold mt-4 justify-between border-b uppercase">
              <div class="border-b-2 text-blue-500   border-blue-400">
                <h1>All categories</h1>
              </div>
              <div>
                <h1>UI/UX</h1>
              </div>
              <div>
                <h1>Developers</h1>
              </div>
              <div>
                <h1>Marketing</h1>
              </div>
              <div>
                <h1>Marketing</h1>
              </div>
          </div>
          <div class="grid grid-cols-3 gap-3 py-4">
              <a href="" v-for="i in 8" :key="i">
                <div class="bg-white rounded-md shadow-md border px-2 py-2">
                  <h1 class="font-bold text-sm font-signika">Lead Product Manager</h1>
                  <div class="flex space-x-2 items-center">
                      <h1 class="text-blue-500 font-bold">$9000/<span class="text-xs">month</span></h1> 
                      <span>-</span> <span class="text-sm">Full Time</span>
                  </div>
                  <div class="flex space-x-2 mt-3">
                      <div class="">
                          <span class="rounded-full bg-purple-600 text-white px-2.5 py-1">
                              k
                          </span>
                      </div>
                      <div class="flex flex-col">
                          <h1 class="text-xs font-bold">Kaleb Industry west africa</h1>
                          <p class="text-xs text-gray-500">Usa Lagos nigeria</p>
                      </div>
                  </div>
                </div>
              </a>
          </div>
          <div class="flex items-center justify-center">
              <router-link :to="{name: 'Jobs'}" class="bg-purple-600 text-white px-6 py-2 shadow-md shadow-purple-300 rounded-md font-bold font-signika">Find More Jobs</router-link>
          </div>
      </div>
  </div>
</template>

<script setup>

</script>

<style>

</style>