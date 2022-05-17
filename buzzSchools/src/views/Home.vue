<template>
  <div class="bg-gradient-to-br ">
    <div>
      <Banner />
    </div>
      <div class="px-[8rem]">
         <Level2Component />
      </div>
      <div>
        <CourseCategory />
      </div>
      
      <div>
        <PopularCourses />
      </div>
      <div>
        <SuccessStories />
      </div>
      <div>
        <Blogs />
      </div>
  </div>
</template>

<script setup>
import Banner from '../components/page/Banner.vue'
import Level2Component from '../components/page/Level2Component.vue'
import CourseCategory from '../components/page/CourseCategory.vue'
import PopularCourses from '../components/page/PopularCourses.vue'
import SuccessStories from '../components/page/SuccessStories.vue'
import Blogs from '../components/page/Blogs.vue'
import {useTitle, useDark, useToggle } from '@vueuse/core'
const title = useTitle('BuzzSchool', { titleTemplate: '%s | Online courses' });

</script>

<style>

</style>