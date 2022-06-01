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
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'

</script>

<style>

</style>