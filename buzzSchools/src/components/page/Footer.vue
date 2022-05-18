<template>
<div>
  <div class="bg-purple-50 py-[2rem] px-[6rem] font-source">
      <div class="grid grid-cols-5 gap-3">
        <div>
            <h1 class="text-gray-700 uppercase font-bold font-signika text-sm my-2">About US</h1>
            <div class="text-xs">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat fugit tempore asperiores soluta quod. 
              A id minus eveniet dolore asperiores ducimus illo? Et blanditiis doloribus, molestiae vero ipsam mollitia nesciunt.
            </div>
        </div>
        <div>
          <h1 class="text-gray-700 uppercase font-bold font-signika text-sm my-2">QuickLinks</h1>
          <div>
            <ul>
              <li><a href="#">GoCommerce market</a></li>
              <li><a href="#">NFT market</a></li>
              <li><a href="#">GoCommerce market</a></li>
              <li><a href="#">Mintect solutions</a></li>
              <li><a href="#">Jobs</a></li>
            </ul>
          </div>
        </div>
        <div>
          <h1 class="text-gray-700 uppercase font-bold font-signika my-2 text-sm">Information</h1>
          <div>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Privacy and policy</a></li>
              <li><a href="#">Term of use</a></li>
              <li><a href="#">FAQS</a></li>
            </ul>
          </div>
        </div>
        <div>
          <h1 class="text-gray-700 uppercase my-2 font-bold font-signika text-sm">My Account</h1>
          <div>
            <ul>
              <li><router-link :to="{name: 'Login'}">Login</router-link></li>
              <li><router-link :to="{name: 'Register'}">Sign Up</router-link></li>
              <li><router-link :to="{name: 'Login'}">My cart</router-link></li>
            </ul>
          </div>
        </div>
        <div>
          <h1 class="text-gray-700 my-2 uppercase font-bold font-signika text-sm">Subscribe to our newsletter</h1>
            <p class="text-xs text-gray-600 font-medium">Please enter email to create or update your profile and manage your subscriptions</p>
          <div class="flex mt-3">
            <input type="text" class="outline-none px-3 border border-gray-200 rounded-l-lg text-sm" placeholder="Enter your email address...">
            <button class="bg-orange-500 text-white px-6 py-2 rounded-r-lg text-sm">Submit</button>
          </div>
          <!-- Socials -->
          <div class="flex mt-3 space-x-3 items-center">
              <div class="text-gray-600">
                <span class="lab la-facebook text-xl"></span>
              </div>
              <div class="text-gray-600">
                <span class="lab la-twitter text-xl"></span>
              </div>
              <div class="rounded-md bg-orange-500 py-1 text-white px-2">
                <span class="lab la-google text-xl"></span>
              </div>
              <div class="rounded-md px-2">
                <span class="lab la-instagram text-xl"></span>
              </div>
          </div>
          <!-- Socials -->
        </div>
      </div>
      <div>
        <div class="mt-3">
          <div class="flex">
            <div>
              <h1 class="uppercase text-sm text-gray-700 font-bold">Download The App</h1>
              <p class="text-xs">Get access to all exclusive offers. discounts and deals by downloading</p>
            </div>
            <div class="flex">
              download app
            </div>
          </div>
        </div>
      </div>

  </div>
  <div class="px-[3rem] py-[1rem] bg-slate-100 text-sm text-orange-700">
    <span class="text-center">@{{ new Date().getFullYear() }} Powered by mintech technologies. All right reserved</span>
  </div>
</div>
  
</template>

<script setup>

</script>

<style>

</style>