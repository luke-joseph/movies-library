<template>
  <div class="flex flex-col xl:flex-row w-full mt-8 xl:mt-20 mb-32 items-start">

    <!-- Show Movie -->
    <show-movie :movie="movie" />

    <!-- Recommended -->
    <show-movies-related :related-movies="relatedMovies" />

  </div>
</template>

<script>

export default {
  props:{
    movie:{
      type: Object,
      required: true
    },
    relatedMovies:{
      type: Array,
      required: true
    }
  }
}
</script>
