<template>
  <div class="relative">
    <div class="sticky top-0 z-50">
        <Header />
    </div>
    
    <router-view></router-view>
    <Footer />
    <div class="sm:hidden sticky w-full text-white mx-auto z-50 rounded-full glass bottom-1">
      <BottomNavigation />
    </div>
  </div>
</template>

<script setup>
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'
import BottomNavigation from '../components/BottomNavigation.vue'

</script>

<style>

</style>