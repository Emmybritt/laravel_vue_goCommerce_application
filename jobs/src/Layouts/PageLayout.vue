<template>
  <div>
  <div class="sticky z-50 top-0">
    <Header />
  </div> 
      <router-view></router-view>
      <Footer />
  </div>
</template>

<script setup>
import Header from '../components/pages/Header.vue'
import Footer from '../components/pages/Footer.vue'

</script>

<style>

</style>