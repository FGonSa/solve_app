<template>
<div class="mb-4">
  <div class="carta-header p-3" >
            <h5>Expedientes Relacionados</h5>
        </div>
  <div class="carta-body p-3">
    <h5 class="carta-title">Expediente (código)</h5>
    <p class="carta-text">No existe ningún expediente que coincida con los datos introducidos.</p>
    <a href="#" class="btn btn-warning" disabled>Enlazar</a>
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
    background-color: grey;
    border-radius: 25px 25px 0px 0px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.carta-body{
    background-color: white;
    border-radius: 0px 0px 25px 25px;
    box-shadow:  0px 15px 14px 4px rgba(0,0,0,0.12);
}
</style>
