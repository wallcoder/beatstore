<script setup>
import { RouterLink } from 'vue-router'
import { ref } from 'vue'
import { storeToRefs } from 'pinia'
import { useCurrencyStore } from '@/stores/currency';
const currencyStore = useCurrencyStore()
const { currency } = storeToRefs(currencyStore)
const { toggleCurrency } = currencyStore
const isOpen = ref(false);
const isOpenAccount = ref(false);
const isOpenMiniCart = ref(false);

</script>
<template>
    <header class=" py-6 flex items-center justify-between px-[4%] bg-black">

        <svg @click="isOpen = true" class="laptop:hidden cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="24"
            height="16" viewBox="0 0 24 16" fill="none">
            <path
                d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z"
                fill="currentColor"></path>
        </svg>

        <span class="font-semibold">
            <RouterLink to="/">DOWNPHASE</RouterLink>

        </span>

        <nav class=" items-center gap-8 text-base hidden laptop:flex ">

            <RouterLink to="/" class="items-center flex gap-1  underline-offset-4  hover:underline hover:text-gray-300">
                <span>Home</span>
            </RouterLink>

            <RouterLink to="/#catalog"
                class="items-center flex gap-1 underline-offset-4 hover:underline hover:text-gray-300">
                <span>Beats</span>
            </RouterLink>
            <RouterLink to="/contact"
                class="items-center flex gap-1 underline-offset-4 hover:underline hover:text-gray-300">
                <span>Contact</span>
            </RouterLink>


        </nav>

        <div class="flex items-center gap-4">
            <span @click="toggleCurrency()"
                class="hidden tablet:block uppercase min-w-[48px] text-center hover:bg-gray-800 active:bg-gray-600 py-1 px-2 rounded-lg cursor-pointer">{{
                    currency }}</span>
            <i class="bi bi-person  text-2xl hidden tablet:block"></i>
            <span class="relative cursor-pointer ">
                <i @click="isOpenAccount = true" class="bx bx-user text-2xl hover:text-gray-300" name="user"></i>

            </span>

            <span @click="isOpenMiniCart = true" class="relative cursor-pointer">
                <i class="bx bx-shopping-bag text-2xl text-white hover:text-gray-300"></i>
                <div
                    class="w-4 h-4 absolute bg-pop rounded-full flex items-center justify-center text-white text-[10px] top-[2px] right-[-5px]">
                    1
                </div>

            </span>



        </div>
        <div class=" z-10 fixed top-0 left-0 w-full laptop:hidden">
            <Transition>
                <div class="absolute w-full h-[100vh] opacity-10 top-0 left-0 bg-white " @click="isOpen = false"
                    v-if="isOpen"></div>
            </Transition>
            <nav class="absolute top-0 left-0 bg-black w-[200px] h-[100vh] py-8 px-4 transition-all duration-150 ease-out"
                :class="isOpen ? 'translate-x-0' : 'translate-x-[-200px]'">
                <ul class="flex flex-col gap-2">
                    <li class="flex justify-between items-center">
                        <svg @click="isOpen = false" class="laptop:hidden cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="16" viewBox="0 0 24 16" fill="none">
                            <path
                                d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z"
                                fill="currentColor"></path>
                        </svg>
                        <span @click="toggleCurrency()"
                            class="  uppercase min-w-[48px] text-center hover:bg-gray-800 active:bg-gray-600 py-1 px-2 rounded-lg cursor-pointer">{{
                                currency }}</span>
                    </li>

                    <li class="py-1 mt-6">
                        <RouterLink to="/" @click="isOpen = false">Home</RouterLink>
                    </li>
                    <li class="py-1">
                        <RouterLink to="/#catalog" @click="isOpen = false">Beats</RouterLink>
                    </li>
                    <li class="py-1">
                        <RouterLink to="/contact" @click="isOpen = false">Contact</RouterLink>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- MINICART -->
        <div class=" z-10 fixed top-0 left-0 w-full ">
            <Transition>
                <div class="absolute w-full h-[100vh] opacity-10 top-0 left-0 bg-white " @click="isOpenMiniCart = false"
                    v-if="isOpenMiniCart"></div>
            </Transition>
            <nav class="absolute top-0 right-0 bg-black w-full tablet:w-[400px] h-[100vh]   transition-all duration-150 ease-out"
                :class="isOpenMiniCart ? 'translate-x-0' : 'translate-x-[100vw]'">
                <div class="flex flex-col gap-4 p-4 h-full">
                    <div class="flex justify-between items-center">
                        <i @click="isOpenMiniCart = false" class="bx bx-x text-white text-4xl cursor-pointer"></i>
                        <h2 class="text-xl">My Bag</h2>
                    </div>
                    <ul role="list" class="-my-6 divide-y divide-gray-600 mt-1 h-[65%] overflow-y-auto">
                        <li class="flex py-6">
                            <div class="size-20 shrink-0 overflow-hidden rounded-md border border-gray-600">
                                <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                    alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                    class="size-full object-cover">
                            </div>

                            <div class="ml-4 flex flex-1 flex-col">
                                <div>
                                    <div class="flex justify-between text-base font-medium text-white">
                                        <h3>
                                            <a href="#">Throwback Hip Bag</a>
                                        </h3>
                                        <p class="ml-4">$90.00</p>
                                    </div>
                                    <p class="mt-1 text-sm text-white">Salmon</p>
                                </div>
                                <div class="flex flex-1 items-end justify-between text-sm">
                                    <!-- <p class="text-gray-500">Qty 1</p> -->

                                    <div class="flex">
                                        <button type="button"
                                            class="font-medium text-accent hover:text-accent-hover">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex py-6">
                            <div class="size-20 shrink-0 overflow-hidden rounded-md border border-gray-600">
                                <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                    alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                    class="size-full object-cover">
                            </div>

                            <div class="ml-4 flex flex-1 flex-col">
                                <div>
                                    <div class="flex justify-between text-base font-medium text-white">
                                        <h3>
                                            <a href="#">Throwback Hip Bag</a>
                                        </h3>
                                        <p class="ml-4">$90.00</p>
                                    </div>
                                    <p class="mt-1 text-sm text-white">Salmon</p>
                                </div>
                                <div class="flex flex-1 items-end justify-between text-sm">
                                    <!-- <p class="text-gray-500">Qty 1</p> -->

                                    <div class="flex">
                                        <button type="button"
                                            class="font-medium text-accent hover:text-accent-hover">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex py-6">
                            <div class="size-20 shrink-0 overflow-hidden rounded-md border border-gray-600">
                                <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                    alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                    class="size-full object-cover">
                            </div>

                            <div class="ml-4 flex flex-1 flex-col">
                                <div>
                                    <div class="flex justify-between text-base font-medium text-white">
                                        <h3>
                                            <a href="#">Throwback Hip Bag</a>
                                        </h3>
                                        <p class="ml-4">$90.00</p>
                                    </div>
                                    <p class="mt-1 text-sm text-white">Salmon</p>
                                </div>
                                <div class="flex flex-1 items-end justify-between text-sm">
                                    <!-- <p class="text-gray-500">Qty 1</p> -->

                                    <div class="flex">
                                        <button type="button"
                                            class="font-medium text-accent hover:text-accent-hover">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex py-6">
                            <div class="size-20 shrink-0 overflow-hidden rounded-md border border-gray-600">
                                <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                    alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                    class="size-full object-cover">
                            </div>

                            <div class="ml-4 flex flex-1 flex-col">
                                <div>
                                    <div class="flex justify-between text-base font-medium text-white">
                                        <h3>
                                            <a href="#">Throwback Hip Bag</a>
                                        </h3>
                                        <p class="ml-4">$90.00</p>
                                    </div>
                                    <p class="mt-1 text-sm text-white">Salmon</p>
                                </div>
                                <div class="flex flex-1 items-end justify-between text-sm">
                                    <!-- <p class="text-gray-500">Qty 1</p> -->

                                    <div class="flex">
                                        <button type="button"
                                            class="font-medium text-accent hover:text-accent-hover">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- More products... -->
                    </ul>



                    <div class="border-t border-gray-200 mt-8 px-2 py-6 h-[35%] sm:px-3 ">
                        <div class="flex justify-between text-base font-medium text-white">
                            <p>Subtotal</p>
                            <p>$262.00</p>
                        </div>
                        <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                        <div class="mt-6">
                            <RouterLink to="/checkout" @click="isOpenMiniCart = false"
                                class="flex items-center justify-center rounded-md border border-transparent bg-accent px-6 py-2 text-base font-medium text-black shadow-xs hover:bg-accent-hover">
                                Checkout</RouterLink>
                        </div>
                        <div class="mt-3">
                            <RouterLink to="/cart" @click="isOpenMiniCart = false"
                                class="flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-6 py-2 text-base font-medium text-black shadow-xs hover:bg-gray-300">
                                View Bag</RouterLink>
                        </div>

                    </div>
                </div>

            </nav>
        </div>
        <!-- ACCOUNT SLIDER -->
        <div class=" z-10 fixed top-0 left-0 w-full ">
            <Transition>
                <div class="absolute w-full h-[100vh] opacity-10 top-0 left-0 bg-white " @click="isOpenAccount = false"
                    v-if="isOpenAccount"></div>
            </Transition>
            <nav class="absolute top-0 right-0 bg-black w-[200px] h-[100vh] py-8 px-4 transition-all duration-150 ease-out"
                :class="isOpenAccount ? 'translate-x-0' : 'translate-x-[200px]'">
                <ul class="flex flex-col  gap-2">

                    <li class="flex ">
                        <i @click="isOpenAccount = false" class="bx bx-x text-white text-3xl cursor-pointer"></i>

                    </li>
                    <li class="flex flex-col ">
                        <span>Sam Browski</span>
                        <span class="text-sm text-gray-300">sambrowski@gmail.com</span>
                    </li>

                    <li class="py-1 mt-4 ">
                        <RouterLink to="/account/orders" @click="isOpenAccount = false">Order History</RouterLink>
                    </li>
                    <li class="py-1">
                        <RouterLink to="/account/purchases" @click="isOpenAccount = false">My Purchases</RouterLink>
                    </li>
                    <!-- <li class="py-1">
                        <RouterLink to="" @click="isOpenAccount = false">My Profile</RouterLink>
                    </li> -->
                    <li class="py-1">
                        <RouterLink to="/account/register" @click="isOpenAccount = false">Register</RouterLink>

                    </li>
                    <li class="py-1">
                        <RouterLink to="/account/login" @click="isOpenAccount = false">Log in</RouterLink>

                    </li>
                    <li class="py-1">
                        <button @click="isOpenAccount = false">Log out</button>

                    </li>
                </ul>
            </nav>
        </div>
    </header>
</template>


<style scoped>
.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;

}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}

.slider:focus-within .bg {
    visibility: visible;
}
</style>