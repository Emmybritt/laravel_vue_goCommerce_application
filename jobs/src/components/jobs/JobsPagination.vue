<template>
  <div class="mt-3">
      <div class="flex space-x-1 items-center">
          <a href="" class="border px-3 py-0.5 rounded-full">Previous</a>
          <a href="" class="border px-3 py-0.5 rounded-full" v-for="i in 6" :key="i" >{{ i }}</a>
          <a href="" class="border px-3 py-0.5 rounded-full">Next</a>
      </div>
  </div>
</template>

<script setup>

</script>

<style>

</style>