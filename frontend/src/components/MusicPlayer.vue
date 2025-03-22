<script setup>
import { usePlayerStore } from '@/stores/player'
import { storeToRefs } from 'pinia'
import { onMounted } from 'vue'
const player = usePlayerStore()
const { isOpenPlayer, parts, currentBeat, } = storeToRefs(player)
const {
    music,
    togglePlay,
    playMusic,
    pauseMusic,
    loadMusic,
    changeMusic,
    changeVolume,
    setProgressBar,
    updateProgressBar, } = player

const handleKeydown = (event) => { 
    if (event.key === " " && isOpenPlayer.value) {
        event.preventDefault();
        
        togglePlay();
    }
};

onMounted(() => { 
    loadMusic(currentBeat.value);
    music.addEventListener('timeupdate', updateProgressBar);
    document.addEventListener('keydown', handleKeydown)
});

</script>
<template>
    <section class="flex fixed bottom-0 w-full bg-[rgba(0,0,0,0.6)] h-[75px] flex-col backdrop-blur-sm"
        :class="isOpenPlayer ? 'translate-y-0' : 'translate-y-20'">
        <div class="bg-gray-700 min-h-1 hover:cursor-pointer w-full hover:h-6" @click="setProgressBar">
            <div class="bg-accent h-[2px]  transition-all duration-200 linear" :style="{ width: `${parts.progress}%` }">
            </div>
        </div>

        <div class="flex p-2">
            <div class="flex gap-3 just w-[100%] tablet:w-1/3">
                <div class="flex gap-3">
                    <img src="@/assets/images/beat.jpg" class="w-16 rounded-lg" alt="">
                    <div class="flex flex-col item justify-center">
                        <span class="truncate text-sm">{{ currentBeat.name }}</span>
                        <div class="text-sm text-gray-400 flex gap-1">
                            <span>{{ currentBeat.key }}</span>
                            <span>{{ currentBeat.bpm }}bpm</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" w-[70%] justify-start tablet:w-1/3 flex tablet:justify-center items-center ">
                <div class="flex gap-2 items-center">
                    <i class="bx bx-skip-previous text-white text-3xl cursor-pointer" @click="changeMusic(-1)"></i>
                    <span class="p-[2px] bg-white rounded-full flex justify-center cursor-pointer" v-if="parts.isPlaying"
                        @click="togglePlay()">
                        <i class="bx bx-pause text-black text-3xl"></i>
                    </span>
                    <span class="p-[2px] bg-white rounded-full flex justify-center cursor-pointer" v-else
                        @click="togglePlay()">
                        <i class="bx bx-play text-black text-3xl translate-x-[2px]"></i>
                    </span>
                    <i class="bx bx-skip-next text-white text-3xl cursor-pointer" @click="changeMusic(-1)"></i>
                </div>
            </div>
            <div class=" w-[20%] tablet:w-1/3 flex justify-end items-center gap-4">
                <div class="flex items-center">
                    <button
                        class="min-w-14 active:brightness-100 bg-accent text-black justify-center px-1 py-1 rounded-md flex item-center hover:brightness-150 text-md">
                        <i class="bx bx-shopping-bag text-black text-xl"></i>
                        <span class="text-sm">${{ currentBeat.price }}</span>
                    </button>
                </div>
                <span class="text-sm min-w-10 hidden tablet:block">{{ parts.currentTime }}</span>
                <input type="range" min="0" max="1" step="0.01" :value="parts.volume" @input="changeVolume"
                    class="range hidden tablet:block text-blue-300 [--range-bg:orange] [--range-thumb:blue] [--range-fill:0] w-14 h-1" />
                <i class="bx bx-x text-white text-2xl cursor-pointer" @click="()=>{isOpenPlayer = false; pauseMusic()}"></i>
            </div>
        </div>
    </section>
</template>

<style scoped></style>