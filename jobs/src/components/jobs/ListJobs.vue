<template>
  <div>
      <div class="flex  text-sm text-gray-500 justify-between items-center">
          <p>Showing 68 results</p>
          <div class="flexspace-x-2">
              <span>Sort by</span>
              <select name="" id="" class="outline-none border rounded-sm">
                  <option value="">Newest post</option>
                  <option value="">Oldest post</option>
                  <option value="">Newest post</option>
              </select>
          </div>
      </div>
      <!-- Job Listing section here -->
      <div v-for="i in 6" :key="i" class="flex flex-col mt-4">
          <div class="bg-white border rounded-lg px-[1rem] py-[0.5rem] shadow-md">
              <!-- Job Header -->
              <div class="flex justify-between">
                  <div class="flex space-x-3">
                      <div class="bg-cyan-600 flex items-center justify-center text-white font-bold px-2 rounded">
                          <span class="lab  la-twitter"></span>
                      </div>
                      <div>
                          <router-link :to="{name: 'SingleJobsView', query: {title: 'senior ui ux designer'} }" class="font-bold font-signika text-sm">Senior UI/UX Designer</router-link>
                          <div class="flex text-xs text-gray-500 items-center space-x-4">
                          <span>Dribble</span>
                          <div>
                              <span class="las la-geolocation"></span>
                              <span>San Francisco, USA</span>
                          </div>
                      </div>
                      </div>
                  </div>
                  <div>
                      <h1 class="font-bold font-signika text-sm">$3k - $5k</h1>
                  </div>
              </div>
              <!-- Job Header -->
              <!-- Job Description -->

              <div class="text-sm text-gray-600 mt-2">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit libero, cum laboriosam atque dolorum animi 
                  facilis nobis ipsam doloremque magni harum eveniet repellat voluptatum nam non. Obcaecati similique exercitationem soluta 
                  beatae consequatur!
              </div>
              <!-- Job Description -->
              <!-- Tags section -->
              <div class="flex justify-between pt-2">
                  <div class="flex flex-wrap">
                    <span class="bg-gray-100 rounded-full px-3 py-1 text-xs font-bold">Remote</span>
                    <span class="bg-gray-100 rounded-full px-3 py-1 text-xs font-bold">UI</span>
                    <span class="bg-gray-100 rounded-full px-3 py-1 text-xs font-bold">Figma</span>
                </div>
                <p class="text-xs text-gray-500">11 jan 2022</p>
              </div>
            
            <!-- Tags section -->
          </div>
      </div>
      <!-- Job Listing section ends here -->
      <JobsPagination />
  </div>
</template>

<script setup>
import JobsPagination from './JobsPagination.vue'

</script>

<style>

</style>