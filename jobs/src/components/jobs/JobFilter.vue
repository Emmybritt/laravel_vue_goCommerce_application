<template>
  <div class="space-y-4 font-source">
      <div class="">
          <h1 class="font-bold font-signika text-lg">Job type</h1>
            <div class="mt-2 space-y-2">
                <div class="flex space-x-2 items-center">
                    <input type="checkbox" name="" checked id="fulltimejob">
                    <label for="fulltimejob">Full Time Job</label>
                </div>
                <div class="flex space-x-2 items-center">
                    <input type="checkbox" name="" checked id="parttimejob">
                    <label for="parttimejob">Part Time Job</label>
                </div>
                <div class="flex space-x-2 items-center">
                    <input type="checkbox" name="" id="intershipjob">
                    <label for="intershipjob">Intership Job</label>
                </div>
                <div class="flex space-x-2 items-center">
                    <input type="checkbox" name="" class="" id="remotejob">
                    <label for="remotejob">Remote Job</label>
                </div>
            </div>
      </div>
      <div class="py-3">
          <h1 class="font-bold font-signika text-lg">Salary</h1>
          <div class="flex pt-2 justify-between items-center">
            <span>$0</span> <span>${{ salaryRange}},000</span>
          </div>
            <input type="range" class="w-full" v-model="salaryRange">
      </div>
      <div class="">
          <h1 class="font-bold font-signika text-lg">Experience Level</h1>
            <div class="mt-2 space-y-2">
                <div class="flex space-x-2 items-center">
                    <input type="checkbox" name="" checked id="entrylevel">
                    <label for="entrylevel">Entry/Junior</label>
                </div>
                <div class="flex space-x-2 items-center">
                    <input type="checkbox" name="" checked id="middle">
                    <label for="middle">Middle</label>
                </div>
                <div class="flex space-x-2 items-center">
                    <input type="checkbox" name="" id="senior">
                    <label for="senior">Senior</label>
                </div>
            </div>
      </div>
      
  </div>
</template>

<script setup>
import {ref} from 'vue'

const salaryRange = ref();

</script>

<style>

</style>