<template>
  <div class="font-source">
      <div class="bg-gradient-to-r z-40 from-slate-900 via-slate-700 to-slate-900 sticky top-0 opacity-96">
          <span class="float-right text-xl text-white mr-12 mt-3 block md:hidden"><i class="las la-bars"></i></span>
          <nav class="flex justify-between items-center px-[6rem] py-3"><!--Begining of navbar-->
            <div class="flex items-center justify-between">
              <!-- Logo here -->
              <router-link :to="{name: 'Index'}" class="text-white text-lg capitalize font-bold ">themecrest</router-link>
                <!-- Nav 2 starts here -->
            <div class="md:flex space-x-2 ml-[4rem] hidden">
                <div>
                    <span class="text-xl"><i class="las la-search text-xl sm:text-white text-gray-700"></i></span>
                </div>
              <a href="#">
                  <div>
                    <span class="text-xl"><i class="lar la-heart text-xl sm:text-white relative text-gray-700">
                        <b class="text-xs bg-red-500 rounded-full px-1 -right-2 -top-1.5 absolute text-white">3</b></i>
                    </span>
                  </div>
              </a>
              <a href="">
                <span class="text-xl"><i class="las la-user sm:text-white text-gray-700"></i></span>
              </a>
              <div>
                <span class="text-xl"><i class="las la-shopping-cart text-xl sm:text-white relative text-gray-700">
                    <b class="text-xs bg-red-500 rounded-full px-1  -right-2 -top-1.5 absolute text-white">0</b></i>
                </span>
                </div>
            </div>
            <!-- Nav 2 ends here -->
            </div>
            <div class="mr-16 md:block hidden">
              <ul class="flex space-x-6">
                  <li>
                  <router-link :to="{name: 'Index'}" class="font-normal text-slate-100 text-md hover:text-slate-300">home</router-link>
                </li>
                <!-- All items starts here -->
                <div class="group">
                    <li class="relative" >
                  <span>
                    <a href="" class="font-normal text-slate-100 text-md capitalize hover:text-slate-300">Categories &nbsp;<span class="las la-angle-down"></span></a>
                  </span>
                  <div class="bg-white ml-4 group-hover:block hidden h-6 w-8 absolute rotate-45 -bottom-[1.9rem]"></div>
                  <ul class="absolute group-hover:block hidden top-[2rem] bg-white py-[1rem] space-y-1 text-sm rounded-md shadow-md w-[20rem]">
                      <div class="flex">
                          <div class="w-1/2 space-y-1">
                            <li class="hover:bg-slate-400 px-5 hover:text-white"><a href="#">Web templates</a></li>
                            <li class="hover:bg-slate-400 px-5 hover:text-white"><a href="#">Animations</a></li>
                            <li class="hover:bg-slate-400 px-5 hover:text-white"><a href="#">Arts designs</a></li>
                            <li class="hover:bg-slate-400 px-5 hover:text-white"><a href="#">Logo</a></li>
                            <li class="hover:bg-slate-400 px-5 hover:text-white"><a href="#">Web components</a></li>
                          </div>
                          <div class="w-1/2 space-y-1">
                            <li class="hover:bg-slate-400 px-5 hover:text-white"><a href="#">Web templates</a></li>
                            <li class="hover:bg-slate-400 px-5 hover:text-white"><a href="#">Animations</a></li>
                            <li class="hover:bg-slate-400 px-5 hover:text-white"><a href="#">Arts designs</a></li>
                            <li class="hover:bg-slate-400 px-5 hover:text-white"><a href="#">Logo</a></li>
                            <li class="hover:bg-slate-400 px-5 hover:text-white"><a href="#">Web components</a></li>
                          </div>
                      </div>
                    
                  </ul>
                </li>
                </div>
                
                <!-- All items Ends here -->
                <li>
                  <a href="" class="font-normal text-slate-100 text-md hover:text-slate-300 capitalize">Blogs</a>
                </li>
                <li>
                  <a href="" class="font-normal text-slate-100 text-md hover:text-slate-300 capitalize">faq</a>
                </li>
                <li>
                  <a href="" class="font-normal text-slate-100 text-md capitalize hover:text-slate-300">Login</a>
                </li>
                <li>
                  <a href="" class="font-normal text-slate-100 text-md capitalize hover:text-slate-300">Sign up</a>
                </li>
                <li>
                  <router-link :to="{name: 'Pricing'}" class="font-normal text-slate-100 text-md capitalize hover:text-slate-300">Pricing</router-link>
                </li>
              </ul>
            </div>
          </nav>
        </div>
  </div>
</template>

<script setup>

</script>

<style>

</style>