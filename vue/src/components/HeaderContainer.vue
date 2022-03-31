<template>
    <div class="contenedor-header mb-3 p-2">
        <div class="titulo">
            <h1 class="">SOLVE APP</h1>
            <h3 class="">Bienvenid@ (name)</h3>
        </div>
        <div class="imagen">
            <img src="assets/header-img-3.png">
        </div>
    </div>
</template>

<style lang="scss" scoped>
*{
    font-family: 'Readex Pro', sans-serif;
    // font-style: Bold 700;
}
.contenedor-header{
    background: rgb(185,47,115);
    background: linear-gradient(0deg, rgba(185,47,115,1) 0%, var(--color-rosa) 45%, rgba(247,111,178,1) 100%);
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 25px;
    display: flex;
    flex-direction: row;
    font-family: 'Poppins', sans-serif;
    justify-content: center;
    align-items: center;
    gap: 3rem;
    height: 300px;
}
.resolve-app{
    color: var(--light);
}
img{
    width: 250px;
}
.titulo{
    // margin-top: 7rem;
    // margin-left: 15rem;
    // margin-bottom: 7rem;
}
.imagen{
    // float: right;
}
h1{
    color: white;
}
h3{
    color: var(--color-dark);
}
</style>
