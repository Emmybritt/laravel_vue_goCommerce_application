<template>
  <div class="bg-gradient-to-br ">
    <div>
      <Banner />
    </div>
      <div class="md:px-[8rem] px-[1rem]">
         <Level2Component />
      </div>
      <div>
        <CourseCategory />
      </div>
      
      <div>
        <PopularCourses :popularCourses="popularCourses" />
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
import {useStore} from 'vuex';
import { ref, computed } from 'vue'
const title = useTitle('BuzzSchool', { titleTemplate: '%s | Online courses' });


const store = useStore();
const popularCourses = computed(() => store.state.popularCourse.data);

const isLoadingCourse = ref(true);
const errorMessage = ref('');

store.dispatch("getPopularCourses").then(({data}) => {
  isLoadingCourse.value = false;
}).catch(err => {
  isLoadingCourse.value = false;
  errorMessage.value = "Oops an error occurred when trying to load page!!!"
});

</script>

<style>

</style>