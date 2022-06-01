<template>
  <div>
      <div class="bg-white rounded-lg w-[70%] mx-auto py-3 px-[2rem] shadow-md">
          <div class="flex md:flex-row flex-col items-center divide-x">
              <div class="flex items-center md:space-x-2 md:w-1/2">
                  <span class="las la-search"></span>
                  <input type="text" placeholder="Search for job position" class="outline-none w-full">
              </div>
              <div class="flex items-center pl-2 space-x-2 flex-auto">
                  <span class="las la-map-marker"></span>
                  <input type="text" placeholder="Search by location" class="outline-none w-full">
                  <div>
                    <button class="bg-orange-600 text-white rounded-md px-[2rem] py-2">Search</button>
                  </div>
              </div>
              
          </div>
      </div>
  </div>
</template>

<script setup>

</script>

<style>

</style>