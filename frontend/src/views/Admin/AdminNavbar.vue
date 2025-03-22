<script setup>
import { ref } from "vue";
import Menubar from "primevue/menubar";
import InputText from "primevue/inputtext";
import Avatar from "primevue/avatar";
import { useAdminUtil } from '@/stores/adminUtil';
import { storeToRefs } from 'pinia'
const util = useAdminUtil();
const { toggleSidebar } = util;
const { isOpenSideBar, currentPageName } = storeToRefs(util);
</script>

<template>
   <header class="flex items-center w-full pr-[4%]  pl-[1%] py-4 gap-4 text-gray-200 justify-between">
      <div class="flex items-center py-2 ">
         <span class="laptop:hidden flex items-center pl-2">
            <i @click="toggleSidebar()" class="bx text-3xl  cursor-pointer bx-menu-alt-left"></i>
         </span>
         <span class="pl-6 text-lg ">{{ currentPageName }}</span>
      </div>
      <div class="flex items-center justify-end gap-2">
         <div class="relative group z-10">
            <i class='bx bx-bell text-2xl cursor-pointer group-hover:bg-[#18181A]  rounded-full p-1'></i>
            <div
               class="absolute top-10 right-0 w-[280px]  bg-[#18181A] h-[360px] overflow-y-auto p-4 hidden group-hover:block">
               <span class="cursor-pointer text-accent">Mark all read</span>
               <ul class="flex flex-col divide-y-[1px] divide-gray-600 " v-for="n in 5">
                  <li class=" flex flex-col py-4 ">
                     <span>New Sale Created</span>
                     <span class="text-gray-500">1 day ago</span>
                  </li>

               </ul>
            </div>
         </div>
         <div class="flex items-center gap-4 ">

            <span>Admin</span>
            <div class="relative group">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjliCAIQTMQz0qsOl2n2NEpJ8524tLAlR5Zg&s"
                  alt="" class="w-10 h-10 rounded-full">
               <div class="absolute top-10 right-0 w-[160px]  bg-[#18181A]  overflow-y-auto hidden group-hover:block">

                  <ul class="flex flex-col  w-full">
                     <li class=" flex gap-2 items-center py-2 px-3 cursor-pointer w-full hover:bg-[#252527]"> <i
                        class='bx bx-cog' style='color:#ffffff'></i><span>Account</span> </li>
                     <li class=" flex gap-2 items-center py-2 px-3 cursor-pointer w-full hover:bg-[#252527]"> <i
                           class='bx bx-log-out' style='color:#ffffff'></i><span>Logout</span> </li>


                  </ul>
               </div>
            </div>
         </div>
      </div>
   </header>
</template>

<style scoped>
@media screen and (min-width: 1024px) {
   .bar {
      display: hidden;
   }
}
</style>
