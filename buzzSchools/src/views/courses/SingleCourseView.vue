<template>
  <div class="font-source antialiased">
      <div class="bg-purple-800 py-[3rem]">
        <div class="flex">
          <div class="w-1/2 ">
          <div class="flex flex-col w-[20rem] space-y-3 mx-auto items-center justify-center py-5">
            <h1 class="text-3xl text-white capitalize font-signika font-extrabold">{{course}}</h1>
            <p class="text-purple-200 mt-3 text-lg leading-snug">Learn about vue js application and how to create your website with vue js.</p>
            <div class="space-x-3 mt-[3rem]">
              <a href="" class="bg-orange-600 text-white px-4 py-2 rounded-md uppercase font-signika">Start Course</a>
              <a href="" class="text-white px-4 py-2 rounded-md uppercase font-signika">Follow</a>
            </div>
            
          </div>
          <div class="flex justify-between items-center w-[20rem] mx-auto font-bold text-white">
              <h1 class="">12 Lessons</h1>
              <h1 class="">34 mins</h1>
              <h1 class="">Intermidiate</h1>
            </div>
          </div>
          <div>
            <img src="../../assets/images/girlwithbook.png" alt="" class="bg-contain h-[20rem] opacity-40 rounded-full">
          </div>
        </div>
      </div>
      <div class=" w-[50rem] mx-auto py-[3rem]">
        <h1 class="text-center text-2xl font-extrabold font-signika">What You will Learn in the {{route.query.title}}</h1> 
        <div class="flex items-center px-[12rem] mt-3 space-x-2">
        <span class="h-2 w-2 rounded-full bg-purple-500"></span>
        <span class="text-lg text-gray-600">Set up & connect to firebase Authentication</span>  
      </div>  
        <div class="flex items-center px-[12rem] mt-3 space-x-2">
        <span class="h-2 w-2 rounded-full bg-purple-500"></span>
        <span class="text-lg text-gray-600">Sign users up, in and out</span>  
      </div>  
        <div class="flex items-center px-[12rem] mt-3 space-x-2">
        <span class="h-2 w-2 rounded-full bg-purple-500"></span>
        <span class="text-lg text-gray-600">How to catch firebase</span>  
      </div>  
        <div class="flex items-center px-[12rem] mt-3 space-x-2">
        <span class="h-2 w-2 rounded-full bg-purple-500"></span>
        <span class="text-lg text-gray-600">Authenticate with 3rd party providers</span>  
      </div>  
        <div class="flex items-center px-[12rem] mt-3 space-x-2">
        <span class="h-2 w-2 rounded-full bg-purple-500"></span>
        <span class="text-lg text-gray-600">Link multiple providers to user</span>  
      </div>  
        <div class="flex items-center px-[12rem] mt-3 space-x-2">
        <span class="h-2 w-2 rounded-full bg-purple-500"></span>
        <span class="text-lg text-gray-600">Protect routes in a single page application</span>  
      </div>  
      </div> 
      <div class="mx-auto max-w-lg py-6">
      <hr> 
      <div class="py-4 space-y-3">
        <h1 class="text-2xl font-bold font-signika">Share this course</h1>
        <div class="flex space-x-3">
          <span class="text-white rounded-full bg-purple-700 px-2 py-1"><i class="lab la-facebook-f"></i></span>
          <span class="text-white rounded-full bg-purple-700 px-2 py-1"><i class="lab la-twitter"></i></span>
          <span class="text-white rounded-full bg-purple-700 px-2 py-1"><i class="lab la-instagram"></i></span>
          <span class="text-white rounded-full bg-purple-700 px-2 py-1"><i class="lab la-linkedin"></i></span>
        </div>
      </div>
        
      <hr>
      </div>
         <div class="grid grid-cols-2 gap-3 px-[6rem] py-[2rem]">
           <div>
             <h1 class="text-2xl font-bold font-signika">Who's behind the course</h1>
           </div>
           <div>
             <div class="bg-white rounded-xl px-[2rem]">
               <h1 class="text-2xl font-bold font-signika">Course contents</h1>

             </div>
             
           </div>
           
         </div>
         <div class="w-[50rem] mx-auto py-[4rem]">
           <h1 class="text-2xl font-bold">About the {{route.query.title}}</h1>
           <div class="mt-4">
             Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, quos? Recusandae voluptatum aperiam quisquam error eveniet 
             ipsum! Facere neque illum sint velit, deserunt porro eos corporis consectetur quo quasi ipsa?
           </div>
         </div>
  </div>
</template>

<script setup>
import {useTitle, useDark, useToggle } from '@vueuse/core'
import {useRoute} from 'vue-router'
import {ref} from 'vue'

const course = ref('')

const route = useRoute()

if (route.query.title) {
  console.log(route.query.title);
  course.value = route.query.title;
const title = useTitle('BuzzSchool', { titleTemplate: `%s | ${route.query.title}` });

}



</script>

<style>

</style>