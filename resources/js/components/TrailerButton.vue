<template>
  <div class="trailer mt-10">

    <button @click="showModal = true"
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
       showModal: false
    }
  },
}
</script>
