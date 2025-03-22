<script setup>
import { RouterLink } from 'vue-router'
</script>
<template>
    <section class="bg-black">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-[400px]">
            <h2 class="mb-4 text-2xl tracking-tight font-semibold text-center text-white">Login
            </h2>

            <form action="#" class="flex flex-col gap-4">
                <div>
                    <label for="name" class="block mb-2  font-medium text-white">Name</label>
                    <input type="text" id="name"
                        class="  border-[1px] border-gray-600   text-base rounded-sm w-full h-12 p-2 bg-black"
                        placeholder="Enter your email address" required>
                </div>
                <div>
                    <label for="email" class="block mb-2  font-medium text-white">Email</label>
                    <input type="email" id="email"
                        class="  border-[1px] border-gray-600   text-base rounded-sm w-full h-12 p-2 bg-black"
                        placeholder="Enter your email address" required>
                </div>
                <div>
                    <label for="password" class="block mb-2  font-medium text-white">Password</label>
                    <input type="password" id="password"
                        class="  border-[1px] border-gray-600   text-base rounded-sm w-full h-12 p-2 bg-black"
                        placeholder="Enter password" required>
                </div>
                <div>
                    <label for="conPassword" class="block mb-2  font-medium text-white">Confirm Password</label>
                    <input type="password" id="conPassword"
                        class="  border-[1px] border-gray-600   text-base rounded-sm w-full h-12 p-2 bg-black"
                        placeholder="Confirm password" required>
                </div>

                <RouterLink class="hover:underline cursor-pointer" to="/account/login">Already have an account?</RouterLink>
                <button type="submit"
                    class="py-3 px-4 w-full bg-[#f7f7f7] text-black rounded-md font-semibold hover:bg-[#d6d6d6] active:bg-[#999999]">Create</button>
                
            </form>
        </div>
        <!--  class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl" -->
    </section>
</template>