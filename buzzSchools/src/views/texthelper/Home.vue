<template>
  <div class="bg-gradient-to-r from-blue-800 via-blue-700 to-blue-600">
      <HeaderComponent />
      <div class=" flex items-center  h-screen justify-center flex-col">
          <div class="w-[50%] mx-auto">
              <h1 class="text-white text-5xl font-bold font-signika">The Best Online Test App</h1>
              <p class="text-white mt-4 text-lg">This is an online platform for any student to take live text Examination</p>
              <div class="mt-6 space-x-3">
                  <a href="#getStarted" class="text-lg font-bold bg-white px-6 py-3 rounded text-blue-800">Get Started</a>
                  <a href="#LearnMore" style="background-color:rgba(0,0,0,0.3)" class="text-lg text-white font-bold px-6 py-3 rounded ">Learn More</a>
              </div>
          </div>
      </div>
      <div id="getStarted" class="bg-white py-[6rem] text-gray-700">
          <div class="px-[8rem] py-6">
              <h1 class="text-2xl font-bold">Select Examination Type</h1>
              <div class="flex">
                  <div class="w-1/2">
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex rounded shadow-md px-3 py-2">
                            <div><img src="" alt=""></div>
                            <div>
                                <h1 class="capitalize">unified tertiary matriculation examination(UTME)</h1>
                            </div>
                        </div>
                        <div class="flex rounded shadow-md px-3 py-2">
                            <div><img src="" alt=""></div>
                            <div>
                                <h1 class="capitalize">Joint admission matriculation examination(JAMB)</h1>
                            </div>
                        </div>
                        <div class="flex rounded shadow-md px-3 py-2">
                            <div><img src="" alt=""></div>
                            <div>
                                <h1 class="capitalize">Senior school certification examination (SSCE)</h1>
                            </div>
                        </div>
                        <div class="flex rounded shadow-md px-3 py-2">
                            <div><img src="" alt=""></div>
                            <div>
                                <h1 class="capitalize">institute of chatared accountant in nigeria(ICAN) </h1>
                            </div>
                        </div>
                        <div class="flex shadow-md px-3 py-2">
                            <div><img src="" alt="">Junior school certification examination (JSCE)</div>
                            <div>
                                <h1 class="capitalize"></h1>
                            </div>
                        </div>
                        <div class="flex shadow-md px-3 py-2">
                            <div><img src="" alt=""></div>
                            <div>
                                <h1 class="capitalize">Post unified tertiary matriculation examination(POST UTME)</h1>
                            </div>
                        </div>
                        <div class="flex shadow-md px-3 py-2">
                            <div><img src="" alt=""></div>
                            <div>
                                <h1 class="capitalize">National Common Entrance examination(NECO)</h1>
                            </div>
                        </div>
                        <div class="flex shadow-md px-3 py-2">
                            <div><img src="" alt=""></div>
                            <div>
                                <h1 class="capitalize">interim joint matriculation board(IJMB)</h1>
                            </div>
                        </div>
                        <div class="flex shadow-md px-3 py-2">
                            <div><img src="" alt=""></div>
                            <div>
                                <h1 class="capitalize">Nigeria Certificate of education (NCE)</h1>
                            </div>
                        </div>
                        <div class="flex shadow-md px-3 py-2">
                            <div><img src="" alt=""></div>
                            <div>
                                <h1 class="capitalize">School Examination management System</h1>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="w-1/2">
                  <div class="shrink-0 flex w-[full] h-[20rem]">
                    <img src="../../assets/images/about-students.png" class="object-contain w-full" alt="">
                    <div>
                        <span class="rounded-full h-6 w-6 border"></span>
                    </div>
                  </div>
                  </div>
              </div>
          </div>
          
      </div>
  </div>
</template>

<script setup>
import HeaderComponent from '../../components/textminner/HeaderComponent.vue'

</script>

<style>

</style>