<script setup></script>
<template>
    <section class="py-24 relative min-h-[70vh]">
        <h2 class="text-xl font-semibold text-white  sm:text-2xl text-center">Order History</h2>
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


                                    <span
                                        class=" inline-flex items-center text-sm font-medium text-accent hover:text-accent-hover ">

                                       Success
                                    </span>


                                </div>
                            </div>
                        </div>


                        <div class="flex items-center justify-between md:order-3  md:justify-end">

                            <div class="text-end md:order-4 ">
                                <p class="text-base font-bold text-white">Order# 23435AF</p>
                            </div>
                        </div>


                    </div>
                </div>




            </div>

        </div>
    </section>
</template>