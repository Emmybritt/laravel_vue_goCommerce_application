<template>
  <div class="px-[1rem] md:px-[4rem] my-[3rem]">
    <div class="flex items-center flex-col justify-center mx-auto max-w-xl">
      <h1 class="text-3xl text-white font-bold text-center uppercase">Bid and win from the world must secured nft's arts</h1>
      <p class="text-gray-400 tracking-snug py-[2rem] text-center">Welcome to the virtual world's one-stop-shop for the very best digital assets. here you can search and buy creator's ASSETS with SAND to incoporprate them into your Land</p>
    </div>
    <div class="flex justify-center flex-wrap items-center py-4 mx-auto space-x-2 md:space-x-6">
      <button class="border bg-gradient-to-r from-[#B225CE] via-[#5732C4] to-[#132394] rounded-md px-4 py-2 text-gray-300 font-bold">Newest Item</button>
      <button class="border rounded-md px-4 py-2 text-gray-300 font-bold">Latest Sales</button>
      <button class="border rounded-md px-4 py-2 text-gray-300 font-bold">Latest listenings</button>
      <button class="border rounded-md px-4 py-2 text-gray-300 font-bold">Percels & Estates</button>
    </div>
    <div class="grid md:grid-cols-4 grid-cols-2 lg:grid-cols-4 mt-4 gap-2">
      <div v-for="(nft, i) in nftDatas" :key="i" class="glass border rounded-xl w-full p-2">
        <div class="border border-gray-300 h-[15rem] rounded-md">
          <img :src="`http://localhost:3000/${nft.image}`" class="h-[15rem] w-full object-cover rounded-md" alt="">
        </div>
        <NftDesc :data="nft" />
      </div>
    </div>
  </div>
</template>

<script setup>
import NftDesc from './NftDesc.vue'
const props = defineProps({
  nftDatas: Array,
})

</script>

<style>

</style>