<template>
  <div class="lg:px-[8rem] py-[2rem]">
      <div class="flex flex-col space-y-8 justify-between lg:flex-row">
        <div class="lg:w-1/2">
        <img src="../../assets/images/about-students.png" alt="">
        </div>
        <div class="lg:w-1/2">
          <div class="space-y-6">
            <div>
                <h1 class="text-orange-600 uppercase font-bold font-signika text-2xl mb-3 md:text-left text-center">About Us</h1>
                <h1 class="text-3xl font-signika font-bold">We Are Providing The Best Online Courses</h1>
            </div>
            <p class="text-lg font-source text-gray-700 mb-[3rem] leading-snug">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quibusdam, corrupti ipsum provident eveniet illum, enim sit eaque, 
                deleniti suscipit ex laboriosam accusantium fuga totam ducimus? Sequi quae voluptatem atque.</p>
                <div class="">
                    <router-link :to="{name: 'About'}" class="bg-orange-600 rounded-full text-white px-6 py-3 font-bold font-source">Learn More</router-link>
                </div>
          </div>
            
          </div>
      </div>
  </div>
</template>

<script setup>

</script>

<style>

</style>