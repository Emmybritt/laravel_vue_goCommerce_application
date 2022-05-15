<script setup>
const props = defineProps({
    shouldShow: Boolean,
});

// defineEmits(['togglecontent1']);
</script>

<template>
  <div class="myBackground shadow-sm hidden sticky blur-[0.1px] top-0 md:block">
        <div class="grid grid-cols-4 px-4 py-[1.4rem]">
          <div>
              <NuxtLink to="/">Logo</NuxtLink>
          </div>
          <div class="col-span-2">
            <div class="flex space-x-6">
              <div>
                <h1 class="font-mediu text-blue-500 opacity-7">Categories</h1>
              </div>
              <div>
                <h1 class="font-mediu text-blue-500 opacity-7">Orders</h1>
              </div>
              <div class="">
                <h1 @mouseenter="shouldShow = !shouldShow" class="font-mediu text-blue-500 opacity-7">Resources</h1>
                <div v-if="shouldShow">
                   <div class="absolute h-15 w-15 top-10 rounded-bl-full bg-white p-4 rotate-45"></div>
                <div class="absolute text-gray-600 px-3 divide-y top-[3rem] py-4 bg-white rounded-md shadow-md w-[22rem]">
                  <div class="flex items-center py-2 group hover:ring-cyan-300">
                    <!-- <span class="las la-book text-2xl text-cyan-600"></span> -->
                    <div class="ml-2">
                      <h1 class="text-sm font-medium tracking-widest group-hover:text-indigo-500">Blogs</h1>
                      <p class="text-sm group-hover:text-indigo-500">Get the very best content to grow your business</p>
                    </div>
                  </div>
                  <div class="flex items-center py-1 group hover:ring-cyan-300">
                    <span class="las la-api text-2xl text-cyan-600"></span>
                    <div class="ml-2">
                      <h1 class="text-sm font-medium tracking-widest group-hover:text-indigo-500">Api</h1>
                      <p class="text-sm group-hover:text-indigo-500">Access markdown API's for developers</p>
                    </div>
                  </div>
                  <div class="flex items-center py-1 group hover:ring-cyan-300">
                    <!-- <span class="las la-book text-2xl text-cyan-600"></span> -->
                    <div class="ml-2">
                      <h1 class="text-sm font-medium tracking-widest group-hover:text-indigo-500">Online jobs</h1>
                      <p class="text-sm group-hover:text-indigo-500 leading-snug">Checkout for online jobs and avialable opportuinities</p>
                    </div>
                  </div>
                  <div class="flex items-center py-1 group hover:ring-cyan-300">
                    <!-- <span class="las la-book text-2xl text-cyan-600"></span> -->
                    <div class="ml-2">
                      <h1 class="text-sm font-medium tracking-widest group-hover:text-indigo-500">Online Business</h1>
                      <p class="text-sm group-hover:text-indigo-500">Checkout list of online business</p>
                    </div>
                  </div>
                  <div class="flex items-center py-1 group hover:ring-cyan-300">
                    <!-- <span class="las la-book text-2xl text-cyan-600"></span> -->
                    <div class="ml-2">
                      <h1 class="text-sm font-medium tracking-widest group-hover:text-indigo-500">Discord community</h1>
                      <p class="text-sm group-hover:text-indigo-500">Join our business discord group/community</p>
                    </div>
                  </div>
                  <div class="flex items-center py-1 group hover:ring-cyan-300">
                    <!-- <span class="las la-book text-2xl text-cyan-600"></span> -->
                    <div class="ml-2">
                      <h1 class="text-sm font-medium tracking-widest group-hover:text-indigo-500">Help center</h1>
                      <p class="text-sm group-hover:text-indigo-500">Have any issues report here</p>
                    </div>
                  </div>
                </div>
                </div>
               
              </div>
              <div>
                <h1 class="font-medium text-blue-500 opacity-7">Services</h1>
                
              </div>
              <div>
                <h1 class="font-medium text-blue-500 opacity-7">Contact</h1>
              </div>
              <div>
                <h1 class="font-medium text-blue-500 opacity-7">Pricing</h1>
              </div>
            </div>
          </div>
          <div>
              <div><span class="las la-search"></span></div>
          </div>
        </div>
      </div>
</template>



<style>

</style>