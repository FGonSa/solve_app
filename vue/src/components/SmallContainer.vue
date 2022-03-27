<template>
    <div class="contenedor-card">
        <div class="imagen">
            <img :src="img">
        </div>
        <router-link :to="ruta" class="button">
            <button class="btn-class btn btn-lg" :style="color">{{ titulo }}</button>
        </router-link>
    </div>
</template>

<script>
export default {
    props: ['titulo', 'img', 'ruta', 'color']
}
</script>

<style lang="scss" scoped>
*{
    font-family: 'Readex Pro', sans-serif;
}
.btn-class{
    
    background: rgb(185,47,115);
    background: linear-gradient(0deg, rgba(185,47,115,1) 0%, var(--color-rosa) 45%, rgba(247,111,178,1) 100%); 
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 25px;
    color: white;
    letter-spacing: 1px;
    // border: 0.5px solid var(--dark);
    
}
.btn-class:hover{
    opacity: 80%;
    transform: scale(1.10);
    transition: 0.25s;
}
.btn-class:focus {
    box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
    transform: scale(0.95);
    transition: 0.15s;
}

.contenedor-card{
    background: white;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 25px;
    display: flex;
    flex-direction: row;
    font-family: 'Poppins', sans-serif;
    justify-content: center;
    align-items: center;
    gap: 3rem;
    width: 49%;
    height: 275px;
}
.resolve-app{
    color: var(--light);
}
.imagen img{
    width: 250px;
}

</style>