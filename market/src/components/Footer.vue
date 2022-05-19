<template>
  <div>
      <div class="py-[2rem] bg-slate-600">
          <div class="flex flex-col items-center justify-center py-6">
              <h1 class="font-medium text-white">Trade Alert - Delivering the latest product trends and industry news straight to your inbox.</h1>
              <div class="space-y-2">
                  <div class="flex mt-4 space-x-2">
                    <input type="text" style="background-color:rgba(0,0,0,0.7)" class="ring-1 w-[30rem] text-slate-300 ring-white px-3 py-2 rounded-lg" placeholder="Enter Your Email address">
                    <button class="px-6 text-white py-2 ring-1 ring-white rounded-md">Subscribe</button>
                  </div>
                  <p class="text-sm text-slate-300">We’ll never share your email address with a third-party.</p>
              </div>
          </div>
          <div class="px-[4rem]">
            <div class="grid grid-cols-4 gap-4">
                <div>
                    <h1 class="font-signika text-lg text-white mb-2">Customer Services</h1>
                    <div class="text-slate-100 text-sm">
                        <ul>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Help Center</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Report Abuse</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Submit a Dispute</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Policies & Rules</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Get Paid for Your Feedback</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h1 class="font-signika text-lg text-white mb-2">Get Paid for Your Feedback</h1>
                    <div class="text-slate-100 text-sm">
                        <ul>
                            <li><a href="" class="hover:text-purple-300 hover:underline">About GoCommerce.com</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">About Alibaba Group</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Sitemap</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">GoCommerce.com Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h1 class="font-signika text-lg text-white mb-2">Source on GoCommerce.com</h1>
                    <div class="text-slate-100 text-sm">
                        <ul>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Resources</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">All Categories</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Ready to Ship</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Buyer Partners</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">GoCommerce.com Select</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    

                    <h1 class="font-signika text-lg text-white mb-2">Trade Services</h1>
                    <div class="text-slate-100 text-sm">
                        <ul>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Trade Assurance</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">All Categories</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Business Identity</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Logistics Service</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Production Monitoring & Inspection Services</a></li>
                            <li><a href="" class="hover:text-purple-300 hover:underline">Letter of Credit</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>  
          </div>
          <hr class="mt-4">
          <div>
              <div class="flex justify-evenly items-center">
                  <div class="flex items-center">
                      <span class="text-white text-lg">Download:</span>
                      <img src="../assets/categories/appstore.png" class="h-[2.5rem]" alt="">
                      <img src="../assets/categories/playstore.png" class="h-[2rem]" alt="">
                  </div>
                  <div class="flex space-x-1">
                      <h1 class="text-white">FOLLOW US ON:</h1>
                      <div class="bg-white px-2 rounded-lg py-1/2">
                          <span class="lab la-facebook-f text-slate-700"></span>
                      </div>
                      <div class="bg-white px-2 rounded-lg py-1/2">
                          <span class="lab la-instagram text-slate-700"></span>
                      </div>
                      <div class="bg-white px-2 rounded-lg py-1/2">
                          <span class="lab la-twitter text-slate-700"></span>
                      </div>
                      <div class="bg-white px-2 rounded-lg py-1/2">
                          <span class="lab la-youtube text-slate-700"></span>
                      </div>
                      <div class="bg-white px-2 rounded-lg py-1/2">
                          <span class="lab la-linkedin text-slate-700"></span>
                      </div>
                      
                  </div>
              </div>
              <div class="text-center text-white mt-3 text-sm">
                  @{{ new Date().getFullYear() }} All Right Reserved GoCommerce.com
              </div>
          </div>
      </div>
  </div>
</template>

<script setup>

</script>

<style>

</style>