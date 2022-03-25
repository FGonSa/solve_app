<template>
  <div class="tabs ">
    <ul class="tabs_header nav nav-justify">
        <li
        v-for="title in tabTitles"
        :key="title"
        :class="{ selected: title == selectedTitle }"
        @click="selectedTitle = title"
      >
        {{ title }}
      </li>
    </ul>
    <slot />
  </div>
</template>

<script>
import { ref, provide } from "vue";
export default {
  setup(props, { slots }) {
    const tabTitles = ref(slots.default().map((tab) => tab.props.title));
    const selectedTitle = ref(tabTitles.value[0]);

    provide("selectedTitle", selectedTitle);
    return {
      tabTitles,
      selectedTitle,
    };
  },
};
</script>

<style scoped>
.tabs {
  max-width: 1200px;
  margin: 0 auto;

}

.tabs_header {
  margin-bottom: 10px;
  list-style: none;
  padding: 0;
  display: flex;
  text-align: center;
  align-content: center;
  background-color: #E5E5E5;
}

.tabs_header li {
  width: 250px;
  text-align: center;
  padding: 10px 20px;
  margin-right: 4px;
  background-color: #FFF8FF;
  border: solid 1px #F15AA5;
  /* border-top-left-radius: 35px; */
  /* border-radius: 5px; */
  cursor: pointer;
  transition: 0.4s all ease-out;
}

.tabs_header li.selected {
  background-color: #F15AA5;
  color: white;
}

</style>
