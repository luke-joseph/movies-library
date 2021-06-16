<template>
  <div class="trailer mt-10">

    <button @click="showTrailer"
    class="uppercase text-lg font-semibold tracking-wider bg-indigo-700 px-6 py-3 rounded">
      Watch Trailer
    </button>

    <modal :show-modal="showModal" :videoSite="video.site"
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
  mounted(){
      if (this.video.site === 'YouTube') {
        this.trailerUrl = 'https://www.youtube.com/embed/' + this.video.key
      }
  }
}
</script>
