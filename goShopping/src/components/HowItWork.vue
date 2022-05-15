<template>
  <div class="py-[9rem] font-source px-6 py-3 rounded-full">
      <div>
        <h1 class="font-bold text-center font-signika text-4xl">Here is how it work</h1>
        <p class="text-center font-source text-xl font-medium mt-2 py-3">Starting your journey as an affiliate marketer on goShopping is very much easier and straigthforward</p>
      </div>
        <div class="px-[9rem]">
           <div class="flex justify-evenly space-x-3">
          <div>
              <h1 class="font-bold font-source mb-3 text-xl text-purple-700">01: Create an account</h1>
              <p class="font-source">The first thing you need to do is to create an account by filling <a href="">affiliate registeration form</a>. You will need to first pay a N3000 one time payment.</p>
          </div>
          <div>
              <h1 class="font-bold font-source mb-3 text-xl text-purple-700">02: Promotes existing products</h1>
              <p class="font-source">Pick any of our products and start promoting it using the affiliate link that will be provided for you.</p>
          </div>
          <div>
              <h1 class="font-bold font-source mb-3 text-xl text-purple-700">03: Request for payment</h1>
              <p class="font-source">Get paid when a customer buys through your affiliate link. Commissions are deposited into your bank account every Friday.</p>
          </div>
      </div> 
        </div>
        <div class="flex justify-evenly items-center mt-6">
            
             <div class="mt-6 flex bg-slate-800 hover:ring cursor-pointer hover:ring-slate-500 hover:ring-offset-2 items-center text-white px-6 py-3 rounded-full">
         <div class="text-lg uppercase">
           <router-link :to="{name: 'AffiliateRegister'}">Apply now</router-link>
              
         </div>
          <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </div>
    </div> 
        </div>
          
  </div>
</template>

<script setup>

</script>

<style>

</style>