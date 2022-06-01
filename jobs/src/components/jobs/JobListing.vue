<template>
  <div class="px-[6rem] space-x-6 flex py-[2rem]">
      <div class="md:w-1/3 sticky top-0">
          <JobFilter />
      </div>
      <div class="md:w-2/3">
          <ListJobs />
      </div>
  </div>
</template>

<script setup>
import ListJobs from './ListJobs.vue'
import JobFilter from './JobFilter.vue'

</script>

<style>

</style>