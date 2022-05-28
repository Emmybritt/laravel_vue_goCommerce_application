<template>
  <div class="h-[13rem] relative flex items-center bg-sky-800">
      <h1 class="capitalize text-3xl text-white font-semibold font-signika tracking-wider ml-[6rem]">Find Your dream job</h1>
      <div class="absolute -bottom-3 w-full">
          <SortAndSearchFilter />
      </div>
  </div>
</template>

<script setup>
import SortAndSearchFilter from '../../components/jobs/SortAndSearchFilter.vue'

</script>

<style>

</style>