<template>
    <div class="font-source shadow-md">
        <div class="bg-white flex items-center border-b px-6 py-4">
            <div class="w-1/4">
                <h1 class="text-lg font-bold">GoCommerce Logo</h1>
            </div>
            <div class="w-2/4">
                <div class="flex rounded-full border-2 border-purple-600 mx-3 text-gray-600 pl-3">
                    <select name="" id="" class="outline-none rounded-l-full border-r border-gray-300">
                        <option value="">Product</option>
                        <option value="">Suppliers</option>
                    </select>
                    <!-- <vSelect :options="['Canada', 'United States']" /> -->
                    <input type="text" class="w-full outline-none px-3 border-none" placeholder="Search for any items here...">
                    <button class="w-[10rem] flex px-3 items-center justify-center space-x-2 rounded-r-full text-white bg-purple-600 font-bold py-2">
                        <span class="las la-search font-bold text-lg"></span>
                        <span>Search</span>
                    </button>
                </div>
            </div>
            <div class="w-1/4">
                <div class="flex items-center justify-evenly text-gray-600">
                    <div class="relative">
                        <div class="flex items-center">
                            <span class="lar la-user text-2xl"></span>
                            <span>Sign in</span>
                        </div>
                        <div class="bg-white w-[20rem] hidden right-0 top-[3rem] p-3 h-[20rem] rounded-md absolute shadow-purple-400 shadow-md">
                            <h1 class="text-gray-600">Welcome back!</h1>
                            <div class="flex flex-col space-y-2 mt-2">
                                <a href="" class="bg-purple-600 rounded-full text-white text-center py-1 px-3">Sign into your account</a>
                                <a href="" class="border border-purple-600 rounded-full text-center text-purple-600 py-1 px-3">Join for free</a>
                            </div>
                            <div class="header_center mt-3 px-[3rem] text-xs text-gray-500 text-center">Or continue with</div>
                            <div class="flex justify-evenly items-center mt-4">
                                <a href="">
                                    <img src="../assets/socials/facebook.png" class="h-8 w-8" alt="">
                                </a>
                                <a href="">
                                    <img src="../assets/socials/linkedin.png" class="h-8 w-8" alt="">
                                </a>
                                <a href="">
                                    <img src="../assets/socials/twitter.png" class="h-8 w-8" alt="">
                                </a>
                                <a href="">
                                    <img src="../assets/socials/google.png" class="h-8 w-8" alt="">
                                </a>
                            </div>
                            <div class="text-xs mt-6 mb-2">
                                By sliding to Continue with or Create My Account with GoCommerce, 
                                <a href="" class="text-orange-500">I agree to GoCommerce.com Free Membership Agreement</a>  and 
                                <a href="" class="text-orange-500">Receive Marketing Materials</a>
                            </div>
                            <hr>
                            <a href="" class="font-bold text-purple-600 text-sm mt-2">My Account</a>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex items-center">
                            <span class="las la-envelope text-2xl"></span>
                            <span>Messages</span>
                        </div>
                        <div class="bg-white w-[20rem] hidden right-0 top-[3rem] p-3 py-[1rem] rounded-md absolute shadow-purple-400 shadow-md">
                            <h1 class="text-gray-600 text-center font-bold mb-1">Unread message reminder</h1>
                            <p>We will remind you here when there is new message. Please log in to view.</p>
                            <div class="mt-4">
                                <a href="#">
                                    <div class="w-full font-medium bg-purple-600 rounded-full px-3 text-center text-white py-1.5">
                                        Sign In
                                    </div>
                                </a>
                                <p class="mt-3 text-sm">New user? Please <a href="" class="text-orange-500">register</a>  and start your business!</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex items-center">
                            <span class="las la-shopping-cart text-2xl"></span>
                            <span>Carts</span>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex items-center">
                            <span class="las la-gift text-2xl"></span>
                            <span>Orders</span>
                        </div>
                        <div class="bg-white w-[20rem] hidden right-0 top-[3rem] p-3 py-[1rem] rounded-md absolute shadow-purple-400 shadow-md">
                            <h1 class="text-gray-600">You have not logged in!!!. <a href="" class="text-orange-500">Please Login</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <BottomNavigation />
    </div>
</template>

<script setup>
import vSelect from 'vue-select'
import BottomNavigation from './BottomNavigation.vue'

</script>

<style>
.header_center{
    display: grid;
    grid-template-columns: 1fr max-content 1fr;
    grid-column-gap: 0.8rem;
    align-items: center;

}
.header_center::before,
.header_center::after {
    content: "";
    display: block;
    height:1px;
    background-color: #ccc;
}

</style>