<template>
  <!-- the modal -->
  <div v-if="showModal" id="modal-template">
      <div class="modal-mask">
        <div class="modal-wrapper">
          <div class="modal-container flex flex-col bg-black rounded">

            <div class="flex items-center modal-heading mb-4">
                <span class="text-gray-300">{{ name }}</span>
                <button class="modal-default-button text-red-400 rounded font-bold ml-auto text-xl" @click="$emit('hideModal')">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-close w-8 h-8">
                    <path class="secondary" style="fill: #F87171;" fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"/>
                  </svg>
                </button>
            </div>

            <iframe v-if="videoSite === 'YouTube'" width="560" height="315" :src="trailerUrl"
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
            </iframe>

          </div>
        </div>
      </div>
  </div>
</template>

<script>
export default {
  props:{
    showModal:{
      type: Boolean,
      required: true
    },
    name:{
      type: String,
      required: true
    },
    trailerUrl:{
      type: String,
      required: true
    },
    videoSite:{
      type: String,
      required: true
    }
  },
}
</script>

<style lang="css" scoped>

.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: table;
  transition: opacity 0.3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 620px;
  margin: 0px auto;
  padding: 20px 30px;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
  transition: all 0.3s ease;
}

.modal-body {
  margin: 20px 0;
}

</style>
