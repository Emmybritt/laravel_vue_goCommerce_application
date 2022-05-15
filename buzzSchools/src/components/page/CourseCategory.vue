<template>
  <div class="py-[3rem] px-[12rem] mt-[3rem] h-[20rem] bg-slate-50">
      <h1 class="text-lg font-bold text-orange-600 text-center">Courses</h1>
      <p class="text-4xl font-signika font-extrabold text-center">Popular Category</p>
      <div class="mt-6">
          <div class="grid grid-cols-4">
              <div class="bg-white drop-shadow-md p-3 flex">
                  <div>
                      image
                  </div>
                  <div>
                      <h1>Business</h1>
                  </div>
                  
              </div>
          </div>
      </div>
  </div>
</template>

<script setup>
import {computed} from 'vue';
import {useStore} from 'vuex';

const store = useStore();

const CourseCategories = computed(() => store.state.CourseCategories);

</script>

<style>

</style>