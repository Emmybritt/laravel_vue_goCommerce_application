<template>
  <div class="py-[4rem] px-[1rem] md:px-[4rem] lg:px-[10rem] ">
      <h1 class="text-2xl font-signika font-bold text-orange-600 text-center">Courses</h1>

      <p class="text-4xl font-signika font-extrabold text-center">Explore Popular Courses</p>
      <div class="mt-6">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2">
              <div v-for="(popular, ind) in popularCourses" :key="popular.id" :style="{animationDelay: `${ind * 0.3}s`}" class="opacity-0 animate-fade-in-down flex flex-col bg-white drop-shadow-md rounded-sm">
                  <div class="relative">
                      <img v-if="!popular.image" class="object-cover h-[10rem] w-full" src="../../assets/images/girlwithbook.png" alt="">
                      <img v-else class="object-cover h-[10rem] w-full" :src="popular.image" :alt="popular.title">
                      <p class="absolute bottom-0 left-[3rem] text-xs text-white bg-gradient-to-br from-purple-700 via-indigo-500 to purple-600 px-3 py-1 rounded-xl">{{popular.level}}</p>
                  </div>
                  <div class="px-[1.5rem] py-[.5rem] space-y-2">
                      <div class="flex items-center space-x-3">
                      <h1 v-if="popular.amount == 'free'" class="text-xl font-signika text-orange-500">{{ popular.amount }}</h1>
                      <h1 v-else class="text-xl font-signika text-orange-600">${{popular.amount}}</h1>
                      <del class="font-source text-xl text-gray-400 font-thin">${{popular.discounted_amount}}</del>
                      <!-- 7737200018 -->
                  </div>
                    <router-link :to="{name: 'SingleCourseView', query:{title: popular.title} }" class="text-sm font-bold font-source">{{popular.title}}</router-link>
                  <p class="text-gray-600 text-sm font-medium">{{popular.description}}</p>
                  <div class="flex justify-between items-center">
                    <div class="flex" v-if="popular.rating">
                      <span v-for="(star, i) in popular.rating" :key="i" class="las text-sm la-star text-yellow-400"></span>
                    </div>
                    <div class="flex text-sm divide-x divide-gray-400 space-x-1">
                        <div>
                            <span class="las la-clock"></span>
                            <span>{{ popular.duration }}</span>
                        </div>
                        <div class="pl-1">
                            {{ popular.lessons }} lessons
                        </div>
                        
                    </div>
                  </div>
                  

                  <hr>
                  <div class="space-x-2 flex justify-between">
                      <a href="" class=" px-3 py-1 rounded-md bg-orange-500 text-white" v-if="popular.amount == 'free'">View Course</a>
                      <button @click="AddToCart(popular.id)" v-else class=" px-3 py-1 rounded-md bg-orange-500 text-white">Add to cart</button>
                      <span v-if="popular.saved" @click="saveIndex(popular.id)" class="las cursor-pointer animate-fade-in-up text-lg font-bold text-orange-600 la-heart"></span>
                      <span v-else @click="saveIndex(popular.id)" class="lar cursor-pointer animate-fade-in-up text-lg font-bold text-orange-600 la-heart"></span>
                  </div>
                  </div>
                  
              </div>

          </div>
      </div>
      <div class="flex justify-center items-center mt-6">
        <router-link :to="{name: 'AllCourses'}" class="text-center bg-orange-500 rounded-md text-white font-bold font-source px-4 py-1.5">View More Courses</router-link>
      </div>  
  </div>
</template>

<script setup>
import {computed, ref, watch} from 'vue';
import {useStore} from 'vuex';
const props = defineProps({
    popularCourses: Array,
});

const SavedColor = 'bg-orange-500';

const store = useStore();

function saveIndex(id) {
    store.commit("setSavedItemTotrue", id);
}

function AddToCart(id) {
    store.commit("setCartItem",id)
}





</script>

<style>

</style>