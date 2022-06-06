<template>
  <div class="lg:px-[8rem] px-[1rem]">
      <div class="">
          <div class="grid md:grid-cols-2 grid-cols-1 lg:grid-cols-3 gap-2">
              <div v-for="(course, ind) in courses" :key="course.id" :style="{animationDelay: `${ind * 0.3}s`}" class="opacity-0 animate-fade-in-down flex flex-col bg-white drop-shadow-md rounded-lg">
                  <div class="relative">
                      <img class="object-cover h-[10rem] w-full" :src="course.image" alt="">
                      <p class="absolute bottom-0 left-[3rem] text-xs text-white bg-gradient-to-br from-purple-700 via-indigo-500 to purple-600 px-3 py-1 rounded-xl">{{course.level}}</p>
                  </div>
                  <div class="px-[1.5rem] py-[.5rem] space-y-2">
                      <div class="flex items-center space-x-3">
                      <h1 v-if="course.amount == 'free'" class="text-xl font-signika text-orange-500">{{ course.amount }}</h1>
                      <h1 v-else class="text-xl font-signika text-orange-600">${{course.amount}}</h1>
                      <del class="font-source text-xl text-gray-400 font-thin">${{course.discounted_amount}}</del>
                      <!-- 7737200018 -->
                  </div>
                  <router-link :to="{name: 'SingleCourseView', query:{title: course.title} }" class="text-sm font-bold font-source">{{course.title}}</router-link>
                  <p class="text-gray-600 text-sm font-medium">{{course.description}}</p>
                  <div class="flex justify-between items-center">
                    <div class="flex" v-if="course.rating">
                      <!-- <span v-for="(star, i) in course.rating" :key="i" class="las text-sm la-star text-yellow-400"></span> -->
                     <span class="text-xs font-bold text-orange-500">{{course.rating}} ratings</span>
                    </div>
                    <div class="flex text-sm divide-x divide-gray-400 space-x-1">
                        <div>
                            <span class="las la-clock"></span>
                            <span>{{ course.duration }}</span>
                        </div>
                        <div class="pl-1">
                            {{ course.lessons }} lessons
                        </div>
                        
                    </div>
                  </div>
                  

                  <hr>
                  <div class="space-x-2 flex justify-between">
                      <a href="" class=" px-3 py-1 rounded-md bg-orange-500 text-white" v-if="course.amount == 'free'">View Course</a>
                      <button @click="AddToCart(course.id)" v-else class=" px-3 py-1 rounded-md bg-orange-500 text-white">Add to cart</button>
                      <span v-if="course.saved" @click="saveIndex(course.id)" class="las cursor-pointer animate-fade-in-up text-lg font-bold text-orange-600 la-heart"></span>
                      <span v-else @click="saveIndex(course.id)" class="lar cursor-pointer animate-fade-in-up text-lg font-bold text-orange-600 la-heart"></span>
                  </div>
                  </div>
                  
              </div>

          </div>
      </div> 
  </div>
</template>

<script setup>
import {computed, ref, reactive, watch} from 'vue';
import {useStore} from 'vuex';
// 37240 OPAY
// 6280 MONIEPOINT

const SavedColor = 'bg-orange-500';

const props = defineProps({
    courses: Array,
})

const store = useStore();
const popularCourses = computed(() => store.state.popularCourses);

function saveIndex(id) {
    store.commit("setSavedItemTotrue", id);
}

function AddToCart(id) {
    store.commit("setCartItem",id)
}

const data = reactive(['Premium','Free', 'Professionals']);





</script>

<style>

</style>