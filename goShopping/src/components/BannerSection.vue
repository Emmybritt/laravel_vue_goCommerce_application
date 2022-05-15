<template>
  <div class="bg-gradient-to-br relative from-blue-600 via-blue-600 opacity-3 to-slate-800">
      <div class="op ">
          <div class="h-[36rem]">
              <div class="flex justify-center items-center pt-6">
                  <div class="w-1/2">
                  <h1 class="text-blue-200 text-xl font-source font-bold mb-8 animate-fade-in-up">Discover goShopping Today</h1>
                  <h1 class="text-white mb-6 text-4xl font-signika font-bold animate-fade-in-down">Grow your business & Boost your sales at goShopping</h1>
                <p class="text-white">{{text}}</p>
                  <div class="mt-8 space-x-3">
                      <a href="" class="text-white bg-red-500 px-4 py-2 drop-shadow-sm rounded-lg hover:border-2 hover:border-red-300 text-lg font-source font-medium">Get started <span class="las la-angle-right"></span></a>
                      <a href="" class="text-white bg-purple-500 px-4 py-2 drop-shadow-sm rounded-lg hover:border-2 hover:border-purple-300 text-lg font-source font-medium"><span class="las la-video"></span> Watch Video</a>
                  </div>
                  </div>
                  <div>
                      <img src="../assets/icons/home-img.png" alt="" class="h-[25rem] animate-fad w-[25rem]">
                  </div>
              </div>
              
          </div>
          <div class="px-16 w-full -bottom-2 absolute">
              <div class="">
                  <div class="flex justify-evenly space-x-4">
                  <div class="bod drop-shadow-md rounded-md h-[6rem] w-[23rem]">
                      <div class="flex px-4 py-3">
                          <div>
                              <h1 class="text-white font-bold text-xl font-source">Easy to use and manage</h1>
                              <p class="text-gray-200 font-medium text-sm mt-2">Really got your back as it's easy to manage</p>
                          </div>
                          <div>
                              <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                              </span>
                          </div>
                      </div>
                    </div>
                    <div class="bg-white drop-shadow-md rounded-md w-[23rem]">
                        <div class="flex px-4 py-3">
                            <div>
                              <h1 class="text-gray-700 font-bold text-xl font-source">Affiliates supports</h1>
                              <p class="text-gray-700 leading-tight mt-2 font-medium text-sm">Affiliates helps you market your product at any point in time</p>
                          </div>
                          <div>
                              <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                              </span>
                          </div>
                        </div>
                        
                    </div>
                    <div class="bod drop-shadow-md rounded-md w-[23rem]">
                        <div class="flex px-4 py-3">
                          <div>
                              <h1 class="text-white font-bold text-xl font-source">Package recievable</h1>
                              <p class="text-gray-200 font-medium text-sm mt-2">100% Access to goShopping packages</p>
                          </div>
                          <div>
                              <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                    </svg>
                              </span>
                          </div>
                      </div>
                    </div>
                </div>
              </div>            
        </div>
      </div>
  </div>
</template>

<script setup>
    import {ref} from 'vue'

    let text = 'Lorem ipsum dolor sit amet consecteturadipisicing elit. Eius mollitia totam quis vero. Mollitia iste, nihil harum et inventore impedit expedita, nostrum minima, dolorum odio quasi! Sit magnam ducimus quas?';
    let i = 0;
    function typeWritter() {
        if (i < text.length) {
            text = text.charAt(i);
            i++;
         setTimeout(typeWritter, 4000);
        }
    }
   
    
</script>

<style>
    .op{
        background-color: rgba(0, 0, 0, 0.2);
        filter: blur(0.79px);
    }
    .bod {
        background-color: rgba(88, 0, 0, 0.4);
    }
</style>