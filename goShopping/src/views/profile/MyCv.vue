<template>
  <div class="subpixel-antaliased bg-gradient-to-br px-1 from-cyan-200 py-4 h-screen via-pink-100 to-slate-50">
      <div style="" class="md:flex rounded md:mx-[10rem] bg-gray-50 shadow-md">
        <div class="md:w-auto text-gray-100 bg-indigo-900">
          <div style="background:rgba(0,0,0,0.3)" class="px-3 py-4">
            <SideBar></SideBar>
          </div>
        </div>
        <div>
          <MainBar></MainBar>
        </div>
      </div>
  </div>
</template>

<script setup>
import SideBar from '../../components/MyCvComponent/SideBar.vue'
import MainBar from '../../components/MyCvComponent/MainBar.vue';

</script>

<style>

</style>