<script setup>
import { ref } from 'vue'
const isOpenCheckout = ref(false);
</script>

<template>
    <section class="bg-black py-8 antialiased md:py-16 min-h-[70vh]">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h2 class="text-xl font-semibold text-white sm:text-2xl">Billing Address</h2>

            <div class="flex flex-col md:flex-row gap-6 mt-6 md:justify-between">
                <!-- Billing Form -->
                <div class="w-full md:w-1/2 ">
                    <form action="#" class="space-y-6">
                        <div class="flex tablet:flex-row flex-col gap-2">
                            <span class="w-full">

                                <label for="email" class="block mb-2 font-medium text-white">Your Name</label>
                                <input type="email" id="email"
                                    class="border border-gray-600 text-base rounded-sm w-full h-12 p-2 bg-black"
                                    placeholder="Enter your email address" required>
                            </span>
                            <span class="w-full">

                                <label for="email" class="block mb-2 font-medium text-white">Your email</label>
                                <input type="email" id="email"
                                    class="border border-gray-600 text-base rounded-sm w-full h-12 p-2 bg-black"
                                    placeholder="Enter your email address" required>
                            </span>


                        </div>
                        <div class="flex gap-2 tablet:flex-row flex-col">
                            <span class="w-full">

                                <label for="email" class="block mb-2 font-medium text-white">Address</label>
                                <input type="email" id="email"
                                    class="border border-gray-600 text-base rounded-sm w-full h-12 p-2 bg-black"
                                    placeholder="Enter your email address" required>
                            </span>
                            <span class="w-full">

                                <label for="email" class="block mb-2 font-medium text-white">Country</label>
                                <input type="email" id="email"
                                    class="border border-gray-600 text-base rounded-sm w-full h-12 p-2 bg-black"
                                    placeholder="Enter your email address" required>
                            </span>




                        </div>
                        <div class="flex gap-2 tablet:flex-row flex-col">
                            <span>

                                <label for="email" class="block mb-2 font-medium text-white">City</label>
                                <input type="email" id="email"
                                    class="border border-gray-600 text-base rounded-sm w-full h-12 p-2 bg-black"
                                    placeholder="Enter your email address" required>
                            </span>
                            <span>

                                <label for="email" class="block mb-2 font-medium text-white">State</label>
                                <input type="email" id="email"
                                    class="border border-gray-600 text-base rounded-sm w-full h-12 p-2 bg-black"
                                    placeholder="Enter your email address" required>
                            </span>
                            <span>

                                <label for="email" class="block mb-2 font-medium text-white">Zip Code</label>
                                <input type="email" id="email"
                                    class="border border-gray-600 text-base rounded-sm w-full h-12 p-2 bg-black"
                                    placeholder="Enter your email address" required>
                            </span>


                        </div>
                    </form>
                </div>

                <!-- Order Summary -->
                <div class="w-full md:w-[330px]">
                    <div class="bg-black p-6 shadow-sm rounded-lg">
                        <p class="text-xl font-semibold text-white">Order summary</p>

                        <div class="space-y-4 mt-4">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-400">Original price</dt>
                                    <dd class="text-base font-medium text-white">$7,592.00</dd>
                                </dl>
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-400">GST</dt>
                                    <dd class="text-base font-medium text-white">$0</dd>
                                </dl>
                            </div>

                            <dl class="flex items-center justify-between gap-4 border-t pt-2">
                                <dt class="text-base font-bold text-white">Total</dt>
                                <dd class="text-base font-bold text-white">$8,191.00</dd>
                            </dl>
                        </div>

                        <div class="mt-6">
                            <RouterLink to="/checkout"
                                class="flex items-center justify-center rounded-md bg-accent px-6 py-2 text-base font-medium text-black shadow-xs hover:bg-accent-hover">
                                Complete Payment
                            </RouterLink>
                        </div>

                        <div class="flex items-center justify-center gap-2 mt-4">
                            <span class="text-sm font-normal text-gray-400">or</span>
                            <RouterLink to="/"
                                class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
                                Continue Shopping
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </RouterLink>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
