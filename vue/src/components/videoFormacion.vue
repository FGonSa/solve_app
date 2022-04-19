<template>
    <div class="player">
        <div class="player__sizer">
                <video ref="videoPlayer">
                    <source type="video/mp4" src="../../public/assets/video.mp4" />
                </video>
                <button class="btn btn-primary" @click="play">play</button>
                <button class="btn btn-primary" @click="pause">pause</button>
                <button class="btn btn-primary" @click="stop">stop</button>
                <button class="btn btn-primary" @click="setSpeed(0.5)">0.5x</button>
                <button class="btn btn-primary" @click="setSpeed(1)">1x</button>
                <button class="btn btn-primary" @click="setSpeed(1.5)">1.5x</button>
                <button class="btn btn-primary" @click="setSpeed(2)">2x</button>
        </div>
    </div>
    <div>
  </div>
</template>

<script>
export default {
  methods: {
    play() {
      this.$refs.videoPlayer.play();
    },
    pause() {
      this.$refs.videoPlayer.pause();
    },
    stop() {
      const { videoPlayer } = this.$refs;
      videoPlayer.pause();
      videoPlayer.currentTime = 0;
    },
    setSpeed(speed) {
      this.$refs.videoPlayer.playbackRate = speed;
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
</style>
