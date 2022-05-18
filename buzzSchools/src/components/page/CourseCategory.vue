<template>
  <div class="py-[3rem] px-[12rem] mt-[3rem]  bg-slate-50">
      <h1 class="text-lg font-bold text-orange-600 text-center">Courses</h1>
      <p class="text-4xl font-signika font-extrabold text-center">Popular Category</p>
      <div class="mt-6">
          <div class="grid grid-cols-4 gap-3">
              <router-link :to="{name: 'SingleCourseCategory', query: {category: category.title} }" v-for="category in CourseCategories" :key="category.id">
                  <a href="#" class="bg-white items-center space-x-1 drop-shadow-md p-3 flex">
                      <div class="text-orange-600">
                      <!-- <img :src="category.icon" alt=""> -->
                      <span :class="category.icon" class="text-3xl"></span>
                  </div>
                  <div>
                      <h1 class="font-bold">{{category.title}}</h1>
                      <p class="text-sm">{{category.courses}} courses</p>
                  </div>
                  </a>
                  
              </router-link>
          </div>
          <div class="mt-4 flex justify-center">
          <router-link :to="{name: 'CourseCategory'}" class="text-center font-bold bg-orange-500 text-white px-6 py-2 rounded-lg">View All course categories</router-link>
          </div>
      </div>
  </div>
</template>

<script setup>
import {computed} from 'vue';
import {useStore} from 'vuex';
// 37240 OPAY
// 6280 MONIEPOINT

const store = useStore();

const CourseCategories = computed(() => store.state.CourseCategories);

</script>

<style>

</style>