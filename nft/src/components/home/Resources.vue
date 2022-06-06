<template>
  <div class="px-[1rem] md:px-[4rem] my-[3rem]">
    <div class="flex items-center flex-col justify-center mx-auto max-w-xl">
      <h1 class="text-3xl text-white font-bold text-center uppercase">latest resources form Somalto</h1>
    </div>
    <div class="py-4 mt-4">
       <div class="grid grid-cols-2 gap-2 md:grid-cols-3">
        <div v-for="i in 4" :key="i" class="glass w-full h-[17rem] md:h-[14rem] border border-gray-600 flex md:flex-row flex-col rounded-sm">
            <div class="md:w-1/2 p-1">
                <img src="../../assets/nftimages/news1.jpeg" class="h-full rounded-md object-cover" alt="">
            </div>
            <div class="md:w-1/2 p-1">
            <div class="flex flex-col h-full items-center justify-evenly">
                <div>
                    <h1 class="text-gray-300 font-bold leading-snug font-signika">How to Easily Setup a MetaMask Wallet</h1>
                    <p class="text-gray-400 text-sm font-normal">Introducing you to how you can setup a meta mask wallet, with concrete guids & steps</p>
                </div>
               <div>
                   <span class="text-sm text-gray-400 text-left">Apr 01 15 min read more..</span>
               </div>
            </div>
                
            </div>
        </div>
    </div> 
    </div>
    
  </div>
</template>

<script setup>

</script>

<style>

</style>