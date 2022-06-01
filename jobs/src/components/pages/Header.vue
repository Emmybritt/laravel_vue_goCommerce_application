<template>
  <div class="bg-blue-50 px-[8rem] py-[1rem]">
      <div class="flex justify-between items-center">
          <div>
            <router-link :to="{name: 'Home'}" class="font-bold font-signika ">Easy jobs</router-link>
          </div>
          <div>
            <div class="flex space-x-6 text-gray-600 font-medium items-center">
                <div>
                    <router-link active-class="font-bold text-blue-600" :to="{name: 'Home'}">Home</router-link>
                </div>
                <div>
                    <router-link active-class="font-bold text-blue-600" :to="{name: 'Jobs'}">Browse jobs</router-link>
                </div>
                <div>
                    <router-link active-class="font-bold text-blue-600" :to="{name: 'AboutUs'}">About Us</router-link>
                </div>
                <div>
                    <router-link active-class="font-bold text-blue-600" :to="{name: 'PostAJob'}">Post a job</router-link>
                </div>
                <div>
                    <a href="" active-class="font-bold text-blue-600">Blogs</a>
                </div>
                
            </div>
          </div>
          <div>
            <div class="flex items-center space-x-4">
                <div>
                    <router-link :to="{name: 'Login'}">Sign In</router-link>
                </div>
                <div class="bg-blue-400 rounded-md font-bold text-sm px-3 py-2 shadow-blue-300 text-white shadow-md ">
                    <router-link :to="{name: 'Register'}">Create Account</router-link>
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