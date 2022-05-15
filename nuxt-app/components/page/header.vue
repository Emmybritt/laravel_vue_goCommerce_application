
<script setup>
  const shouldShow = ref(false);

  function togglecontent1 () {
    shouldShow.value = !shouldShow.value
  }
</script>

<template>
  <div class="">
    <p class="bg-gradient-to-r antialiased from-emerald-600 py-0.5 via-indigo-400 to-pink-600"></p>
    <!-- Mobile Header -->
      <SizeDesktop :shouldShow="shouldShow" @togglecontent1="togglecontent1" />

  </div>
</template>


<style>
.myBackground{
  background-color: rgba(0, 0, 0, 0.1);
  /* z-index: -2; */
}

</style>