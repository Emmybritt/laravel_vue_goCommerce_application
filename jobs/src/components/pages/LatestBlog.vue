<template>
  <div class="h-[30rem] px-[8rem]">
      <div class="flex justify-between space-x-3 px-6 mt-3">
          <div class="w-2/3">
            <h1 class="font-extrabold font-signika text-2xl">Our Latest Blogs</h1>
            <p class="text-sm font-medium text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores beatae earum vero. Repellendus, pariatur itaque. Ut, neque.</p>
            <div class="grid grid-cols-3 gap-2">
                <div v-for="i in 3" :key="i" class="rounded-md bg-white shadow-md mt-4">
                    <div class="flex items-center justify-center">
                        <img src="../../assets/icons/home-img.png" class="w-[9rem] h-[8rem]" alt="">
                    </div>
                    <div class="px-3 py-1">
                        <h1 class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio.</h1>
                        <p class="text-xs text-gray-500 mt-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus in nostrum officiis...</p>
                    </div>
                    <div class="pb-3">
                        <a href="" class="text-sm space-x-2 px-4 font-bold text-blue-500">
                        <span>Read more</span>
                        <span class="las la-arrow-right font-semibold"></span>
                    </a>
                    </div>
                    
                </div>
            </div>
          </div>
          <div class="w-1/3">
            <div class="ml-3">
                <h1 class="text-2xl font-extrabold font-signika">Popular Tips for you</h1>
                <div class="flex mt-4">
                    <div>
                        <h1 class="text-sm font-bold">Lorem ipsum dolor sit amet.</h1>
                        <p class="text-sm text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, odio!</p>
                    </div>
                    <div>
                        <img src="../../assets/icons/man.png" class="h-[4rem] w-[6rem]" alt="">
                    </div>
                </div>
                <div class="flex mt-4">
                    <div>
                        <h1 class="text-sm font-bold">Lorem ipsum dolor sit amet.</h1>
                        <p class="text-sm text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, odio!</p>
                    </div>
                    <div>
                        <img src="../../assets/icons/man.png" class="h-[4rem] w-[6rem]" alt="">
                    </div>
                </div>
                <div class="flex mt-4">
                    <div>
                        <h1 class="text-sm font-bold">Lorem ipsum dolor sit amet.</h1>
                        <p class="text-sm text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, odio!</p>
                    </div>
                    <div>
                        <img src="../../assets/icons/man.png" class="h-[4rem] w-[6rem]" alt="">
                    </div>
                </div>
                <div class="flex mt-4">
                    <div>
                        <h1 class="text-sm font-bold">Lorem ipsum dolor sit amet.</h1>
                        <p class="text-sm text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, odio!</p>
                    </div>
                    <div>
                        <img src="../../assets/icons/man.png" class="h-[4rem] w-[6rem]" alt="">
                    </div>
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