<template>
    <div>
        <div class="flex items-center justify-between px-6">
           <div class="flex items-center space-x-2 py-2 divide-x">
            <div class="relative">
                <div class="py-1 flex items-center space-x-2 cursor-pointer group">
                    <span class="las la-sliders-h group-hover:text-purple-500"></span>
                    <span class="group-hover:text-purple-500 text-sm">Categories</span>
                    <span class="las la-angle-down group-hover:text-purple-500 text-sm"></span>
                </div>
            </div>
            <div class="relative">
                <div class="py-1 pl-2 flex items-center space-x-2 cursor-pointer group">
                    <span class="group-hover:text-purple-500 text-sm">Ready to Ship</span>
                </div>
            </div>
            <div class="relative">
                <div class="py-1 pl-2 flex items-center space-x-2 cursor-pointer group">
                    <span class="group-hover:text-purple-500 text-sm">Trade Show</span>
                </div>
            </div>
            <div class="relative">
                <div class="py-1 pl-2 flex items-center space-x-2 cursor-pointer group">
                    <span class="group-hover:text-purple-500 text-sm">Buyer central</span>
                    <span class="las la-angle-down group-hover:text-purple-500 text-sm"></span>
                </div>
            </div>
            <div class="relative">
                <div class="py-1 pl-2 flex items-center space-x-2 cursor-pointer group">
                    <span class="group-hover:text-purple-500 text-sm">Sell on GoCommerce</span>
                    <span class="las la-angle-down group-hover:text-purple-500 text-sm"></span>
                </div>
            </div>
            <div class="relative">
                <div class="py-1 pl-2 flex items-center space-x-2 cursor-pointer group">
                    <span class="group-hover:text-purple-500 text-sm">Help</span>
                    <span class="las la-angle-down group-hover:text-purple-500 text-sm"></span>
                </div>
            </div>
        </div> 
        <div class="flex items-center space-x-2 text-sm">
            <div class="relative">
                <div class="flex items-center cursor-pointer">
                    <h1>English - USD</h1>
                    <span class="las la-angle-down text-sm text-gray-500"></span>
                </div>
                <div class="bg-white border hidden rounded-md shadow-md right-0 px-3  absolute w-[20rem] py-[1rem]">
                    <h1 class="font-bold text-gray-700 text-lg">Your Settings</h1>
                    <div class="flex flex-col mt-4">
                        <div>
                            <h1 class="text-gray-700 font-medium">Choose Language</h1>
                        <select name="" id="" class="w-full outline-none border py-1 mt-2 border-purple-500 rounded-full px-4">
                            <option value="">English</option>
                            <option value="">Deutch</option>
                            <option value="">Expano</option>
                            <option value="">Francaise</option>
                            <option value="">spanish</option>
                            <option value="">Yoruba</option>
                            <option value="">English</option>
                            <option value="">English</option>
                            <option value="">English</option>
                        </select>     
                        </div>

                    </div>
                    <div class="flex flex-col mt-4">
                        <div>
                            <h1 class="text-gray-700 font-medium">Choose Currency</h1>
                            <select name="" id="" class="w-full outline-none border py-1 mt-2 border-purple-500 rounded-full px-4">
                            <option value="">USD - US dolar</option>
                        </select>                              
                        </div>

                    </div>
                    <div class="mt-4 flex justify-end">
                        <button class="bg-purple-600 px-8 py-2 text-white rounded-lg">Save</button>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="flex items-center cursor-pointer">
                    <h1>Ship to</h1>
                    <span class="las la-angle-down text-sm text-gray-500"></span>
                </div>
                <div class="bg-white hidden border rounded-md shadow-md right-0 px-3  absolute w-[20rem] py-[1rem]">
                    <h1 class="font-bold mb-1 text-gray-700 text-lg">Choose your Location</h1>
                    <p>Delivery options and fees may vary based on your locations</p>
                    <div class="flex flex-col mt-4">
                        
                        <div>
                              <a href="">
                                  <div class="bg-purple-600 text-white text-center rounded-full py-2 px-3">Sign In To See Your Address</div>
                              </a>                     
                        </div>
                        <div class="header_center mt-3 px-[3rem] text-xs text-gray-500 text-center">Or</div>
                        <div class="mt-3">
                            <select name="" id="" class="w-full  border border-gray-300 px-3 py-1.5 outline-none rounded-sm">
                                <option value="">United state of america</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <input type="text" id="" placeholder="Enter city zip" class="w-full  border border-gray-300 px-3 py-1.5 outline-none rounded-sm">
                        </div>

                    </div>
                    <div class="mt-4 flex justify-end">
                        <button class="bg-purple-600 px-8 py-2 text-white rounded-lg">Save</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
    </div>
</template>
<script setup>
import { ref } from 'vue'
import {
  Listbox,
  ListboxLabel,
  ListboxButton,
  ListboxOptions,
  ListboxOption,
} from '@headlessui/vue'
import { CheckIcon, SelectorIcon } from '@heroicons/vue/solid'

const people = [
  { name: 'English' },
  { name: 'Arlene Mccoy' },
  { name: 'Devon Webb' },
  { name: 'Tom Cook' },
  { name: 'Tanya Fox' },
  { name: 'Hellen Schmidt' },
]
const selectedPerson = ref(people[0])
</script>
<style scoped>

</style>