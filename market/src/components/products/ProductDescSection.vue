<template>
<div class="bg-white shadow-md rounded relative  w-[75%] font-gray-600 px-6 py-3">
  <div class="flex text-gray-600 space-x-3">
      <div class="w-1/3 divide-y">
      <div class=" py-3">
          <div class="shrink-0 overflow-hidden">
            <img src="../../assets/cartimages/childrencloth.png" alt="" class="object-cover">
          </div>
          <div class="w-[100%] relative">
              <div class="flex flex-wrap space-x-3 items-center px-2 py-1">
                  <div class="ring-1 block ring-purple-300 rounded">
                      <img src="../../assets/cartimages/weddinggown.png" class="h-[3rem] w-[3rem] object-cover" alt="">
                  </div>
                  <div class=" rounded">
                      <img src="../../assets/cartimages/tv.png" class="h-[3rem] w-[3rem] object-cover" alt="">
                  </div>
                  <div class=" rounded">
                      <img src="../../assets/cartimages/childrencloth.png" class="h-[3rem] w-[3rem] object-cover" alt="">
                  </div>
                  <div class=" rounded">
                      <img src="../../assets/cartimages/videogame.png" class="h-[3rem] w-[3rem] object-cover" alt="">
                  </div>
                  <div class=" rounded">
                      <img src="../../assets/cartimages/wristwatch.png" class="h-[3rem] w-[3rem] object-cover" alt="">
                  </div>
                  <div class=" rounded">
                      <img src="../../assets/cartimages/childrencloth.png" class="h-[3rem] w-[3rem] object-cover" alt="">
                  </div>
                  <div class=" rounded">
                      <img src="../../assets/cartimages/childrencloth.png" class="h-[3rem] w-[3rem] object-cover" alt="">
                  </div>
              </div>              
          </div> 
      </div>
      <div>
          <h1 class="uppercase py-2">Share this product</h1>
          <div class="flex space-x-2">
              <div class="group">
                  <div class="rounded-full bg-purple-500  group-hover:bg-purple-600 px-2 py-1">
                    <span class="lab la-facebook-f text-white group-hover:text-white"></span>
                </div>
              </div>
              <div class="group">
                <div class="rounded-full group-hover:bg-purple-600 border px-2 py-1">
                    <span class="lab la-twitter group-hover:text-white"></span>
                </div>
              </div>
              <div class="group">
                <div class="rounded-full group-hover:bg-purple-600 border px-2 py-1">
                    <span class="lab la-whatsapp group-hover:text-white"></span>
                </div>
              </div>
              <div class="group">
              <div class="rounded-full group-hover:bg-purple-600 border px-2 py-1">
                <span class="lab la-instagram group-hover:text-white"></span>
              </div>
              </div>
          </div>
      </div>
             
      </div>
      <div class="w-2/3">
      <div class="flex justify-between items-center">
          <div class="w-[90%]">
              <h1 class="text-xl font-signika">{{ item }}</h1>
          </div>
          <div>
              <div class="rounded-full cursor-pointer hover:bg-orange-100 p-1.5 px-2">
                  <span class="lar la-heart text-2xl font-bold text-orange-600"></span>
              </div>
          </div>
      </div>
      <div>
          <h1>Brand: RKINC | <a href="" class="text-purple-600">Similar products from RKINC</a> </h1>
          
          <div class="divide-y">
            <!-- Star Rating here -->
            <div class="text-sm">
                <span class="las la-star text-orange-500"></span>
                <span class="las la-star text-orange-500"></span>
                <span class="las la-star text-orange-500"></span>
                <span class="las la-star text-orange-500"></span>
                <span class="las la-star text-gray-300"></span>
                <span class="las la-star text-gray-300"></span>
                <span>(4 verified ratings)</span>
            </div>
            <!-- Star Rating ends here -->
            <div class="py-2">
                <h1 class="text-2xl font-bold">₦ 5,999</h1>
                <div>
                    <div class="flex items-center space-x-3">
                        <h1><del> ₦ 10,832</del></h1>
                        <span class="bg-orange-100 px-2 rounded text-orange-500 font-thin">-45%</span>
                    </div>
                </div>
                <div>
                    <p class="text-xs mt-3">+ shipping from ₦ 180 to LEKKI-AJAH (SANGOTEDO)</p>
                </div>
                
            <div class="flex items-center bg-purple-500 uppercase font-bold mt-4 text-white shadow-md px-3 py-2 rounded">
                <div class="w-1/2">
                    <span class="las text-2xl la-shopping-cart"></span>
                </div>
                <div>
                    <span>Add To cart</span>
                </div>                
            </div>
            </div>
            <div class="mt-2 py-2" >
                <h1 class="uppercase font-bold">Promotions</h1>
                <div class="space-y-2 py-4">
                    <div class="space-x-2 flex items-center">
                        <span class="las la-hand-holding-heart text-xl text-purple-600"></span>
                        <span class="text-sm"><a href="" class="hover:text-purple-500 hover:underline">Free delivery on thousands of products in Lagos, Ibadan & Abuja</a> </span>
                    </div>
                    <div class="space-x-2 flex items-center">
                        <span class="las la-star bg-orange-400 text-xl text-white rounded-full"></span>
                        <span class="text-sm"><a href="" class="hover:text-purple-500 hover:underline">Free delivery on thousands of products in Lagos, Ibadan & Abuja</a> </span>
                    </div>
                    <div class="space-x-2 flex items-center">
                        <span class="las la-user-shield text-xl text-green-500"></span>
                        <span class="text-sm"><a href="" class="hover:text-purple-500 hover:underline">Borrow loans up to N200,000 to make everyday life easier. No collateral, no paperwork via GoCommerce financial partners.</a></span>
                    </div>
                </div>
            </div>
          </div>
          
      </div>
        
      </div>
  </div>
    <div class="absolute bottom-0 left-0 text-sm px-6 pb-3">
        <a href="" class="text-purple-600 hover:under-line">Report incorrect product information</a>   
    </div>
</div>
</template>

<script setup>
const props = defineProps({
    item: String
})



</script>

<style>

</style>