<template>
  <div class="font-source">
      <div class="md:mx-12 mx-1 py-[3rem]">
              <h1 class="text-center font-bold text-4xl font-signika text-indigo-700 mb-4">Top categories</h1>
              <p class="text-center">new Themes are being posted by our teems every week. you can pick and select some best themes and website from our collection</p>
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4" data-aos="fade-up">
                <a href="" class="drop-shadow-md rounded-lg bg-white h-auto m-1 p-4">
                  <h3 class="text-2xl font-bold p-2 tracking-wide text-center capitalize">ecommerce templates</h3>
                  <p class="text-center text-sm">Beautiful ecomerce websites templates</p>
                  <div class="shrink-0 overflow-hidden h-16 mt-8">
                    <span class="ring ring-white rounded-full p-2 absolute ml-24 animate-pulse bottom-7 bg-gradient-to-br from-purple-900 via-purple-800 to-purple-500 text-white drop-shadow-sm  text-4xl"><i class="las la-shopping-cart"></i></span>
                    <img src="../../assets/ecommerce.png" alt="eCommerce templates" class="">
                  </div>
                </a>
                <router-link :to="{name: 'SingleProductCategory', query: {name: 'wordpress-themes'} }" class="drop-shadow-md rounded-lg bg-white h-auto m-1 p-4 flex flex-col justify-between">
                  <div>
                    <h3 class="text-2xl font-bold p-2 tracking-wide text-center capitalize">wordpress themes</h3>
                  <p class="text-center text-sm">Thousands of wordpress themes</p>
                  </div>
                  <div class="shrink-0 overflow-hidden h-16 mt-8">
                    <span class="ring ring-white rounded-full p-2 absolute ml-24 bottom-7 animate-pulse bg-gradient-to-br from-purple-900 via-cyan-600 to-indigo-900 text-white drop-shadow-sm  text-4xl"><i class="lab la-wordpress-simple"></i></span>
                    <img src="../../assets/web.png" alt="eCommerce templates" class="">
                  </div>
                </router-link>
                <a href="" class="drop-shadow-md rounded-lg bg-white h-auto m-1 p-4 flex flex-col justify-between">
                  <div>
                    <h3 class="text-2xl font-bold p-2 tracking-wide text-center">cms themes</h3>
                    <p class="text-center text-sm">Beautiful ecomerce websites templates</p>
                  </div>
                  <div class="shrink-0 overflow-hidden h-16 mt-8">
                    <span class="ring ring-white rounded-full p-2 absolute ml-24 bottom-7 animate-pulse bg-gradient-to-br from-teal-800 via-green-600 to-pink-900 text-white drop-shadow-sm  text-4xl"><i class="lab la-battle-net"></i></span>
                    <img src="../../assets/web3.png" alt="eCommerce templates" class="">
                  </div>
                </a>
                <a href="" class="drop-shadow-md rounded-lg bg-white h-auto m-1 p-4 flex flex-col justify-between">
                  <div>
                    <h3 class="text-2xl font-bold p-2 tracking-wide text-center">blogging</h3>
                    <p class="text-center text-sm">Beautiful ecomerce websites templates</p>
                  </div>
                  <div class="shrink-0 overflow-hidden h-16 mt-8">
                    <span class="ring ring-white rounded-full p-2 absolute ml-24 bottom-7 bg-gradient-to-br animate-pulse from-pink-900 via-green-700 to-orange-800 text-white drop-shadow-sm  text-4xl"><i class="lab la-blogger-b"></i></span>
                    <img src="../../assets/bg.png" alt="eCommerce templates" class="">
                  </div>
                </a>
              </div>
              <div class="flex justify-around mt-2 mb-3">
                <a href="" class="mt-3 bg-gradient-to-br my-5 from-violet-800 via-violet-700 to-violet-900 text-white rounded-md px-3 py-2 mb-7 mr-7">View All Categories&nbsp; <i class="las la-chevron-right"></i></a>
              </div>
            </div>
  </div>
</template>

<script setup>

</script>

<style>

</style>