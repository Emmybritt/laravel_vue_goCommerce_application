<template>
  <div>
      <Header @ShowSearchModal="ShowModal" />
      <router-view></router-view>
      <Footer />
  </div>
</template>

<script setup>
import Header from '../../components/page/Header.vue'
import Footer from '../../components/page/Footer.vue'



function ShowModal() {
  alert('i am cliked');
}

</script>

<style>

</style>