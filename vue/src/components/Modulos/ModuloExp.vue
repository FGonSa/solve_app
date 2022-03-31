<template>
<div class="mb-4">
  <div class="carta-header p-3" >
            <h5>Expedientes Relacionados</h5>
        </div>
  <div class="carta-body p-3">
    <h5 class="carta-title">Expediente (código)</h5>
    <p class="carta-text">No existe ningún expediente que coincida con los datos introducidos.</p>
    <div class="d-flex justify-content-left mt-4"><a href="#" class="btn-enlazar btn btn-dark "><div class="d-flex align-content-center gap-2"><span class="material-icons">compare_arrows</span>Enlazar</div></a></div>
  </div>
</div>
</template>

<script>
export default {
    setup() {

    },
}
</script>

<style lang="scss" scoped>

.carta-header{
    background-color: var(--color-amarillo-fuerte);
    border-radius: 25px 25px 0px 0px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.carta-body{
    background-color: white;
    border-radius: 0px 0px 25px 25px;
    box-shadow:  0px 15px 14px 4px rgba(0,0,0,0.12);
}
.btn-enlazar{
    border-radius: 25px;
    transition: 0.2s all ease-out;
}
.btn-enlazar:hover{
    opacity: 70%;
    transition: 0.2s all ease-out;
}
</style>
