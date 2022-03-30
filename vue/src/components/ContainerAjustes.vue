<template>
    <div class="row container-fluid container-main-ajustes">
        <div class="contenedor-header mb-2" :style="color">
            <router-link :to="url" class="contenedor-btn">
				<img :src="imagen">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#393939" class="flecha-blanca bi bi-arrow-right-short " viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                </svg>
			</router-link>
        </div>
        <div class="container-texto mb-4">
            <h5>{{ titulo }}</h5>
        </div>
    </div>

</template>

<script>
export default {
    props: ['imagen', 'titulo', 'url', 'color']
}
</script>


<style lang="scss" scoped>
*{
    font-family: 'Readex Pro', sans-serif;
    // font-style: Bold 700;
}
.container-texto{
     display: flex;
    flex-direction: row;
    // font-family: 'Poppins', sans-serif;
    justify-content: center;
    align-items: center;
    color: #645961;
}
.container-main-ajustes{
    display: flex;
    flex-direction: row;
    // font-family: 'Poppins', sans-serif;
    justify-content: center;
    align-items: center;
    width: 300px;
}
.contenedor-header{
    background: rgb(185,47,115);
    background: linear-gradient(0deg, rgba(185,47,115,1) 0%, var(--color-rosa) 45%, rgba(247,111,178,1) 100%);
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 30px;
    display: flex;
    flex-direction: row;
    font-family: 'Poppins', sans-serif;
    justify-content: center;
    align-items: center;
    // gap: 4rem;
    width: 200px;
    height: 200px;
    .contenedor-btn{
        display: flex;
        align-items: center;
        flex-direction: row;
        gap: 0.5rem;

        img{

        width: 100px;
        height: 100px;
    }
    }



}
.contenedor-header:hover{
    opacity:75%;
    transition: all 0.4s ease-out;
    .contenedor-btn{
        transform: scale(1.1);
        transition: all 0.4s ease-out;
    }
    .flecha-blanca{
        transform: translate(10px,0);
        transition: all 0.4s ease-out;
    }
}

.contenedor-header{
    transition: all 0.2s ease-out;
    .contenedor-btn{
        transition: all 0.2s ease-out;
    }
    .flecha-blanca{
        transition: all 0.2s ease-out;
    }
}


</style>
