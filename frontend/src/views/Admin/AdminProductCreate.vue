<script setup>

import { ref, onMounted, watch } from "vue";
import { Chart, registerables } from "chart.js";
import { storeToRefs } from "pinia";
import { useAdminUtil } from "@/stores/adminUtil";
const util = useAdminUtil();
const { toggleSidebar } = util;
const { isOpenSideBar, currentPageName } = storeToRefs(util);


onMounted(() => {
    currentPageName.value = 'Products / Create'
})
</script>

<template>
    <section class="flex flex-col gap-4">
        <div class="flex  flex-col bg-[#18181A] p-4 gap-4">
            <form class="flex gap-4 flex-col">
                <h1 class="text-lg">Create Product </h1>
                <!-- <select name="show" id="show" class="p-2 bg-transparent border border-gray-600 rounded-md outline-none">
                <option value="10">Show-10</option>
            </select> -->
                <div class="flex gap-4 items-center flex-col tablet:flex-row">
                    <!-- <div class="flex flex-col gap-1  w-full">
                        <label for="beat">Select Beat</label>
                        <div class="flex gap-1 items-center">
                            <select name="show" id="show"
                                class="p-2 bg-transparent border border-gray-600 rounded-md outline-none w-full">
                                <option value="10">Sunsets</option>
                            </select>
                            <div
                                class="text-3xl px-2 cursor-pointer  rounded-md hover:bg-[#252527]  border-gray-600 border">
                                +</div>
                        </div>

                    </div> -->
                    <!-- <div class="flex flex-col gap-1  w-full">
                        <label for="beat">Select Beat</label>
                        <div class="flex gap-1 items-center">
                            <select name="show" id="show"
                                class="p-2 bg-transparent border border-gray-600 rounded-md outline-none w-full">
                                <option value="10">Sunsets</option>
                            </select>
                            <div
                                class="text-3xl px-2 cursor-pointer  rounded-md hover:bg-[#252527]  border-gray-600 border">
                                +</div>
                        </div>

                    </div> -->
                    <div class="flex flex-col gap-1 w-full">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title"
                            class="p-2 bg-transparent border border-gray-600 rounded-md outline-none" placeholder="Search">
                    </div>
                    <div class="flex flex-col gap-1 w-full">
                        <label for="bpm">BPM</label>
                        <input type="number" name="title" id="bpm"
                            class="p-2 bg-transparent border border-gray-600 rounded-md outline-none" placeholder="Search">
                    </div>
                    <div class="flex flex-col gap-1 w-full">
                        <label for="bpm">Preview File</label>
                        <input type="file" name="title" id="bpm"
                            class="p-2 bg-transparent border border-gray-600 rounded-md outline-none" placeholder="Search">
                    </div>


                </div>
                <div class="flex flex-col gap-2">
                    <span>Tags </span>
                    <div class="flex flex-wrap ">
                        <span class="rounded-xl m-1 border border-gray-600 px-3 py-1 cursor-pointer " v-for="n in 19">sad</span>

                    </div>

                </div>

                <button
                    class="px-4 py-2  rounded-md hover:bg-white active:bg-gray-200 bg-gray-200 text-black  border-gray-600 border w-full tablet:w-1/6">Save</button>

            </form>
        </div>
        <section class="flex flex-col bg-[#18181A] p-4 gap-4">
            <h1 class="text-lg">Product Licenses</h1>
            <div class="flex gap-4">
                <select name="show" id="show" class="p-2 bg-transparent border border-gray-600 rounded-md outline-none">
                    <option value="10">Show-10</option>
                </select>
                <input type="search" name="search" id="search"
                    class="p-2 bg-transparent border border-gray-600 rounded-md outline-none" placeholder="Search">
                    <button
                    class="px-4 py-2  rounded-md hover:bg-white active:bg-gray-200 bg-gray-200 text-black  border-gray-600 border w-full tablet:w-1/6">New</button>
                
                </div>
           
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse">
                    <thead>
                        <tr class=" text-left text-gray-300">
                            <th class="px-4 py-3 w-10"><input type="checkbox" class="cursor-pointer"></th>
                            <th class="px-4 py-3 w-[100px]">S.No</th>
                           
                            <th class="px-4 py-3">Title</th>
                            <th class="px-4 py-3">Price</th>
                            <th class="px-4 py-3">Time</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3 text-right"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-gray-700" v-for="n in 2">
                            <td class="px-4 py-3 w-10"><input type="checkbox" class="cursor-pointer"></td>
                            <td class="px-4 py-3 w-[100px]">1</td>
                          
                            <td class="px-4 py-3">Free</td>
                            <td class="px-4 py-3">0</td>
                            <td class="px-4 py-3">01:30</td>
                            <td class="px-4 py-3">
                                <span class="bg-emerald-600 text-white px-3 py-1 rounded-lg">Active</span>
                            </td>
                            <td class="px-4 py-3 text-right">

                                <i class='bx bx-dots-vertical-rounded text-2xl cursor-pointer'>

                                </i>

                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="flex items-center justify-center ">
                <div class="flex   gap-1  text-white rounded-lg">
                    <button class="px-4 py-2  rounded-md hover:bg-[#252527]  border-gray-600  border">Previous</button>
                    <div class="flex gap-1">
                        <button class="py-1 px-3 text-sm rounded-md hover:bg-[#252527]  border border-gray-600 ">1</button>
                        <button class="py-1 px-3 text-sm rounded-md hover:bg-[#252527]  border border-gray-600 ">2</button>
                        <button class="py-1 px-3 text-sm rounded-md hover:bg-[#252527]  border border-gray-600 ">3</button>
                    </div>
                    <button class="px-4 py-2  rounded-md hover:bg-[#252527]  border-gray-600 border">Next</button>
                </div>
            </div>



        </section>
        

        
</section></template>

<style scoped></style>