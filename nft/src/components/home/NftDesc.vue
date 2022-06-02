<template>
  <div class="pt-[2rem]">
    <div class="space-x-2 text-sm text-white font-medium font-signika uppercase">
      <span>#{{data.uniqueId}}</span>
      <span>{{data.name}}</span>
    </div>
    <div class="flex items-center py-1 justify-between">
      <div class="flex">
        <span class="bg-gradient-to-r from-[#B225CE] via-[#5732C4] text-sm text-white rounded-md px-4 to-[#132394] ">Epic</span>
      </div>
      <div>
        <span class="text-gray-300 text-sm">22/50</span>
      </div>
    </div>
    <div class="flex items-center justify-between">
      <div class="text-gray-300 space-x-2 font-bold font-signika text-sm">
        <span class="lab la-ethereum tex-xl text-green-500"></span>
        <span>{{data.price}} ETH</span>
      </div>
      <div>
        <button class="circle">
          <span class="las la-shopping-cart  text-gray-300"></span>
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  data: Object,
})

</script>

<style>

</style>