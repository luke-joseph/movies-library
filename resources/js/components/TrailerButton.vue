<template>
  <div class="trailer mt-10">

    <button @click="showTrailer"
    class="uppercase text-lg font-semibold tracking-wider bg-indigo-700 px-6 py-3 rounded">
      Watch Trailer
    </button>

    <modal :show-modal="showModal" :videos="videos"
    @hideModal="showModal = false" />

  </div>
</template>

<script>
export default {
  props:{
    videos:{
      type: Array,
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
       //Redirect for mobiles
       window.open(this.trailerUrl);
      }
    }
  },
  mounted(){
    if (this.videos.length) {
      if (this.videos[0]['site'] === 'YouTube') {
        this.trailerUrl = 'https://www.youtube.com/embed/' + this.videos[0]['key']
      }

    }
  }
}
</script>
