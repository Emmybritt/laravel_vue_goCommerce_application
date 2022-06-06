<template>
  <div class="py-3 rounded-full">
      <div class="flex relative items-center px-6 justify-between">
          <div class="relative">
              <router-link :to="{name: 'Home'}" active-class="text-pink-400"><span class="las la-home text-3xl"></span></router-link>
          </div>
          <div>
              <img src="../assets/heart.png" class="h-[2rem] w-[2rem]" alt="">
          </div>
          <div>
              <span class="las la-wallet text-3xl"></span>
          </div>
          <div>
              <span class="las la-user text-3xl"></span>
          </div>
      </div>
  </div>
</template>

<script>

</script>

<style>

</style>