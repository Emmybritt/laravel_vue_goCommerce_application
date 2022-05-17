<template>
<div class=" b-imahe">
    <div class="bg-gradient-to-r opacity-[0.91] from-slate-900 via-slate-600 to-purple-300 bg-transparent">
      <div class="flex" >
          <div class="w-2/3 flex flex-col justify-center items-center h-[30rem] py-4">
          <div class="w-[60%] mx-auto space-y-6">
              <h1 class="uppercase tracking-wide font-source font-bold text-orange-300">Start Learning from home</h1>
              <h1 class="text-4xl text-white font-extrabold font-signika">Get Online Courses from Experienced And Experts</h1>
              <p class="text-lg font-medium leading-snug text-purple-100 ">We are providing high-quality online courses to inprove your skills. Our all instructor are highly experienced and experts.</p>
              <div class="flex space-x-3">
                  <router-link :to="{name: 'AllCourses'}" class="bg-orange-600 font-bold text-white px-5 rounded-md py-3 hover:bg-orange-800 hover:text-white">Find Courses</router-link>
                  <a href="" class="bg-white font-bold text-orange-700 rounded-md px-5 py-3 hover:bg-orange-800 hover:text-white">Explore More</a>
              </div>
          </div>
            
          </div>
          <div class="w-1/3 flex flex-col justify-center items-center">
          <h3 class="text-white font-medium text-lg">
            Learn Modern, cutting edge technologies and other associated courses from core-team members and 
            industry experts with our premium tutorials and video courses
          </h3>
          <div>
            <form action="" class="w-full mt-6">
              <div class="w-full">
                <input type="text" placeholder="Your email" class="font-bold outline-none rounded-md px-3 py-2 w-full text-sm text-gray-600">
              </div>
              <div class="w-full">
              <button class="uppercase w-full bg-orange-500 text-white px-4 py-2 rounded-md">Start Learning</button>
              </div>
            </form>
          </div>
          </div>
      </div>
  </div>
</div>
  
</template>

<script setup>

</script>

<style>
.b-imahe{
  background-image: url('../../assets/images/threestudent.png');
  background-size:cover
}

</style>