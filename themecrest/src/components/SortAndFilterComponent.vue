<template>
  <div class="font-source">
      <div class="px-2">
          <div class="flex py-2 items-center text-indigo-800 justify-between">
              <h1 class="font-signika font-bold">Sort & Filter</h1>
              <span class="las la-filter font-bold"></span>
          </div>
          <div class="mt-4">
              <input type="text" class="outline-none border rounded w-full px-3 py-2" placeholder="Search for an item...">
          </div>
          <div class="divide-y">
              <div class="py-2">
                  <h1 class="text-sm font-bold mt-2">Sort Items by name</h1>
                  <div class="flex space-y-2 mt-3 flex-col">
                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="" id="">
                    <h1>web templates</h1>
                </div>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="" id="">
                    <h1>animations</h1>
                </div>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="" id="">
                    <h1>Logo designs</h1>
                </div>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="" id="">
                    <h1>Web components</h1>
                </div>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="" id="">
                    <h1>Catoons</h1>
                </div>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="" id="">
                    <h1>Pics Art</h1>
                </div>
            </div>
              </div>
              <div class="py-2">
                  <h1 class="text-sm font-bold mt-2">Sort Items by Price</h1>
                  <div class="flex mt-3 flex-col">
                      <p>Choose a price range</p>
                      <b>$50</b>
                      <input type="range" name="" id="">
                  </div>
              </div>
              <div class="py-2">
                  <h1 class="text-sm font-bold mt-2">Sort Items by Date</h1>
                  <div class="flex mt-3 flex-col">
                      <p>Choose a Date</p>
                      <input type="datetime-local" class="outline-none border rounded w-full px-3 py-2" name="" id="">
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