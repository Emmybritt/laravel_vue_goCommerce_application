<template>
  <div>
      <div class="sticky top-0 z-50">
        <Header />
      </div>
      <router-view></router-view>
      <Footer />
  </div>
</template>

<script setup>
import Header from '../../components/page/Header.vue'
import Footer from '../../components/page/Footer.vue'

</script>

<style>

</style>