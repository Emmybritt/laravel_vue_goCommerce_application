<template>
  <div class="font-source">
      <div class="md:mx-12 mx-1">
              <h1 class="text-center font-signika font-bold text-4xl text-indigo-700 mb-4">Featured themes</h1>
              <p class="text-center">Checkout top listed websites and designs </p>
                <div class=" space-x-2 py-2 mb-4">
                  <div class="flex overflow-x-auto snap-x gap-3">
                      <a href="" v-for="i in 9" :key="i" class="scroll-ml-6">
                         <div class="flex flex-col shadow-md rounded-md w-[20rem] pb-3">
                          
                          <div class="h-56 bg-gray-50 relative">
                              <img src="../../assets/ecommerce.png" class="object-cover" alt="">
                                  <span class="lar text-violet-500 right-8 la-heart text-xl font-bold absolute"></span>
                          </div>
                          <div class="px-6">
                              <div class="flex pb-1">
                                  <h1 class="text-xs font-signika font-bold text-slate-700">Eduka responsive HTML Landing Page templates</h1>
                              </div>
                              <div>
                                  <p class="text-xs text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium iusto animi?...</p>
                              </div>
                              <div class="flex space-x-3 items-center">
                                  <h1 class="text-2xl text-violet-600 font-extrabold font-signika">$39.00</h1>
                                  <del class="text-sm text-slate-400 font-extrabold">$60.00</del>
                              </div>
                              <div class="text-xs">
                                  <span class="las la-star text-orange-500"></span>
                                  <span class="las la-star text-orange-500"></span>
                                  <span class="las la-star text-orange-500"></span>
                                  <span class="las la-star text-orange-500"></span>
                                  <span class="las la-star text-gray-200"></span>
                                  <span class="las la-star text-gray-200"></span>
                              </div>
                          </div>
                      </div> 
                      </a>
                  </div>
                  <div class="flex justify-around mt-2 mb-3">
                        <a href="" class="mt-3 bg-gradient-to-br my-5 from-violet-800 via-violet-700 to-violet-900 text-white rounded-md px-3 py-2 mb-7 mr-7">View All Featured Themes&nbsp; <i class="las la-chevron-right"></i></a>
                    </div>
                </div>
            </div>
  </div>
</template>

<script setup>

</script>

<style>

</style>