<template>
  <div class="trailer mt-10">

    <button @click="showTrailer"
    class="trailer-button uppercase text-lg font-semibold tracking-wider px-6 py-3 rounded-full text-white">
      Watch Trailer
    </button>

    <modal :show-modal="showModal" :videoSite="video.site" :name="video.name"
    :trailerUrl="trailerUrl" @hideModal="showModal = false" />

  </div>
</template>

<script>
export default {
  props:{
    video:{
      type: Object,
      required: true
    }
  },
  data(){
    return{
       showModal: false,
       trailerUrl: null
    }
  },
  methods:{
    showTrailer(){
      // show video modal on medium plus screens
      if (window.innerWidth > 639) {

        this.showModal = true;

      } else {

       window.open(this.trailerUrl.replace('embed/','watch?v='));

      }
    }
  },
  created(){
      if (this.video.site === 'YouTube') {
        this.trailerUrl = 'https://www.youtube.com/embed/' + this.video.key
      }
  }
}
</script>

<style>
.trailer-button{
  background: linear-gradient(92.83deg, rgb(255, 116, 38) 0%, rgb(249, 58, 19) 100%);
  background-image: linear-gradient(92.83deg, rgb(255, 116, 38) 0%, rgb(249, 58, 19) 100%);
}
</style>
