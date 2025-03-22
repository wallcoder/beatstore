import { ref, computed } from 'vue'
import { defineStore } from 'pinia'

export const useAdminUtil = defineStore('adminUtil', () => {

    const isOpenSideBar = ref(false);
    const currentPageName = ref('');
    const toggleSidebar = ()=>{
        isOpenSideBar.value = !isOpenSideBar.value
    }
  return { currentPageName, isOpenSideBar, toggleSidebar}
})
