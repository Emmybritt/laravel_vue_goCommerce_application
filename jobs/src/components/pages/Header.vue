<template>
  <div class="bg-blue-50 px-[8rem] py-[1rem]">
      <div class="flex justify-between items-center">
          <div>
            <h1 class="font-bold font-signika ">Easy jobs</h1>
          </div>
          <div>
            <div class="flex space-x-6 text-gray-600 font-medium items-center">
                <div>
                    <router-link active-class="font-bold text-blue-600" :to="{name: 'Home'}">Home</router-link>
                </div>
                <div>
                    <router-link :to="{name: 'Home'}">Browse jobs</router-link>
                </div>
                <div>
                    <router-link :to="{name: 'Home'}">About Us</router-link>
                </div>
                <div>
                    <router-link :to="{name: 'Home'}">Post a job</router-link>
                </div>
                <div>
                    <router-link :to="{name: 'Home'}">Blogs</router-link>
                </div>
                
            </div>
          </div>
          <div>
            <div class="flex items-center space-x-4">
                <div>
                    <router-link :to="{name: 'Home'}">Sign In</router-link>
                </div>
                <div class="bg-blue-400 rounded-md font-bold text-sm px-3 py-2 shadow-blue-300 text-white shadow-md ">
                    <router-link :to="{name: 'Home'}">Create Account</router-link>
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