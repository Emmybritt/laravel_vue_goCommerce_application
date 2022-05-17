<template>
  <div class="py-[3rem] px-[12rem]  bg-slate-50">
      <p class="text-4xl font-signika font-extrabold text-center">Course Category</p>
      <div class="mt-6">
          <div class="grid grid-cols-4 gap-3">
              <div v-for="category in CourseCategories" :key="category.id">
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
                  
              </div>
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