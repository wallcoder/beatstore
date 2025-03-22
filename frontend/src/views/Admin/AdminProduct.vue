<script setup>
import { ref, onMounted, watch } from "vue";
import { Chart, registerables } from "chart.js";
import { storeToRefs } from "pinia";
import { useAdminUtil } from "@/stores/adminUtil";

const util = useAdminUtil();
const { toggleSidebar } = util;
const { isOpenSideBar, currentPageName } = storeToRefs(util);


onMounted(() => {
    currentPageName.value = 'Products'
})

</script>
<template>
    <section class="flex flex-col bg-[#18181A] p-4 gap-4">
        <div class="flex gap-4">
            <select name="show" id="show" class="p-2 bg-transparent border border-gray-600 rounded-md outline-none">
                <option value="10">Show-10</option>
            </select>
            <input type="search" name="search" id="search"
                class="p-2 bg-transparent border border-gray-600 rounded-md outline-none" placeholder="Search">
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse">
                <thead>
                    <tr class=" text-left text-gray-300">
                        <th class="px-4 py-3 w-10"><input type="checkbox" class="cursor-pointer"></th>
                        <th class="px-4 py-3 w-[100px]">S.No</th>
                        <th class="px-4 py-3  w-[110px]">Image</th>
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3">BPM</th>
                        <th class="px-4 py-3">Time</th>
                        <th class="px-4 py-3">Streams</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3 text-right"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-700" v-for="n in 10">
                        <td class="px-4 py-3 w-10"><input type="checkbox" class="cursor-pointer"></td>
                        <td class="px-4 py-3 w-[100px]">1</td>
                        <td class="px-4 py-3 w-[110px]">
                            <img class="min-w-14 w-14 h-14 min-h-14 rounded-lg"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjliCAIQTMQz0qsOl2n2NEpJ8524tLAlR5Zg&s"
                                alt="">
                        </td>
                        <td class="px-4 py-3">Sunsets</td>
                        <td class="px-4 py-3">127</td>
                        <td class="px-4 py-3">01:30</td>
                        <td class="px-4 py-3">100</td>
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
</template>
<style scoped></style>