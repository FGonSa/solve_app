<template>
    <div class="container-fluid contenedor-main-formulario mb-4">
        <div class="row tabs">
            <ul class="nav nav-pills flex-row tabs_header p-4">
                <li v-for="title in tabTitles" :key="title" :class="{ selected: title == selectedTitle }" class="nav-item btn-individual-nav p-2" @click="selectedTitle = title">
                    <a class="nav-link">{{ title }}</a>
                </li>
            </ul>
        </div>
        <div class="row contenedor-form m-3 mb-5">
            <slot />
        </div>
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
    methods: {
    },
};
</script>

<style lang="scss" scoped>
*{
    font-family: 'Poppins', sans-serif;
}
.nav-link{
    
}
.contenedor-main-formulario {
    background-color: white;
    display: flex;
    flex-direction: column;
    align-content: center;
    border-radius: 25px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.tabs_header {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
}

.tabs_header li {
    cursor: pointer;
    transition: 0.4s all ease-out;
    list-style-type: none;
}

</style>
