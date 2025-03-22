<script setup>
import { ref } from 'vue'
const isOpenCheckout = ref(false);
</script>
<template>
    <section class="bg-black py-8 antialiased  md:py-16 min-h-[70vh]">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h2 class="text-xl font-semibold text-white  sm:text-2xl">Shopping Bag</h2>

            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    <div class="">
                        <div class="  bg-black p-4 shadow-sm   md:p-6">
                            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                <div class="flex gap-4">
                                    <a href="#" class="shrink-0 md:order-1">
                                        <img src="@/assets/images/beat.jpg" class="w-20 rounded-lg" alt="">
                                    </a>
                                    <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                        <div class="flex flex-col">
                                            <a href="#" class="text-base font-medium text-white hover:underline ">late
                                                nights</a>
                                            <span class="text-gray-300 text-sm">License: Free</span>
                                        </div>



                                        <div class="flex items-center gap-4">


                                            <button type="button"
                                                class="inline-flex items-center text-sm font-medium text-accent hover:text-accent-hover ">

                                                Remove
                                            </button>


                                        </div>
                                    </div>
                                </div>


                                <div class="flex items-center justify-between md:order-3 md:justify-end">

                                    <div class="text-end md:order-4 md:w-32">
                                        <p class="text-base font-bold text-white">$1,499</p>
                                    </div>
                                </div>


                            </div>
                        </div>




                    </div>

                </div>

                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div class="space-y-4  bg-black p-4 shadow-sm  m:p-6">
                        <p class="text-xl font-semibold  text-white">Order summary</p>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-400">Original price</dt>
                                    <dd class="text-base font-medium text-white">$7,592.00</dd>
                                </dl>

                                <!-- <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-400">Savings</dt>
                                    <dd class="text-base font-medium text-green-600">-$299.00</dd>
                                </dl> -->

                                <!-- <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-400">Store Pickup</dt>
                                    <dd class="text-base font-medium text-white">$99</dd>
                                </dl> -->

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-400">GST</dt>
                                    <dd class="text-base font-medium text-white">$0</dd>
                                </dl>
                            </div>

                            <dl class="flex items-center justify-between gap-4 border-t  pt-2 ">
                                <dt class="text-base font-bold text-white">Total</dt>
                                <dd class="text-base font-bold text-white">$8,191.00</dd>
                            </dl>
                        </div>

                        <div class="mt-6">
                            <RouterLink to="/checkout" 
                                class="flex items-center justify-center rounded-md border border-transparent bg-accent px-6 py-2 text-base font-medium text-black shadow-xs hover:bg-accent-hover">Checkout</RouterLink>
                        </div>

                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-400"> or </span>
                            <RouterLink to="/" title=""
                                class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
                                Continue Shopping
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </RouterLink>
                        </div>
                    </div>

                    <!-- <div
                        class="space-y-4 r  bg-black p-4 shadow-sm sm:p-6">
                        <form class="space-y-4">
                            <div>
                                <label for="voucher" class="mb-2 block text-sm font-medium text-white">
                                    Do you have a Coupon? </label>
                                <input type="text" id="voucher"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="" required />
                            </div>
                            <button type="submit"
                                class="bg-gray-100 px-6 py-2 text-base font-medium text-black shadow-xs hover:bg-gray-300 w-full rounded-lg ">Apply
                                Coupon</button>
                        </form>
                    </div> -->
                </div>
            </div>
        </div>

     





    </section>
</template>