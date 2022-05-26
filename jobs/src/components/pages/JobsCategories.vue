<template>
  <div>
      <div class="h-[20rem py-[3rem] px-[8rem]">
          <div class=" w-[70%]  mx-auto">
              <h1 class="text-3xl font-extrabold font-signika text-center">Browse Jobs by <span class="text-blue-500">Categories</span> </h1>
          <p class="text-center text-gray-500 my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem consequatur minima, illo iusto nam voluptate, 
              debitis atque possimus distinctio commodi adipisci at ea quo doloremque rem? Molestias explicabo dolore laudantium!</p>
          </div>
          <div class="grid grid-cols-6 gap-3">
              <a href="" v-for="job in JobsCategories" :key="job.title">
                <div class="bg-white flex space-y-1 flex-col px-[1rem] py-[1rem] rounded-2xl shadow-sm">
                    <div>
                        <span :class="[job.icon, job.color, job.background]" class="text-xl px-1 py-1 rounded-md"></span>
                    </div>
                    <div>
                        <h1 class="text-sm font-bold text-gray-700 capitalize">{{job.title}}</h1>
                    </div>
                    <p class="text-xs mt-2 font-bold text-gray-500">{{job.postedJobs}}+ post Jobs</p>
                </div>
              </a>
          </div>
          
      </div>
      
  </div>
</template>

<script setup>
import {reactive} from 'vue'

const JobsCategories = reactive([
    {title: "Design & Development", icon: 'lab la-figma', color: 'text-emerald-600', background: 'bg-emerald-100', postedJobs: '2k'},
    {title: "Writting & Translation", icon: 'las la-book', color: 'text-yellow-600', background: 'bg-yellow-100', postedJobs: '1.2k'},
    {title: "Marketing", icon: 'las la-notification', color: 'text-purple-600', background: 'bg-purple-100', postedJobs: '3k'},
    {title: "Front end Development", icon: 'lab la-figma', color: 'text-blue-600', background: 'bg-blue-100', postedJobs: '2k'},
    {title: "Project Management", icon: 'lab la-figma', color: 'text-pink-600', background: 'bg-pink-100', postedJobs: '1.9k'},
    {title: "Education & Learning", icon: 'las la-cap', color: 'text-cyans-600', background: 'bg-cyan-100', postedJobs: '2k'},
])

</script>

<style>

</style>