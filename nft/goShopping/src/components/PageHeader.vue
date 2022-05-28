<template>
  <div>
      <div class="bg-gray-900 px-20 py-1.5 flex justify-between font-roboto text-gray-300">
          <div class="flex items-center space-x-3">
              <p class="text-xs"><span class="lab la-gmail"></span> beritogwu@gmail.com</p>
              <p class="text-xs">24/7 Support:+234-701-6588-973</p>
          </div>
          <div class="space-x-2">
              <span class="lab la-facebook"></span>
              <span class="lab la-instagram"></span>
              <span class="lab la-linkedin"></span>
              <span class="lab la-twitter"></span>
          </div>
      </div>
      <MobileView />
      <DesktopView />
  </div>
</template>

<script setup>
import MobileView from "../components/MobileView.vue"
import DesktopView from "../components/DesktopView.vue"

</script>

<style>

</style>