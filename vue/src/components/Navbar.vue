<template>
  <div class="sidebar">
    <!-- <h1>
      <span v-if="collapsed">
        <div>RS</div>
      </span>
      <span v-else>RESOLVE APP</span>
    </h1> -->



   
  </div>
</template>

<script>
export default {
  props: {},
  components: {},
  setup() {
    return { };
  },
};
</script>

<!--CSS GLOBAL -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
:root {
  --sidebar-bg-color: white;
  --sidebar-item-hover: #c7136d;
  --sidebar-item-active: #EA127E;
  --sidebar-item-activeText: white;
}
</style>

<!--CSS SIDEBAR -->
<style scoped>
.sidebar {
  color: rgb(0, 0, 0);
  background-color: var(--sidebar-bg-color);
  position: relative;
  top: 0;
  left: 0;
  height: 3.3em;
  display: flex;
  flex-direction: row;
  /* box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px; */
}
</style>
