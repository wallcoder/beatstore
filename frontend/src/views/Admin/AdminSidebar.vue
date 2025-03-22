<script setup>
import { RouterLink } from 'vue-router';
import { ref, onMounted, onUnmounted } from 'vue';
import { onClickOutside } from '@vueuse/core';
import { useAdminUtil } from '@/stores/adminUtil';
import { storeToRefs } from 'pinia'
const util = useAdminUtil();
const { toggleSidebar } = util;
const { isOpenSideBar } = storeToRefs(util);
const links = ref([
    {
        label: 'Dashboard',
        icon: 'bxs-dashboard',
        route: '/admin'
    },
    {
        label: 'Products',
        icon: 'bx-package',
        route: '#',
        children: [
            { label: 'Product List', route: '/admin/products' },
            { label: 'Create Product', route: '/admin/products/create' }
        ]
    },
    {
        label: 'Licenses',
        icon: 'bx-book-open',
        route: '#',
        children: [
            { label: 'License List', route: '/admin/licences' },
            { label: 'Create License', route: '/admin/licenses/create' }
        ]
    },
    {
        label: 'Tags',
        icon: 'bx-tag',
        route: '#',
        children: [
            { label: 'Tag List', route: '/admin/tags' },
            { label: 'Create Tag', route: '/admin/tagss/create' }
        ]
    },
    {
        label: 'Payments',
        icon: 'bxs-credit-card',
        route: '/admin'
    },
    {
        label: 'Orders',
        icon: 'bx-shopping-bag',
        route: '/admin'
    },
]);

const collapse = ref(false);
const expandedKeys = ref({});
const submenuRefs = ref({});



// Toggle sidebar collapse
const toggleCollapse = () => {
    collapse.value = !collapse.value;
};

// Toggle submenu visibility
const toggleMenu = (index) => {
    expandedKeys.value[index] = !expandedKeys.value[index];
};

// Close submenu when clicking outside
onClickOutside(submenuRefs, () => {
    expandedKeys.value = {}; // Close all submenus
});
</script>

<template>
    <div>
        <section :class="collapse ? 'max-w-[80px]' : 'max-w-[240px] w-[240px]'"
            class="text-gray-200 h-[100vh] hidden laptop:flex  flex-col p-4 py-6 bg-[#18181A] gap-2 sticky top-0">
            <span class="pb-4 flex items-center justify-between px-2 ">


                <span v-show="!collapse">DOWNPHASE</span>


                <i @click="toggleCollapse()" class="bx text-3xl cursor-pointer "
                    :class="collapse ? 'bx-menu-alt-left' : 'bx-menu-alt-right'"></i>
            </span>

            <ul class="flex-col gap-2 flex">
                <li v-for="(l, index) in links" :key="index"
                    class=" rounded-lg flex flex-col relative">
                    <RouterLink :to="l.route" class="w-full flex items-center gap-2 p-2 py-3  hover:bg-[#252527] rounded-lg" @click.stop="toggleMenu(index)"
                        :class="collapse ? 'justify-center' : 'justify-between'">
                        <span class="flex items-center ju  gap-2 px-2 w-full ">
                            <i :class="`bx ${l.icon} text-lg` "></i>
                            <span v-show="!collapse"  class="">{{ l.label }}</span>
                            
                        </span>
                        <i v-if="l.children && !collapse"
                            :class="`bx bx-chevron-down text-xl  transition-transform duration-300 ${expandedKeys[index] ? 'rotate-180' : ''}`"
                            style="color:#ffffff"></i>
                    </RouterLink>

                    <!-- Expanded Submenu -->
                    <ul v-show="l.children"
                        :class="expandedKeys[index] && !collapse ? 'max-h-40 opacity-100 mt-2' : 'max-h-0 opacity-0 overflow-hidden'"
                        class="transition-all duration-300 pl-6" ref="submenuRefs">
                        <li v-for="(child, childIndex) in l.children" :key="childIndex">
                            <RouterLink :to="child.route"  @click="expandedKeys={}"
                                class="block px-3 py-2 hover:bg-[#252527]   rounded-md">
                                {{ child.label }}
                            </RouterLink>
                        </li>
                    </ul>

                    <!-- Collapsed Submenu -->
                    <ul v-if="l.children && collapse"
                        :class="expandedKeys[index] ? 'max-h-40 opacity-100 p-2 z-10' : 'max-h-0 opacity-0'"
                        class="transition-all  duration-300 absolute left-[70px] top-0 w-[160px] bg-[#18181A] shadow-lg rounded-lg overflow-hidden "
                        ref="submenuRefs">
                        <li v-for="(child, childIndex) in l.children" :key="childIndex">
                            <RouterLink :to="child.route" @click="expandedKeys={}" class="block px-3 py-2 hover:bg-[#252527] rounded-md ">
                                {{ child.label }}
                            </RouterLink>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>

        <!-- SECOND SIDEBAR -->
        <section :class="isOpenSideBar ? 'translate-x-0' : '-translate-x-60'"
            class="z-10 text-gray-200 h-[100vh] max-w-[240px] w-[240px] laptop:hidden flex flex-col p-4 py-6 bg-[#18181A]/90 backdrop-blur-xl   gap-2 fixed top-0">
            <span class="pb-4 flex items-center justify-between px-2 ">
                <span>DOWNPHASE</span>
                <i @click="toggleSidebar()" class="bx text-3xl cursor-pointer bx-menu-alt-right"></i>
            </span>

            <ul class="flex-col gap-2 flex">
                <li v-for="(l, index) in links" :key="index"
                    class="hover:bg-[#252527] p-2 py-3 rounded-lg flex flex-col relative">
                    <button class="w-full flex items-center justify-between gap-2" @click.stop="toggleMenu(index)">
                        <span class="flex items-center gap-2">
                            <i :class="`bx ${l.icon} text-lg`"></i>
                            <span>{{ l.label }}</span>
                        </span>
                        <i v-if="l.children"
                            :class="`bx bx-chevron-down text-xl transition-transform duration-300 ${expandedKeys[index] ? 'rotate-180' : ''}`"
                            style="color:#ffffff"></i>
                    </button>

                    <!-- Expanded Submenu -->
                    <ul v-show="l.children"
                        :class="expandedKeys[index] && !collapse ? 'max-h-40 opacity-100 mt-2' : 'max-h-0 opacity-0 overflow-hidden'"
                        class="transition-all duration-300 pl-6" ref="submenuRefs">
                        <li v-for="(child, childIndex) in l.children" :key="childIndex">
                            <RouterLink :to="child.route"
                                class="block px-3 py-2 hover:bg-gray-200 hover:text-black rounded-md">
                                {{ child.label }}
                            </RouterLink>
                        </li>
                    </ul>

                    <!-- Collapsed Submenu -->
                    <!-- <ul v-if="l.children"
                        :class="expandedKeys[index] ? 'max-h-40 opacity-100' : 'max-h-0 opacity-0'"
                        class="transition-all duration-300 absolute left-[70px] top-0 w-[160px] bg-[#18181A] p-2 shadow-lg rounded-lg z-50"
                        ref="submenuRefs">
                        <li v-for="(child, childIndex) in l.children" :key="childIndex">
                            <RouterLink :to="child.route" class="block px-3 py-2 hover:bg-[#252527] rounded-md">
                                {{ child.label }}
                            </RouterLink>
                        </li>
                    </ul> -->
                </li>
            </ul>
        </section>
    </div>
</template>
