<template>
  <div class="bg-pink-50 px-[6rem] pb-4">
      <!-- BreadCrum starts here -->
      <div class="flex items-center py-[1rem] text-sm space-x-1">
          <span><a href="">Home</a></span>
          <span class="las la-angle-right text-xs"></span>
          <span>Phone & tablets</span>
          <span class="las la-angle-right text-xs"></span>
          <span>Phone & tablets</span>
          <span class="las la-angle-right text-xs"></span>
          <span>Blutooth Accessories</span>
          <span class="las la-angle-right text-xs"></span>
          <span>{{route.query.item}}</span>
      </div>
      <!-- BreadCrums end here -->
      <div>
          <div class="flex space-x-4">
              
                  <ProductDescSection :item="route.query.item"/>
                  
              <div class="flex flex-col space-y-2 w-[25%] flex-auto">
                  <div class="bg-white shadow-md rounded py-3">
                  <div class="divide-y py-2">
                      <div class="px-2 py-2">
                        <h1 class="font-signika font-medium uppercase">Delivery & Returns</h1>
                     </div>
                     <div class="px-2 py-1">
                         <p class="text-xs">Free delivery on thousands of products in Lagos, Ibadan & Abuja Details</p>
                     </div>
                     <div class="px-2 py-1">
                         <h1 class="font-medium">Choose your loacation</h1>
                         <div class="flex flex-col space-y-2 mt-3">
                             <div>
                                 <select name="" id="" class="w-full px-2 outline-none py-2 rounded-md focus:border-purple-400 border border-gray-200">
                                     <option value="">Lagos</option>
                                     <option value="">Ibadan</option>
                                     <option value="">Lagos</option>
                                     <option value="">Lagos</option>
                                     <option value="">Lagos</option>
                                     <option value="">Lagos</option>
                                 </select>
                             </div>
                             <div>
                                 <select name="" id="" class="w-full px-2 py-2 outline-none rounded-md focus:border-purple-400 border border-gray-200">
                                     <option value="">Lekki-Ajah (Sangotedo)</option>
                                     <option value="">Ibadan</option>
                                     <option value="">Lagos</option>
                                     <option value="">Lagos</option>
                                     <option value="">Lagos</option>
                                     <option value="">Lagos</option>
                                 </select>
                             </div>
                             <!-- Right SideBar here -->
                             <div class="space-y-3">
                                 <div class="flex justify-between space-x-2">
                                     <div class="">
                                         <div class="border rounded px-1.5">
                                            <span class="las la-shipping-fast text-lg font-bold"></span>
                                         </div>
                                     </div>
                                     <div>
                                         <h1 class="text-sm font-bold font-signika">Door Delivery</h1>
                                         <span class="text-xs"><b>Delivery ₦ 600</b></span>
                                         <p class="text-xs">
                                             Delivery by 24 May when you order within next 22hrs 20mins
                                         </p>
                                     </div>
                                     <div>
                                         <a href="" class="text-purple-600 text-sm hover:underline">Details</a>
                                     </div>
                                 </div>
                                 <div class="flex justify-between space-x-2">
                                     <div class="">
                                         <div class="border rounded px-1.5">
                                            <span class="las la-hands text-lg font-bold"></span>
                                         </div>
                                     </div>
                                     <div>
                                         <h1 class="text-sm font-bold font-signika">Pickup Station</h1>
                                         <span class="text-xs"><b>Delivery ₦ 180</b></span>
                                         <p class="text-xs">
                                             Delivery by 24 May when you order within next 22hrs 20mins
                                         </p>
                                     </div>
                                     <div>
                                         <a href="" class="text-purple-600 text-sm hover:underline">Details</a>
                                     </div>
                                 </div>
                             </div>
                             
                         </div>
                         
                     </div>
                     <div class="px-2 py-1">
                         <div class="flex justify-between space-x-2 mt-3">
                            <div class="">
                                <div class="border rounded px-1.5">
                                <span class="las la-undo-alt text-lg font-bold"></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold font-signika">Returns Policy</h1>
                                <p class="text-xs leading-tight mt-1">Free return within 15 days for Official Store items and 7 days for other 
                                    eligible items.See more</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  </div>
                  <div class="bg-white shadow-md divide-y pb-3 rounded px-2">
                      <div class="flex justify-between items-center py-1.5">
                          <h1 class="uppercase">Seller Information</h1>
                          <span class="las la-angle-right text-sm font-extrabold"></span>
                      </div>
                      <div>
                          <h1>Mazu Store</h1>
                          <div class="flex justify-between my-2">
                              <div>
                                  <div class="text-xs leading-tight">
                                      <p>66%Seller Score</p>
                                      <p> 9 Followers</p>
                                  </div>
                              </div>
                              <div>
                                <button class="bg-purple-600 text-white px-4 py-1.5 shadow-md rounded">Follow</button>
                            </div>
                          </div>
                      </div>
                      <div>
                          <div class="flex items-center space-x-2 mt-2">
                              <h1 class="text-sm font-bold">Sellers Performance</h1>
                              <span class="las la-info-circle hover:text-purple-600 cursor-pointer text-lg font-bold font-signika"></span>
                          </div>
                          <div class="space-y-2 mt-2">
                              <div class="flex items-center space-x-1 text-xs">
                                  <span>
                                      <span class="las bg-purple-600 la-star rounded-full p-0.5 text-gray-50"></span>
                                  </span>
                                  
                                  <span>Order Fulfillment Rate: <b>Excellent</b></span>
                              </div>
                              <div class="flex items-center space-x-1 text-xs">
                                  <span>
                                      <span class="las bg-orange-500 la-times rounded-full p-0.5 text-gray-50"></span>
                                  </span>
                                  <span>Quality Score:<b> Very Poor</b></span>
                              </div>
                              <div class="flex items-center space-x-1 text-xs">
                                  <span>
                                      <span class="las bg-green-500 la-star text-xs rounded-full p-0.5 text-gray-50"></span>
                                  </span>
                                  <span>Customer Rating: <b>Good</b></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>             
          </div>
          <!-- This is the product descriptive article -->
          <ProductArticle />
          
          <!-- This is the product descriptive article -->
      </div>
  </div>
</template>

<script setup>
import ProductDescSection from '../components/products/ProductDescSection.vue'
import ProductArticle from '../components/products/ProductArticle.vue'
import {useRoute} from 'vue-router'
import {useTitle} from '@vueuse/core'
const route = useRoute()
const title = useTitle('GoCommerce', { titleTemplate: `%s | ${route.query.item}` });

</script>

<style>

</style>