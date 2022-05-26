<template>
  <div class="font-source">
    <div class="flex py-3 px-[6rem] items-center font-bold text-indigo-700 text-sm space-x-3">
        <div class="space-x-1">
          <router-link :to="{name: 'Index'}">
            <span class="las la-home"></span>
            <span>Home</span>
          </router-link>
        </div>
        <span class="las la-angle-right"></span>
        <div>
            <span>{{route.query.name}}</span>
        </div>
    </div>
      <div class=" px-[6rem]">
        <div class="flex space-x-3 py-[2rem]">
          <div class="w-1/4 h-[50rem] border">
            <SortAndFilterComponent />
          </div>
          <div class="w-3/4  border">
            <div class="p-4 grid grid-cols-3 gap-3">
              <div v-for="i in 19" :key="i" class="bg-white py-2 h-[23rem] shadow-md rounded-md">
                <div class="h-[11rem]">
                  <img src="../assets/ecommerce.png" class="object-cover" alt="">
                </div>
                <div class="px-3">
                  <h1 class="text-xs font-bold leading-tight">Eduka responsive HTML Landing Page templates</h1>
                  <p class="text-xs py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quasi adipisci,</p>
                  <div class="flex space-x-3 items-center">
                  <h1 class="font-signika font-semibold text-violet-600">$40.00</h1>
                  <del class="text-sm text-slate-400">$65.00</del>
                </div>
                  <div class="space-y-1 pt-2">
                    <button class="w-full bg-violet-900 hover:bg-white hover:text-slate-900 hover:border font-bold text-sm text-white text-center py-2 rounded-full">Add to cart</button>
                    <button class="w-full hover:bg-violet-900 hover:text-white text-sm border font-bold border-slate-300 text-center py-2 rounded-full">Buy now</button>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- Pagination here -->
            <div class="flex space-x-1 py-3 items-center justify-center ">
              <a href="" class="border px-2 rounded-md hover:bg-violet-600 hover:text-white">Previous</a>
              <a href="" class="border px-2 rounded-md hover:bg-violet-600 hover:text-white" v-for="i in 8" :key="i">{{i}}</a>
              <a href="" class="border px-2 rounded-md bg-violet-600 text-white">9</a>
              <a href="" class="border px-2 rounded-md hover:bg-violet-600 hover:text-white">Next</a>
            </div>
            <!-- Pagination here -->
          </div>
        </div>
      </div>
  </div>
</template>

<script setup>
import {useRoute} from 'vue-router'
import SortAndFilterComponent from '../components/SortAndFilterComponent.vue'
const route = useRoute();

</script>

<style>

</style>