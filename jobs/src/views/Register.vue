<template>
  <div class="font-source antialiased">
      <div class="py-8 bg-blue-50 flex items-center justify-center">
          <div class="bg-white shadow-md w-[45rem] px-[2rem] py-[2rem] rounded-lg">
              <h1 class="text-2xl py-3 font-semibold text-center font-signika">Register a free account😍</h1>
              <form action="" class="space-y-2 py-2">
              <div>
                  <label for="fullname" class="font-medium mb-1">Full name</label>
                <input type="text" id="fullname" class="w-full border outline-none focus:outline focus:outline-offset-1 focus:outline-pink-300 border-gray-300 rounded-md px-3 py-2" placeholder="Full name">
              </div>
              <div>
                  <label for="email" class="font-medium mb-1">Email Address</label>
                <input type="text" id="email" class="w-full border outline-none focus:outline focus:outline-offset-1 focus:outline-pink-300 border-gray-300 rounded-md px-3 py-2" placeholder="Email address">
              </div>
              <div>
                  <label for="password" class="font-medium mb-1">Enter Password</label>
                <input type="password" id="password" class="w-full border outline-none focus:outline focus:outline-offset-1 focus:outline-pink-300 border-gray-300 rounded-md px-3 py-2" placeholder="Password">
              </div>
              <div>
                  <label for="confirmpassword" class="font-medium mb-1">Confirm Password</label>
                <input type="password" id="confirmpassword" class="w-full border outline-none focus:outline focus:outline-offset-1 focus:outline-pink-300 border-gray-300 rounded-md px-3 py-2" placeholder="Confirm Password">
              </div>
              <div class="flex items-center text-sm space-x-2">
                <input type="checkbox" id="remember" class="border outline-none  border-gray-300 rounded-md px-3 py-2">
                  <label for="remember" class="font-medium text-sm text-blue-600">Read and accept terms & condition</label>
              </div>
              <button class="w-full bg-blue-600 rounded-md py-3 text-white font-bold shadow-md shadow-blue-500">Please register me</button>
              <div class="flex justify-between items-center pt-1">
                  <router-link :to="{name: 'Login'}" class="text-sm text-blue-500">Already have an account? Login here</router-link>
              </div>
              <p class="text-xs">By clicking "Register", I agree to Easejob <a href="" class="text-blue-500">privacy policy</a> regarding the collection and use of my personal information.</p>
          </form>
          <hr>
          <div class="py-3">
            <p class="text-center">Or sign Up with</p>
            <!-- <h1 class="text-center text-sm"></h1> -->
            <div class="flex mt-3 justify-center items-center space-x-2">
                <div class="bg-blue-600 text-white shadow-md shadow-blue-400 rounded-full items-center justify-center flex h-[3rem] w-[3rem]">
                    <span class="lab la-facebook-f"></span>
                </div>
                <div class="bg-cyan-500 shadow-md shadow-cyan-400 text-white rounded-full items-center justify-center flex h-[3rem] w-[3rem]">
                    <span class="lab la-twitter"></span>
                </div>
                <div class="bg-red-600 shadow-md shadow-red-400 text-white rounded-full items-center justify-center flex h-[3rem] w-[3rem]">
                    <span class="lab la-pinterest"></span>
                </div>
                <div class="bg-blue-800 shadow-md text-white text-lg shadow-blue-400 rounded-full items-center justify-center flex h-[3rem] w-[3rem]">
                    <span class="lab la-linkedin"></span>
                </div>
            
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