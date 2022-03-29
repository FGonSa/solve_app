<template>
<div class="mb-4">
    <!-- <div class="container-fluid carta-main"> -->
        <div class="carta-header p-3" >
            <h5>Meta-Datos</h5>
        </div>
        <div class="carta-body p-3">
            <p class="carta-text">Fecha: 01/01/2022 00:00</p>
            <p class="carta-text">Código llamada: 12345678/A</p>
            <p class="carta-text">Tiempo: 01:30</p>
        </div>
</div>
    <!-- </div> -->
</template>

<script>
export default {
    setup() {

    },
}
</script>

<style lang="scss" scoped>

.carta-header{
    background-color: #FFE64E;
    border-radius: 25px 25px 0px 0px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.carta-body{
    background-color: white;
    border-radius: 0px 0px 25px 25px;
    box-shadow:  0px 15px 14px 4px rgba(0,0,0,0.12);
}
</style>
