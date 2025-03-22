import { defineStore } from "pinia";
import { ref, computed } from 'vue';

export const usePlayerStore = defineStore('player', () => {
    const isOpenPlayer = ref(true)

    const music = new Audio();

    const parts = ref({
        index: 0,
        isPlaying: false,
        currentTime: '00:00',
        duration: '0:0',
        progress: 0,
        volume: 0.8

    })

    const beats = ref([
        {
            path: '/downfall.wav',
            name: "Sugar & Brownies",
            key: 'C#',
            bpm: 80,
            price: 50,
            img_path: "https://i.pinimg.com/564x/cd/54/8a/cd548a81ef5626389c1a1df88724cca7.jpg",
            artist: "DHARIA",
        },
        {
            path: '/downfall.wav',
            key: 'C#',
            bpm: 80,
            price: 80,
            name: "goner",
            img_path: "https://i.pinimg.com/564x/cd/54/8a/cd548a81ef5626389c1a1df88724cca7.jpg",
            artist: "DHARIA",
        },


    ])

    const currentBeat = computed(() => beats.value[parts.value.index]);

    const togglePlay = () => {
        if (parts.value.isPlaying) {
            pauseMusic();
        } else {
            playMusic();
        }
    }

    const playMusic = () => {
        parts.value.isPlaying = true
        music.play().catch((err) => {
            console.error("Error playing music: ", err)
        })
    }

    const pauseMusic = () => {
        parts.value.isPlaying = false
        music.pause()

    }

    const loadMusic = (beat) => {
        console.log("beat", beat)
        music.src = beat.path
        parts.value.currentTime = '0:00'
        parts.value.duration = '0:00'
        music.addEventListener('loadedmetadata', () => {
            parts.value.duration = formatTime(music.duration)
        })

    }

    const changeMusic = (direction) => {
        parts.value.index = (parts.value.index + direction + beats.value.length) % beats.value.length;
        loadMusic(currentBeat.value)
        playMusic();
    }


    const changeVolume = (e) => {
        const target = e.target;
        parts.value.volume = parseFloat(target.value)
        music.volume = parts.value.volume
    }

    function setProgressBar(e) {
        const target = e.currentTarget;
        const width = target.clientWidth;
        const xValue = e.offsetX;
        const newTime = (xValue / width) * music.duration;


        music.currentTime = Math.max(0, Math.min(newTime, music.duration));


        updateProgressBar();
    }

    function updateProgressBar() {
        const dur = music.duration || 0;
        const curTime = music.currentTime || 0;
        const progressPercent = (curTime / dur) * 100;


        parts.value.progress = Math.max(0, Math.min(progressPercent, 100));
        parts.value.currentTime = formatTime(curTime);
        parts.value.duration = formatTime(dur);
    }

    function formatTime(time) {
        const minutes = Math.floor(time / 60);
        const seconds = Math.floor(time % 60);
        return `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
    }


    // onMounted(() => {
    //     loadMusic(currentSong.value);
    //     music.addEventListener('timeupdate', updateProgressBar);
    // });


    return {
        isOpenPlayer,
        parts,
        music,
        beats,
        currentBeat,
        togglePlay,
        playMusic,
        pauseMusic,
        loadMusic,
        changeMusic,
        changeVolume,
        setProgressBar,
        updateProgressBar,
        formatTime,
    };
})