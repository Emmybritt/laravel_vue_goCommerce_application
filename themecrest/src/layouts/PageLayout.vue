<template>
  <div>
      <Header />
      <router-view></router-view>
      <Footer />
  </div>
</template>

<script setup>
import Header from '../components/main/Header.vue'
import Footer from '../components/main/Footer.vue'
</script>

<style>

</style>