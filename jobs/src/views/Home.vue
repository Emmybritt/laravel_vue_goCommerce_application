<template>
  <div class="bg-blue-50">
      <div>
        <BannerComponent />
        <HowItWorks />
        <JobsCategories />
        <LatestJobPost />
        <CompanyDesc />
        <NewsLetterSubscirption />
        <LatestBlog />
      </div>
  </div>
</template>

<script setup>
import BannerComponent from '../components/pages/BannerComponent.vue'
import HowItWorks from '../components/pages/HowItWorks.vue'
import JobsCategories from '../components/pages/JobsCategories.vue'
import LatestJobPost from '../components/pages/LatestJobPost.vue'
import CompanyDesc from '../components/pages/CompanyDesc.vue'
import NewsLetterSubscirption from '../components/pages/NewsLetterSubscirption.vue'
import LatestBlog from '../components/pages/LatestBlog.vue'


</script>

<style>

</style>