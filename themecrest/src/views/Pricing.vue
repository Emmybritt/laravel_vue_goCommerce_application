<template>
  <div class="font-source pb-4">
      <div class="h-[40rem] w-[60%] mx-auto">
          <h1 class=" text-4xl font-semibold font-signika text-center py-4">Pricing plans for teams of all size</h1>
          <p class="text-center">Choose an affordable plan that's packed with the best features for engaging your audience, 
              creating customer loyalty, and driving sales.</p>

             <div class="max-w-md mx-auto mt-4">
                 <div style="padding:2px" class="bg-indigo-700 rounded-xl px-4 flex">
                  <label for="MonthlyBilling" class="bg-white cursor-pointer text-center rounded-xl py-3 font-bold w-1/2 text-indigo-800">
                    <input id="MonthlyBilling" type="radio" class="hidden" v-model="current" :value="MonthlyBilling">
                    Monthly billing
                  </label>
                  <label for="YearlyBilling" class="text-center cursor-pointer rounded-xl py-3 font-bold w-1/2 text-indigo-100">
                    <input id="YearlyBilling" type="radio" class="hidden" v-model="current" :value="YearlyBilling">
                    Yearly billing
                  </label>
              </div>
             </div>
              <KeepAlive>
                <component :is="current"></component>    
              </KeepAlive>            
      </div>
  </div>
</template>

<script setup>
import {shallowRef} from 'vue'
import MonthlyBilling from '../components/MonthlyBilling.vue'
import YearlyBilling from '../components/YearlyBilling.vue'

const current = shallowRef(MonthlyBilling);

</script>

<style>

</style>