<template>
  <div class="trailer mt-10">
    
    <button @click="showModal = true"
    class="uppercase text-lg font-semibold tracking-wider bg-indigo-700 px-6 py-3 rounded">
      Watch Trailer
    </button>

    <!-- the modal -->
    <div v-show="showModal" id="modal-template">
      <transition name="modal">
        <div class="modal-mask">
          <div class="modal-wrapper">
            <div class="modal-container flex flex-col bg-gray-800 rounded">

              <div class="flex modal-heading mb-4">
                  <button class="modal-default-button text-red-400 rounded font-bold ml-auto text-xl" @click="showModal = false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-close w-8 h-8">
                      <path class="secondary" style="fill: #F87171;" fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"/>
                    </svg>
                  </button>
              </div>

              <iframe v-if="videos[0]['site'] === 'YouTube'" width="560" height="315" :src="'https://www.youtube.com/embed/' + videos[0]['key']"
              title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
              </iframe>

              <div class="modal-heading mt-4">
                  <button class="modal-default-button bg-indigo-700 rounded px-4 py-2 font-bold" @click="showModal = false">
                    Close
                  </button>
              </div>

            </div>
          </div>
        </div>
      </transition>
    </div>

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

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>
