<template>
  <div class="">
      <div class="bg-white shadow-md px-[8rem] py-[1.5rem] sticky top:0">
          <div class="flex justify-between">
              <div>
                  <router-link :to="{name: 'Index'}" class="font-signika text-xl font-bold">GoCommerce</router-link>
              </div>
              <div class="flex space-x-2">
                  <div>
                      <router-link class="border-purple-600 border-2 px-3 tracking-wide hover:bg-slate-500 hover:text-white hover:border-none hover:transition-transform py-2 text-gray-700 rounded-lg" :to="{name: 'Login'}">Log In</router-link>
                  </div>
                  <div>
                      <router-link class="bg-purple-600 px-3 tracking-wide hover:bg-purple-500 hover:text-purple-50 py-2 text-white rounded-lg" :to="{name: 'Register'}">Register</router-link>
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