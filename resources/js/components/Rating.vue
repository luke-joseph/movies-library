<template>
  <div class="flex-wrapper">

    <div class="single-chart justify-around z-50" :class="size">

      <svg viewBox="0 0 36 36" class="circular-chart green block ">
        <path class="circle-bg"
          d="M18 2.0845
            a 15.9155 15.9155 0 0 1 0 31.831
            a 15.9155 15.9155 0 0 1 0 -31.831"
        />
        <path class="circle"
          :stroke-dasharray="ratingPercent + ', 100'"
          d="M18 2.0845
            a 15.9155 15.9155 0 0 1 0 31.831
            a 15.9155 15.9155 0 0 1 0 -31.831"
        />
        <text x="18" y="20.35" class="percentage fill-current text-white font-bold tracking-wide">
          {{ ratingPercent }}%
        </text>
      </svg>

    </div>

</div>
</template>

<script>
export default {
  props:{
    ratingPercent:{
      type: Number,
      required: true
    },
    size:{
      type: String,
      default: 'w-12 h-12',
      required: false
    }
  }
}
</script>

<style lang="css" scoped>

.flex-wrapper {
  display: flex;
  flex-flow: row nowrap;
}

.circle-bg {
  fill: #000;
  stroke: #eee;
  stroke-width: 3.8;
}

.circle {
  fill: none;
  stroke-width: 2.8;
  stroke-linecap: round;
  animation: progress 1s ease-out forwards;
}

@keyframes progress {
  0% {
    stroke-dasharray: 0 100;
  }
}

.circular-chart.orange .circle {
  stroke: #fbbf24;
}

.circular-chart.green .circle {
  stroke: #6ee7b7;
}

.percentage {
  font-size: 0.5em;
  text-anchor: middle;
}

</style>
