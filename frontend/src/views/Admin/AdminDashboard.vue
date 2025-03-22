<script setup>
import { ref, onMounted, watch } from "vue";
import { Chart, registerables } from "chart.js";
import { storeToRefs } from "pinia";
import { useAdminUtil } from "@/stores/adminUtil";

Chart.register(...registerables);

const util = useAdminUtil();
const { toggleSidebar } = util;
const { isOpenSideBar, currentPageName } = storeToRefs(util);

const barChartCanvas = ref(null);
const lineChartCanvas = ref(null);
const pieChartCanvas = ref(null);
const doughnutChartCanvas = ref(null);
const radarChartCanvas = ref(null);

let barChartInstance = null;
let lineChartInstance = null;
let pieChartInstance = null;
let doughnutChartInstance = null;
let radarChartInstance = null;

const createCharts = () => {
  if (barChartInstance) barChartInstance.destroy();
  if (lineChartInstance) lineChartInstance.destroy();
  if (pieChartInstance) pieChartInstance.destroy();
  if (doughnutChartInstance) doughnutChartInstance.destroy();
  if (radarChartInstance) radarChartInstance.destroy();

  barChartInstance = new Chart(barChartCanvas.value, {
    type: "bar",
    data: {
      labels: ["January", "February", "March", "April", "May"],
      datasets: [
        {
          label: "Revenue",
          data: [12, 19, 3, 5, 2],
          backgroundColor: "white",
          borderColor: "rgba(75, 192, 192, 1)",
          borderWidth: 1,
        },
      ],
    },
    options: { responsive: true, maintainAspectRatio: false },
  });

  lineChartInstance = new Chart(lineChartCanvas.value, {
    type: "line",
    data: {
      labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
      datasets: [
        {
          label: "Users Growth",
          data: [5, 15, 10, 20],
          borderColor: "rgba(255, 99, 132, 1)",
          backgroundColor: "rgba(255, 99, 132, 0.2)",
          fill: true,
        },
      ],
    },
    options: { responsive: true, maintainAspectRatio: false },
  });

  pieChartInstance = new Chart(pieChartCanvas.value, {
    type: "pie",
    data: {
      labels: ["Red", "Blue", "Yellow"],
      datasets: [
        {
          data: [10, 20, 30],
          backgroundColor: ["red", "blue", "yellow"],
        },
      ],
    },
    options: { responsive: true, maintainAspectRatio: false },
  });

  doughnutChartInstance = new Chart(doughnutChartCanvas.value, {
    type: "doughnut",
    data: {
      labels: ["Green", "Purple", "Orange"],
      datasets: [
        {
          data: [15, 25, 35],
          backgroundColor: ["green", "purple", "orange"],
        },
      ],
    },
    options: { responsive: true, maintainAspectRatio: false },
  });

  radarChartInstance = new Chart(radarChartCanvas.value, {
    type: "radar",
    data: {
      labels: ["Speed", "Strength", "Agility", "Endurance", "Flexibility"],
      datasets: [
        {
          label: "Athlete Stats",
          data: [80, 90, 70, 85, 75],
          borderColor: "rgba(54, 162, 235, 1)",
          backgroundColor: "rgba(54, 162, 235, 0.2)",
        },
      ],
    },
    options: { responsive: true, maintainAspectRatio: false },
  });
};

onMounted(() => {
  currentPageName.value = "Dashboard";
  createCharts();
});

watch(isOpenSideBar, () => {
  setTimeout(() => {
    createCharts();
  }, 300);
});
</script>

<template>
  <section class="flex flex-col  gap-4">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 item">
      <div v-for="n in 4" class="flex justify-between bg-[#18181A]  p-4 items-center">
        <div class="flex flex-col">
          <span class="text-gray-400">Products</span>
          <span class="text-4xl">50</span>
          
        </div>
        <i class='bx bx-package text-4xl pr-3 text-[#FF6384]'></i>

      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="shadow rounded-lg h-80 bg-[#18181A]">
        <canvas ref="barChartCanvas"></canvas>
      </div>
      <div class="shadow rounded-lg h-80 bg-[#18181A]">
        <canvas ref="lineChartCanvas"></canvas>
      </div>
      <div class="shadow rounded-lg h-80 bg-[#18181A]">
        <canvas ref="pieChartCanvas"></canvas>
      </div>
      <div class="shadow rounded-lg h-80 bg-[#18181A]">
        <canvas ref="doughnutChartCanvas"></canvas>
      </div>
      <div class="shadow rounded-lg h-80 bg-[#18181A]">
        <canvas ref="radarChartCanvas"></canvas>
      </div>
    </div>
  </section>
</template>
