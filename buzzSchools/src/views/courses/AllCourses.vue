<template>
  <div class="font-source bg-slate-50">
      <div class="h-[20rem] space-y-4 flex flex-col items-center justify-center bg-purple-800">
        <h1 class="text-4xl font-extrabold font-signika text-white">Tech & business masteries Courses</h1>
        <div>
          <h3 class="text-purple-100 text-xl font-bold">895 Lessons | 108 Hours | 40 Courses</h3>
        </div>
      </div>
      <!-- Filter sections here -->
      <div class="py-[1rem]">
        <div class="w-[50rem] mx-auto mt-3 py-3 bg-white shadow-md  rounded-xl">
          <div @click="ShowHideable" class="flex cursor-pointer px-6 py-3 items-center space-x-2 font-bold text-purple-600" style="rgba(0,0,0,0.8)">
            <span class="las la-filter"></span>
            <h1 class="uppercase">Search and Filter courses</h1>
          </div>
          <div class="px-6 animate-fade-in-down opacity-0" v-if="ShouldShow">
            <div class="flex justify-between mb-3 border rounded-lg divide-x-2 divide-purple-300 border-purple-200">
              <h1 class="py-3 text-center px-6">Premium</h1>
              <h1 class="py-3 text-center px-6">Free</h1>
              <h1 class="py-3 text-center px-6">Professiona masteries</h1>
            </div>
            <div>
            <select placeholder="Skill Level" class="w-full border border-purple-400 rounded-md px-6 outline-none py-3 animate-fade-in-up">
              <option value="" class=" animate-fade-in-up">All</option>
              <option value="" class=" animate-fade-in-up">Beginner</option>
              <option value="" class=" animate-fade-in-up">Intermidiate</option>
              <option value="" class=" animate-fade-in-up">Advance</option>
            </select>
            <div class="flex items-center">
            <input type="text" placeholder="Enter course keyword..." class="w-full mt-2 border border-purple-400 rounded-md px-6 outline-none py-3 animate-fade-in-up">
            <button class="bg-purple-600 text-white ml-1 rounded-md px-2 py-3">Search</button>
            </div>
          </div>
          </div>
          
        </div>
      </div>
      <!-- Filter sections here -->
      <ListAllCourse />
      <!-- Course Pagination here -->
      <div class="py-6">
        <div class="flex justify-center items-center space-x-1 flex-wrap">
        <a href="#" class="border border-purple-400 px-3 py-1 rounded-full hover:bg-purple-500 hover:text-white">Previous</a>
        <a href="#" class="border border-purple-400 px-3 py-1 rounded-full hover:bg-purple-500 hover:text-white" v-for="num in 5" :key="num">{{ num }}</a>
        <a href="" class="border border-purple-400 px-3 py-1 rounded-full hover:bg-purple-500 bg-purple-500 text-white hover:text-white">6</a>
        <a href="#" class="border border-purple-400 px-3 py-1 rounded-full hover:bg-purple-500 hover:text-white">Next</a>
      </div>
      </div>
      
      <!-- Course Pagination here -->
  </div>
</template>

<script setup>
import ListAllCourse from '../../components/coursecomponent/ListAllCourse.vue'
import {ref} from 'vue';

const ShouldShow = ref(false);

function ShowHideable() {
  ShouldShow.value = !ShouldShow.value;
}

</script>

<style>

</style>