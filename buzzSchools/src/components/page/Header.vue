<template>
  <div>
      <div class="bg-slate-800 text-white px-[10rem] py-2">
          <div class="flex justify-between items-center">
              <div>
                  
                  <div @click="emit('ShowSearchModal')" class="shadow-md px-3 rounded py-1 text-slate-400" style="background-color:rgba(0,0,0,0.3)">
                      <input type="text" style="background-color:rgba(0,0,0,0.0)" class="border-none text-slate-400 outline-none transparent" placeholder="Search...">
                      <span class="las la-search"></span>
                  </div>
              </div>
              <div class="flex justify-between">
                  <div class="flex">
                     <div>
                         <span>
                             <i class="las la-mail"></i>
                         </span>
                         <span>buzzschools@gmail.com</span>
                     </div>
                  </div>
                  <div>
                      <span class="lab la-twitter"></span>
                      <span class="lab la-linkedin"></span>
                      <span class="lab la-facebook-f"></span>
                  </div>
              </div>
          </div>
      </div>
      <div class="bg-white py-4 drop-shadow-md px-[10rem]">
          <div class="flex items-center justify-between">
              <div>
                  <router-link :to="{name: 'Home'}">buzzschools</router-link>
              </div>
              <div class="flex space-x-6 text-lg">
                  
                  <router-link :to="{name: 'Home'}" class="hover:border-b-2 hover:border-orange-500" active-class="border-b-2 border-orange-500">
                      <div>Home</div>
                  </router-link>
                  <router-link :to="{name: 'About'}" class="hover:border-b-2 hover:border-orange-500" active-class="border-b-2 border-orange-500">
                      <div>About</div>
                  </router-link>
                  <router-link :to="{name: 'AllCourses'}" class="hover:border-b-2 hover:border-orange-500" active-class="border-b-2 border-orange-500">
                      <div>Courses</div>
                  </router-link>
                  <router-link :to="{name: 'Webinars'}" class="hover:border-b-2 hover:border-orange-500" active-class="border-b-2 border-orange-500">
                      <div>Webinars</div>
                  </router-link>
                  <div class="hover:border-b-2 transition-opacity hover:border-orange-500">
                      <h1><a href="">Blogs</a></h1>
                  </div>
              </div>
              <div class="flex items-center space-x-6">
                  <div class="relative top-2 mr-4 cursor-pointer">
                      <span class="las la-shopping-cart text-xl font-bold"></span>
                      <span class="bg-orange-500 text-white rounded-full absolute -right-3 -top-4 px-2">4</span>
                  </div>
                  <div class="divide-x divide-orange-300 rounded-l-md rounded-r-md bg-orange-500 space-x-3 px-4 py-2">
                      <router-link :to="{name: 'Login'}" class="text-white">Login</router-link>
                      <router-link :to="{name: 'Register'}" class="text-white pl-2">Register</router-link>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script setup>
const emits = defineEmits(['ShowSearchModal']);

</script>

<style>

</style>