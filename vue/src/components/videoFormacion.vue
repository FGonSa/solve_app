<template>
    <div class="player">
        <div class="player__sizer">
                <video ref="videoPlayer" @play="setCurTime(this.tiempoI)">
                    <source type="video/mp4" src="../../public/assets/video.mp4" />
                </video>
                <div class="position-absolute">
                        <p class="">{{ tiempo }}</p>
                    </div>
                <div class="d-flex justify-content-center flex-column align-items-center gap-2">
                    <div class="d-flex gap-2">
                        <button type="button" class="btn-style btn" @click="retroceder">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward-fill" viewBox="0 0 16 16">
                                <path d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5z"/>
                            </svg>
                        </button>
                        <button type="button" class="btn-style btn" @click="stop">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-stop-fill" viewBox="0 0 16 16">
                                <path d="M5 3.5h6A1.5 1.5 0 0 1 12.5 5v6a1.5 1.5 0 0 1-1.5 1.5H5A1.5 1.5 0 0 1 3.5 11V5A1.5 1.5 0 0 1 5 3.5z"/>
                            </svg>
                        </button>
                        <button type="button" class="btn-style btn " @click="play">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                            </svg>
                        </button>
                        <button type="button" class="btn-style btn" @click="pause">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pause-fill" viewBox="0 0 16 16">
                                <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/>
                            </svg>
                        </button>
                        <button type="button" class="btn-style btn" @click="avanzar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-forward-fill" viewBox="0 0 16 16">
                                <path d="M15.5 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V8.753l-6.267 3.636c-.54.313-1.233-.066-1.233-.697v-2.94l-6.267 3.636C.693 12.703 0 12.324 0 11.693V4.308c0-.63.693-1.01 1.233-.696L7.5 7.248v-2.94c0-.63.693-1.01 1.233-.696L15 7.248V4a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn-style btn btn-sm " @click="setSpeed(0.5)">
                            x0.5
                        </button>
                        <button type="button" class="btn-style btn btn-sm" @click="setSpeed(1)">
                            x1
                        </button>
                        <button type="button" class="btn-style btn btn-sm" @click="setSpeed(1.5)">
                            x1.5
                        </button>
                        <button type="button" class="btn-style btn btn-sm" @click="setSpeed(2)">
                            x2
                        </button>
                    </div>
                    <div v-if="this.tiempo == this.tiempoParar" class="d-flex gap-2">
                        <button type="button" class="btn-style btn btn-sm ">
                            Recepción
                        </button>
                        <button type="button" class="btn-style btn btn-sm ">
                            Identificación
                        </button>
                        <button type="button" class="btn-style btn btn-sm">
                            Tipificación
                        </button>
                        <button type="button" class="btn-style btn btn-sm">
                            Localización
                        </button>
                        <button type="button" class="btn-style btn btn-sm">
                            Expediente
                        </button>
                    </div>
                </div>
        </div>
    </div>
    <div>
  </div>
</template>

<script>
export default {
    props: ['tiempoInicio', 'tiempo5', 'tiempoParar', 'tiempoM5'],
    data: function () {
    return {
      tiempo: null,
      play1: false,
      tiempoI: this.tiempoInicio,
      tiempo5: this.tiempo5,
      tiempoParar: this.tiempoParar,
      tiempoM5: this.tiempoM5,
    }
  },
  methods: {
    play() {
        if (this.tiempo != this.tiempoParar) {
        this.$refs.videoPlayer.play();
            setInterval(() => {
                this.tiempo = this.$refs.videoPlayer.currentTime;
                this.tiempo = parseInt(this.tiempo);
            if (this.tiempo == this.tiempoParar) {
                this.$refs.videoPlayer.pause();
            }
            }, 1000);
        }
    },
    pause() {
      this.$refs.videoPlayer.pause();
    },
    stop() {
      const { videoPlayer } = this.$refs;
      videoPlayer.pause();
      videoPlayer.currentTime = this.tiempoI;
    },
    setSpeed(speed) {
      this.$refs.videoPlayer.playbackRate = speed;
    },
    avanzar() {
      const { videoPlayer } = this.$refs;
      if (videoPlayer.currentTime > this.tiempoI && videoPlayer.currentTime <= this.tiempoM5) {
            videoPlayer.currentTime += 5;
      }
    },
    retroceder() {
      const { videoPlayer } = this.$refs;
      if (videoPlayer.currentTime > this.tiempo5) {
            videoPlayer.currentTime -= 5;
      }
    },
    setCurTime(punto) {
        if(this.play1 === false){
            const { videoPlayer } = this.$refs;
            videoPlayer.currentTime = punto;
            this.play1 = true;
        }
    },
  },
};
</script>


<style lang="scss" scoped>
video{
    width: 100%;
    border-radius: 20px;
    box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
}
.btn-style{
  border-radius: 30px;
  background-color: white;
  color: var(--color-azul);
  transition: all 0.25s ease-out;
}
.btn-style:hover{
transition: all 0.25s ease-out;
  background-color: var(--color-azul);
  color: white;
}
</style>
