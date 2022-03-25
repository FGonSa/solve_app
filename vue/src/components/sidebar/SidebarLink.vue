<script>
import { computed } from 'vue'
import { useRoute } from 'vue-router'
import { collapsed } from './status'
export default {
  props: {
    to: { type: String, required: true },
    icon: { type: String, required: true }
  },
  setup(props) {
    const route = useRoute()
    const isActive = computed(() => route.path === props.to)
    return { isActive, collapsed }
  }
}
</script>

<template>
  <router-link :to="to" class="link" :class="{ active: isActive }">
    <i class="icon" :class="icon" />
    <transition name="fade">
      <span v-if="!collapsed">
        <slot />
      </span>
    </transition>
  </router-link>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.1s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
.link {
  display: flex;
  align-items: center;
  cursor: pointer;
  position: relative;
  font-weight: 400;
  user-select: none;
  margin: 0.1em 0;
  padding: 0.4em;
  border-radius: 0.25em;
  height: 1.5em;
  color: rgb(0, 0, 0);
  text-decoration: none;
}
.link:hover {
  background-color: var(--sidebar-item-hover);
  color: white;
}
.link.active {
  background-color: var(--sidebar-item-active);
  color: var(--sidebar-item-activeText);
}
.link .icon {
  flex-shrink: 0;
  width: 25px;
  margin-right: 10px;
}
.link-formacion{
  color: var(--sidebar-item-activeText);
  background-color: #0071D0;
}
.link-consultas{
  color: black;
  background-color: #FFDB02;
}
</style>