<template>
  <div>
      <Header />
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