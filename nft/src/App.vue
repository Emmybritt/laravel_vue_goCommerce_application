<script setup>

</script>

<template>
<div class="text bg-gradient-to-tr font-source from-[#000316] to-[#000316] via-[#040c2c] h-full">
  <router-view></router-view>
</div>
</template>

<style>
body::-webkit-scrollbar {
  width: 12px;               /* width of the entire scrollbar */
}

body::-webkit-scrollbar-track {
  background: #eee;        /* color of the tracking area */
}

body::-webkit-scrollbar-thumb {
  background-color: darkslateblue;    /* color of the scroll thumb */
  border-radius: 20px;       /* roundness of the scroll thumb */
  border: 3px solid #eee
  /* border: 3px solid orange;  creates padding around scroll thumb */
}

</style>
