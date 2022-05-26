<template>
  <div class="bg-pink-50 px-[4rem] py-[2rem]">
      <div class="h-[26rem] px-4 py-6 bg-white border flex gap-3">
          <div class="w-1/4">
            <h1 class="font-bold border-b-2 pb-1 uppercase font-signika">My markets</h1>
            <div class="mt-3"> 
                <div class="relative group">
                    <div class="flex group-hover:border py-2 cursor-pointer items-center justify-between px-3 rounded space-x-2">
                        <div class="flex items-center ">
                            <div class="px-1 py-1 bg-gray-100 rounded-full">
                                <img src="../assets/categories/electronic.jpg" class="h-[1.2rem] w-[1.2rem] rounded-full" alt="">
                            </div>
                            <p class="pl-1 text-sm">Consumer Electronics</p>
                        </div>
                        <span class="las la-angle-right text-sm"></span>
                    </div>
                    <div class="bg-white w-[40rem] z-40 px-4 py-4 border hidden group-hover:block rounded-sm absolute left-[18rem] -top-6">
                        <div class="grid grid-cols-3">
                            <div>
                                <h1 class="text-sm font-bold">Camera, Photo & accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Chargers, Batteries & power supplies</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Commonly used accessories & part</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Computer Hardware & Software</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Earphone & Headphone & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Electronic Publications</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="flex group-hover:border py-2 cursor-pointer items-center justify-between px-3 rounded space-x-2">
                        <div class="flex items-center ">
                            <div class="px-1 py-1 bg-gray-100 rounded-full">
                                <img src="../assets/categories/tshirt.jpg" class="h-[1.2rem] w-[1.2rem] rounded-full" alt="">
                            </div>
                            <p class="pl-1 text-sm">Apparel</p>
                        </div>
                        <span class="las la-angle-right text-sm"></span>
                    </div>
                    <div class="bg-white w-[40rem] z-40 px-4 py-4 border hidden group-hover:block rounded-sm absolute left-[18rem] -top-[4rem]">
                        <div class="grid grid-cols-3">
                            <div>
                                <h1 class="text-sm font-bold">Baby Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Ethnic Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Garment & Processing Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Men's Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Children Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Novelty & Special use</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="flex group-hover:border py-2 cursor-pointer items-center justify-between px-3 rounded space-x-2">
                        <div class="flex items-center ">
                            <div class="px-1 py-1 bg-gray-100 rounded-full">
                                <img src="../assets/categories/vehiclepart.png" class="h-[1.2rem] object-cover w-[1.2rem] rounded-full" alt="">
                            </div>
                            <router-link :to="{name: 'ProductCategories', params: {category: 'vehicle part'} }" class="pl-1 text-sm">Vehicle Part & Accessories</router-link>
                        </div>
                        <span class="las la-angle-right text-sm"></span>
                    </div>
                    <div class="bg-white w-[40rem] px-4 z-40 py-4 border hidden group-hover:block rounded-sm absolute left-[18rem] -top-[6rem]">
                        <div class="grid grid-cols-3">
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Ethnic Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Men's Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Bus Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Novelty & Special use</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="flex group-hover:border py-2 cursor-pointer items-center justify-between px-3 rounded space-x-2">
                        <div class="flex items-center ">
                            <div class="px-1 py-1 bg-gray-100 rounded-full">
                                <img src="../assets/categories/sport.jpg" class="h-[1.2rem] object-cover w-[1.2rem] rounded-full" alt="">
                            </div>
                            <p class="pl-1 text-sm">Sport & Entertainment</p>
                        </div>
                        <span class="las la-angle-right text-sm"></span>
                    </div>
                    <div class="bg-white w-[40rem] z-40 px-4 py-4 border hidden group-hover:block rounded-sm absolute left-[18rem] -top-[8.5rem]">
                        <div class="grid grid-cols-3">
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Ethnic Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Men's Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Bus Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Novelty & Special use</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="flex group-hover:border py-2 cursor-pointer items-center justify-between px-3 rounded space-x-2">
                        <div class="flex items-center ">
                            <div class="px-1 py-1 bg-gray-100 rounded-full">
                                <img src="../assets/categories/machine.png" class="h-[1.2rem] w-[1.2rem] object-cover rounded-full" alt="">
                            </div>
                            <p class="pl-1 text-sm">Machinery</p>
                        </div>
                        <span class="las la-angle-right text-sm"></span>
                    </div>
                    <div class="bg-white w-[40rem] z-40 px-4 py-4 border hidden group-hover:block rounded-sm absolute left-[18rem] -top-[11rem]">
                        <div class="grid grid-cols-3">
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Ethnic Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Men's Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Bus Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Novelty & Special use</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="flex group-hover:border py-2 cursor-pointer items-center justify-between px-3 rounded space-x-2">
                        <div class="flex items-center ">
                            <div class="px-1 py-1 bg-gray-100 rounded-full">
                                <img src="../assets/categories/garden.png" class="h-[1.2rem] object-cover w-[1.2rem] rounded-full" alt="">
                            </div>
                            <p class="pl-1 text-sm">Home & Garden</p>
                        </div>
                        <span class="las la-angle-right text-sm"></span>
                    </div>
                    <div class="bg-white w-[40rem] z-40 px-4 py-4 border hidden group-hover:block rounded-sm absolute left-[18rem] -top-[13rem]">
                        <div class="grid grid-cols-3">
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Ethnic Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Men's Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Bus Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Novelty & Special use</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="flex group-hover:border py-2 cursor-pointer items-center justify-between px-3 rounded space-x-2">
                        <div class="flex items-center ">
                            <div class="px-1 py-1 bg-gray-100 rounded-full">
                                <img src="../assets/categories/beauty.jpg" class="h-[1.2rem] object-cover w-[1.2rem] rounded-full" alt="">
                            </div>
                            <p class="pl-1 text-sm">Beauty & Personal Care</p>
                        </div>
                        <span class="las la-angle-right text-sm"></span>
                    </div>
                    <div class="bg-white w-[40rem]  z-40 px-4 py-4 border hidden group-hover:block rounded-sm absolute left-[18rem] -top-[15rem]">
                        <div class="grid grid-cols-3">
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Ethnic Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Men's Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Bus Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Novelty & Special use</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="flex group-hover:border py-2 cursor-pointer items-center justify-between px-3 rounded space-x-2">
                        <div class="flex items-center ">
                            <div class="px-1 py-1 bg-gray-100 rounded-full">
                                <img src="../assets/categories/menu.png" class="h-[1.2rem] object-contain w-[1.2rem] rounded-full" alt="">
                            </div>
                            <p class="pl-1 text-sm">All Categories</p>
                        </div>
                        <span class="las la-angle-right text-sm"></span>
                    </div>
                    <div class="bg-white w-[40rem]  z-40 px-4 py-4 border hidden group-hover:block rounded-sm absolute left-[18rem] -top-[17rem]">
                        <div class="grid grid-cols-3">
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Ethnic Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Automotive Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Men's Clothing</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Bus Parts & Accessories</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold">Novelty & Special use</h1>
                                <div class="mt-2">
                                    <span class="text-xs block" v-for="(acces, i) in consumerElect" :key="i"><a href="">{{acces}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
          </div>
          <div class="w-2/4">
            <div class="relative group">
                <a href="">
                    <img src="../assets/banner.jpg" class="h-[22rem]" alt="">
                </a>
                <div class="absolute cursor-pointer opacity-0 group-hover:opacity-80 flex items-center justify-between w-full top-[50%]">
                    <div style="background-color:rgba(0,0,0,0.2)" class="py-3">
                        <span class="las la-angle-left text-3xl text-white"></span>
                    </div>
                    <div style="background-color:rgba(0,0,0,0.2)" class="py-3">
                        <span class="las la-angle-right text-3xl text-white"></span>
                    </div>
                </div>
            </div>
            <div class="flex space-x-1 my-auto mt-3 justify-center items-center">
                <span class="rounded-full bg-gray-100 h-3 w-3"></span>
                <span class="rounded-full bg-gray-100 h-3 w-3"></span>
                <span class="rounded-full border-2 border-purple-600 h-3 w-3"></span>
                <span class="rounded-full bg-gray-100 h-3 w-3"></span>
                <span class="rounded-full bg-gray-100 h-3 w-3"></span>
                <span class="rounded-full bg-gray-100 h-3 w-3"></span>
            </div>
          </div>
          <div class="w-1/4">
            <div>
                <a href="">
                    <div class="bg-purple-600 px-3 text-center text-white py-1">Top Products for sales</div>
                </a>
            </div>
            <div class="flex flex-col divide-y space-y-2 text-gray-600">
                <div class="flex py-3 items-center justify-between">
                    <div class="w-[60%] space-y-3">
                        <h1 class="text-lg font-bold leading-snug">Woodwork Machinery</h1>
                        <div>
                        <a href="" class="bg-purple-600 text-white px-4 py-1 text-sm rounded-full">Source now</a>
                        </div>
                    </div>
                    <div>
                        <img src="../assets/machines/R.png" class="h-[3rem] w-[3rem]" alt="">
                    </div>
                </div>
                <div class="flex py-3 items-center justify-between">
                    <div class="w-[60%] space-y-3">
                        <h1 class="text-lg font-bold leading-snug">Plastic & rubber Machinery</h1>
                        <div>
                        <a href="" class="bg-purple-600 text-white px-4 py-1 text-sm rounded-full">Source now</a>
                        </div>
                    </div>
                    <div>
                        <img src="../assets/machines/R.png" class="h-[3rem] w-[3rem]" alt="">
                    </div>
                </div>
                <div class="flex py-3 items-center justify-between">
                    <div class="w-[60%] space-y-3">
                        <h1 class="text-xl font-bold leading-snug">Laser & machine tool equipments</h1>
                        <div>
                        <a href="" class="bg-purple-600 text-white px-4 py-1 text-sm rounded-full">Source now</a>
                        </div>
                    </div>
                    <div>
                        <img src="../assets/machines/R.png" class="h-[3rem] w-[3rem]" alt="">
                    </div>
                </div>
            </div>
          </div>
        </div> 
  </div>
</template>

<script setup>
import {reactive} from 'vue'

const consumerElect = reactive([
    'Action & Sports Camera',
    'Action & Sports Camera Accessory',
    'Baby & Pet Monitor',
    'Backgrounds',
    'Battery Grip',
    'Camera Filters'
]);

</script>

<style>

</style>