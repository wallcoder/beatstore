<script setup>
</script>

<template>
    <section class="w-full flex items-center justify-center h-[70vh] flex-col gap-10 relative">
        <img src="@/assets/images/earphone.png" class="w-[400px] absolute z-[0] opacity-50 earphone" alt="">
        <h1 class="text-3xl capitalize text-center tablet:text-4xl z-[1]">
            Crafting Emotions – Beats for the stories untold
        </h1>
    </section>
</template>

<style scoped>
.earphone {
    animation: bounce 1.1s ease-in-out infinite alternate;
}

@keyframes bounce {
    from {
        transform: translateY(0px);
    }

    to {
        transform: translateY(16px);
    }
}
</style>
