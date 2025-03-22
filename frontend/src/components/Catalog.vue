<script setup>
</script>
<template>
    <section class="w-full laptop-l:px-32 min-h-[50vh]" id="catalog">

        <h1 class="text-2xl py-2 px-2">Beats</h1>
        <div class="w-full ">
            <!-- Header Row -->
            <div class="flex items-center justify-between px-2 py-2 text-gray-400 text-sm ">

                <span class="min-w-[65px] w-[65px] mr-4"></span>
                <span class="flex-1 text-left">Title</span>
                <span class="w-1/5 text-left  hidden tablet:block">Time</span>
                <span class="w-1/5 text-left hidden tablet:block">BPM</span>
                <span class="w-1/4 text-left hidden laptop-l:block ">Tags</span>

                <span class="w-20 text-left "></span>

            </div>

            <!-- Music List -->
            <div class="divide-y divide-[#202020]">
                <!-- Single Track -->


                <div class="flex items-center px-2 py-2 hover:bg-[#141414] transition rounded-lg">
                    <span class="min-w-[55px] w-[55px] mr-4 ">
                        <img src="@/assets/images/beat.jpg" alt="" class="rounded-lg">
                    </span>
                    <div class="flex-1 flex items-center gap-2">
                        
                        <span class="truncate">Blinding Lights</span>
                    </div>
                    <span class="w-1/5 text-left text-gray-400  hidden tablet:block">3:20</span>
                    <span class="w-1/5 text-left text-gray-400  hidden tablet:block">127</span>
                    <span class="w-1/4 text-left text-gray-400  gap-2 hidden laptop-l:flex">
                        <span class=" bg-[#d2d3d3] text-black px-2 py-1 rounded-xl ">free</span>
                        <span class=" bg-[#d2d3d3] text-black px-2 py-1 rounded-xl ">free</span>
                    </span>

                    <span class="w-20 text-left flex items-center">
                        <button class=" bg-accent text-black px-2 py-1 rounded-md flex item-center hover:brightness-150 active:brightness-100">
                            <i class='bx bx-shopping-bag text-xl' style='color:#000'></i>
                            <span>$20</span>
                        </button>
                    </span>

                </div>

            </div>
        </div>
    </section>
</template>
<style setup></style>