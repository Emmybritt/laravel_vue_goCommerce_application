<template>
  <div class="font-source">
      <div class="px-[6rem] pb-[3rem]">
        <div>
                <div class="flex py-3 items-center font-bold text-indigo-700 text-sm space-x-3">
                    <div class="space-x-1">
                        <span class="las la-home"></span>
                        <span>Home</span>
                    </div>
                    <span class="las la-angle-right"></span>
                    <div class="">
                        <span>Fashion</span>
                    </div>
                    <span class="las la-angle-right"></span>
                    <div>
                        <span>Eduka responsive HTML Landing Page templates</span>
                    </div>
                </div>
                <div class="py-3">
                    <h1 class="text-3xl font-bold font-signika text-indigo-600">Eduka responsive HTML Landing Page templates</h1>
                </div>
                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <div class="shadow-md">
                            <div class="bg-gray-100 rounded-t-md py-4 h-[22rem] flex items-center justify-center relative">
                                <img src="../assets/ecommerce.png" class="inset-0 object-cover" alt="">
                            </div>
                            <div class="px-6 py-3">
                                <div class="flex items-center justify-between">
                                    <div class="">
                                    <h1 class="text-2xl font-semibold text-violet-600 font-signika">$39.00</h1>
                                    <del class="text-slate-400 font-signika font-medium">$45.00</del>
                                    </div>
                                    <div>
                                    <a href="" class="border border-slate-300 hover:bg-slate-800 hover:text-white rounded-full font-signika text-slate-800 py-3 px-6">View SnapShots</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="px-[1rem] py-2">
                                <button class="bg-violet-500 shadow-md shadow-violet-300 w-full font-bold text-white rounded-full text-center py-2">Buy Now</button>
                            </div>
                            <div class="px-[1rem] flex items-center py-2">
                                <div class="w-1/3">
                                <div class="space-x-3">
                                    <button class="bg-violet-500 text-white text-lg shadow-md shadow-violet-300 rounded px-2"><span class="las la-minus"></span></button>
                                    <span class="font-bold">1</span>
                                    <button class="bg-violet-500 text-white text-lg shadow-md shadow-violet-300 rounded px-2"><span class="las la-plus"></span></button>
                                </div>
                                </div>
                                <div class="flex-auto">
                                    <button class="bg-emerald-500 shadow-md shadow-emerald-300 w-full font-bold text-white rounded-full text-center py-2">Add to cart</button>
                                </div>
                            </div>
                            <div class="flex space-x-2 px-4 py-3">
                                <a href="" class="border border-violet-300 py-2 text-center w-full rounded text-violet-500 hover:bg-violet-600 hover:text-white font-bold">View Demo</a>
                                <a href="#documentation" class="border border-violet-300 py-2 text-center w-full rounded text-violet-500 hover:bg-violet-600 hover:text-white font-bold">Documentation</a>
                            </div>
                            <div class="flex flex-col divide-y px-6 text-gray-600 py-3">
                                <div class="flex py-2 items-center justify-between">
                                    <h1 class="font-bold font-signika">Last Updated</h1>
                                    <p>January 19 2021</p>
                                </div>
                                <div class="flex py-2 items-center justify-between">
                                    <h1 class="font-bold font-signika">Released</h1>
                                    <p>January 19 2021</p>
                                </div>
                                <div class="flex py-2 items-center justify-between">
                                    <h1 class="font-bold font-signika">Category</h1>
                                    <p>Fashion, Featured templates free themes Premium</p>
                                </div>
                                <div class="flex py-2 items-center justify-between">
                                    <h1 class="font-bold font-signika">Tags</h1>
                                    <p>website, ui, designs, businness</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 py-2" id="documentation">
                        <h1 class="text-3xl font-extrabold font-signika text-gray-600 py-2">Description</h1>
                        <h3 class="font-bold text-lg text-indigo-600">Eduka responsive HTML Landing Page templates</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde recusandae eligendi voluptatum cum, debitis nemo repellendus 
                            dolor temporibus tempore accusantium odit excepturi eius cupiditate dignissimos quod culpa quos dolorem quo ad nobis. 
                            Expedita suscipit similique commodi facere placeat voluptatum perferendis corrupti. Quae voluptas corporis voluptatum eius 
                            nam molestiae amet dicta odio minima? Amet voluptates enim omnis magnam, eius perferendis nisi? orem ipsum dolor sit amet 
                            consectetur adipisicing elit. Provident vitae asperiores doloremque adipisci minus repellat assumenda ipsam, quam quo
                            distinctio ab aperiam, in illum perferendis? Earum corporis id dolor voluptatem.</p>
                    </div>
                </div>
            </div>
      </div>
      
      <RelatedProducts />
  </div>
</template>

<script setup>
import RelatedProducts from '../components/RelatedProducts.vue'

</script>

<style>

</style>