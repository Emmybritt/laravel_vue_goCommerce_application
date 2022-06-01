<template>
  <div class="text-white">
      <div class="flex sm:px-[4rem]  items-center px-[1rem] py-[1rem]" :class="[scrollPosition > 100 || shouldShow ? 'glass animate-fade-in-down' : '']">
          <div class="md:w-[10%] w-full flex justify-between items-center text-gray-300">
            <h1>NFT</h1>
            <button @click="handleShowNav" class="block sm:hidden">
              <span v-if="!shouldShow" class="las la-bars text-2xl"></span>
              <span v-else class="las la-times text-2xl"></span>
          </button>
          </div>
          <div class="space-x-4 hidden sm:block flex-auto capitalize w-[70%] text-gray-300">
              <span><a href="" class="text-[#B225CE]">home</a></span>
              <span><a href="" class="capitalize">explore</a></span>
              <span><a href="">marketplace</a></span>
              <span><a href="">news</a></span>
              <span><a href="">games</a></span>
              <span><a href="">login</a></span>
          </div>
          <div class="flex-auto hidden sm:block">
              <div class="flex space-x-3 items-center">
                  <div>
                      <button class="circle">
                        <span class="las la-shopping-cart text-gray-400"></span>
                      </button>
                  </div>
                  <div>
                      <p 
                      class="bg-gradient-to-r 
                      from-[#B225CE] 
                      via-[#5732C4] 
                      to-[#132394] 
                      text-sm 
                      font-bold px-4 py-1">
                      <a href="">Buy Now</a>
                      </p>
                  </div>
              </div>
          </div>
      </div>
      <div v-if="shouldShow" class="block relative sm:hidden bg-gray-500 px-4 py-6 animate-fade-in-up glass">
        <div class="flex divide-y divide-gray-700 flex-col">
          <div class="py-3">
              <a href="">Home</a>
          </div>
          <div class="py-3">
              <a href="">Explore</a>
          </div>
          <div class="py-3">
              <a href="">Marketplace</a>
          </div>
          <div class="py-3">
              <a href="">Investors</a>
          </div>
          <div class="py-3">
              <a href="">News</a>
          </div>
          <div class="py-3">
              <a href="">Create account</a>
          </div>
          <div class="py-3">
              <a href="">Login</a>
          </div>
      </div>
      <a href="">
          <div class="
          mt-3
          shadow
          shadow-purple-500
          bg-gradient-to-r 
        from-[#B225CE] 
        via-[#5732C4] 
         to-[#132394]
         text-center py-3 rounded-full
         ">Buy Now</div>
      </a>
      </div>
      
  </div>
</template>

<script setup>
import { onMounted, ref } from 'vue'
const scrollPosition = ref(null)

function handlecroll () {
    scrollPosition.value = window.scrollY;
}

onMounted(() => window.addEventListener('scroll', handlecroll));


const shouldShow = ref(false);

function handleShowNav() {
    shouldShow.value = !shouldShow.value;
}


</script>

<style>
.circle{
    background: white;
    height: 1.9em;
    width: 1.9rem;
    border-radius:50%;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(2rem);
    display:flex;
    justify-content: center;
    align-items: center;
}
.glass {
    background: white;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(2rem);
}

</style>