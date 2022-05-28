<template>
<div class="hidden z-40 sticky top-0 lg:block">
  <div class="bg-white flex items-center px-[6rem] py-3 drop-shadow-sm ">
      <div class="w-[12rem]">
        <router-link :to="{name: 'Index'}" class="text-xl font-bold">
          <span class="text-xs">go</span><span class="text-indigo-600 font-oleo">Shopping</span>
        </router-link>
           
      </div>
      <div class="flex-auto">
        <div class="flex items-center justify-between">
          <div class="flex space-x-6">
          <div>
            <router-link :to="{name: 'Index'}" class="flex">
              <h1 class="font-medium text-gray-600 font-signika">Home</h1>
            </router-link>
          </div>
          <div>
            <div class="flex">
              <h1 class="font-medium text-gray-600 font-signika">About 
                <span class="las la-angle-down text-xs font-extrabold"></span>
              </h1>
            </div>
          </div>
          <div>
            <div class="flex group">
              <h1 class="font-medium text-gray-600 font-signika">Categories 
                <span class="las la-angle-down text-xs font-extrabold"></span>
              </h1>
                <div class="bg-red-400 hidden ml-4 group-hover:block h-4 w-4 rotate-45 top-[2.5rem] p-4 absolute"></div>
              <div class="bg-white hidden animate-fade-in-up group-hover:block rounded-md shadow-sm top-12 w-[35rem] -ml-6 px-4 py-3 absolute">
                <div class="flex space-x-2">
                  <div class="w-1/2 space-y-3 divide-y">
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/blog.png" alt="" class="h-5 w-5 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Blogs</h1>
                          <p class="text-xs font-roboto">Get the very best content to help grow your business.</p>
                        </div>
                      </div>
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/api.jpg" alt="" class="h-5 w-5 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Api</h1>
                          <p class="text-xs font-roboto">Developer option to get access to unlimited web api.</p>
                        </div>
                      </div>
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/job.jpg" alt="" class="h-5 w-5 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Online jobs</h1>
                          <p class="text-xs font-roboto">Millions of jobs are available here on this plartform.</p>
                        </div>
                      </div>
                  </div>
                  <div class="w-1/2 space-y-3 divide-y">
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/community.jpg" alt="" class="h-5 w-5 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Join community</h1>
                          <p class="text-xs font-roboto">Our community helps you grow your business to any level.</p>
                        </div>
                      </div>
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/school.png" alt="" class="h-5 w-5 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Buzschool.io</h1>
                          <p class="text-xs font-roboto">You can get unlimited courses here at buzschool to grow your carrier.</p>
                        </div>
                      </div>
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/bussiness.png" alt="" class="h-5 w-5 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Online Business</h1>
                          <p class="text-xs font-roboto">Checkout list of online business.</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div>
            <div class="flex">
              <h1 class="font-medium text-gray-600 font-signika">Services 
                <span class="las la-angle-down text-xs font-extrabold"></span>
              </h1>
            </div>
          </div>
          <div>
            <div class="flex group">
              <h1 class="font-medium text-gray-600 font-signika cursor-pointer">Resources
                <span class="las la-angle-down text-xs font-extrabold"></span>
              </h1>
                <div class="bg-red-400 hidden group-hover:block h-8 ml-4 w-8 rotate-45 top-[2.5rem] p-4 absolute"></div>
              <div style="animateDelay:3s" class="bg-white hidden animate-fade-in-up group-hover:block rounded-md shadow-sm top-12 w-[35rem] -ml-6 px-4 py-3 absolute">
                <div class="flex space-x-2">
                  <div class="w-1/2 space-y-3 divide-y">
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/blog.png" alt="" class="h-5 w-5 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Blogs</h1>
                          <p class="text-xs font-roboto">Get the very best content to help grow your business.</p>
                        </div>
                      </div>
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/api.jpg" alt="" class="h-5 w-5 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Api</h1>
                          <p class="text-xs font-roboto">Developer option to get access to unlimited web api.</p>
                        </div>
                      </div>
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/job.jpg" alt="" class="h-6 w-6 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Online jobs</h1>
                          <p class="text-xs font-roboto">Millions of jobs are available here on this plartform.</p>
                        </div>
                      </div>
                  </div>
                  <div class="w-1/2 space-y-3 divide-y">
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/community.jpg" alt="" class="h-5 w-5 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Join community</h1>
                          <p class="text-xs font-roboto">Our community helps you grow your business to any level.</p>
                        </div>
                      </div>
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/school.png" alt="" class="h-5 w-5 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Buzschool.io</h1>
                          <p class="text-xs font-roboto">You can get unlimited courses here at buzschool to grow your carrier.</p>
                        </div>
                      </div>
                      <div class="flex space-x-3">
                        <div>
                          <img src="../assets/icons/bussiness.png" alt="" class="h-5 w-5 mt-1">
                        </div>
                        <div>
                          <h1 class="text-sm font-source font-bold tracking-widest text-indigo-600">Online Business</h1>
                          <p class="text-xs font-roboto">Checkout list of online business.</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="flex">
              <h1 class="font-medium text-gray-600 font-signika">Contact</h1>
            </div>
          </div>
          <div>
            <div class="flex">
              <h1 class="font-medium text-gray-600 font-signika">Pricing</h1>
            </div>
          </div>
        </div>
          <div class="flex items-center space-x-3">
            <div class="relative">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="bg-red-500 rounded-full absolute px-1.5 -right-2 text-white font-medium text-xs -top-2.5">5</span>
            </div>
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            </div>
            <div style="text-indigo-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            </div>
            
            <!-- <span>En</span> -->
            
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