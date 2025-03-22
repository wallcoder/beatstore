<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'
import MusicPlayer from '@/components/MusicPlayer.vue'
</script>

<template>
  <main>
    <Navbar />
    <section class="bg-black">
      <RouterView />
      
    </section>
    <MusicPlayer />
    <Footer />

  </main>
</template>
