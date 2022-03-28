<template>
    <div class="container-fluid contenedor-main-formulario mb-4">
        <div class="row tabs">
            <ul class="nav nav-pills flex-row tabs_header p-4">
                <li v-for="title in tabTitles" :key="title" :class="{ selected: title == selectedTitle }" class="nav-item btn-individual-nav p-2" @click="selectedTitle = title">
                    <a class="nav-link active" :class="activo">{{ title }}</a>
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
//     props: ['activo'],
// computed: {
//   normalizedSize: function () {
//     return this.activo.trim().toLowerCase()
//   }
// }
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

<style lang="scss" scoped>
*{
    font-family: 'Poppins', sans-serif;
}
.btn-individual-nav{
    // background-color: #ffe11c;
    // border-radius: 25px;
    // pading: 20px;
    // color: #eecc09;
    // color: red;
    // box-shadow: rgba(0, 0, 0, 0.30) 0px 0px 5px;
}
// .btn-individual-nav:active:link{
//     background-color: #ffe11c;
//     border-radius: 25px;
//     pading: 20px;
//     color: #eecc09;
//     box-shadow: rgba(0, 0, 0, 0.30) 0px 0px 5px;
// }
// .btn-individual-nav:hover{
//     opacity: 70%
// }
.contenedor-main-formulario {
    background-color: white;
    display: flex;
    flex-direction: column;
    align-content: center;
    border-radius: 25px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.tabs {
    /* max-width: 1200px; */
    /* margin: 0 auto; */
}

.tabs_header {
    display: flex;
    justify-content: center;
    align-items: center;
    // background-color: red;
    gap: 2rem;
}

.tabs_header li {
    // background-color: yellow;
    // border: solid 1px var(--color-amarilo-fuerte);
    cursor: pointer;
    transition: 0.4s all ease-out;
    list-style-type: none;
}

.tabs_header li.selected {
    // background-color: var(--color-amarilo-fuerte);
    // color: white;
}
.contenedor-form{

}
</style>
