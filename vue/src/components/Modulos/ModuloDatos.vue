<template>
<div class="mb-4">
    <!-- <div class="container-fluid carta-main"> -->
        <div class="carta-header p-3" >
            <h5>Meta-Datos</h5>
        </div>
        <div class="carta-body p-3">
            <p class="carta-text" >Fecha: {{ fechaActual() }}</p>
            <p class="carta-text" >Código llamada: {{generarCodigoLlamada()}}</p>
            <p class="carta-text">Tiempo: {{ generarTiempo() }}<span id="minutes">00</span>:<span id="seconds">00</span></p>
        </div>
</div>
    <!-- </div> -->
</template>

<script>

export default {
    data() {
return {
    metadatos: {
        fecha: null,
        codigoLlamada: null,
        tiempo: null,
    }
}
    },
    methods: {

        fechaActual(){
            let hoy = new Date();
            let hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
            let fecha = hoy.getDate() + '-' + ( hoy.getMonth() + 1 ) + '-' + hoy.getFullYear();
            let fechaYHora = fecha + ' ' + hora;
            return this.metadatos.fecha = fechaYHora
        },
        generarCodigoLlamada(){
            let caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHJKMNPQRTUVWXYZ2346789";
            let codigo = "";
            let i = 0
            for (i=0; i<20; i++) codigo +=caracteres.charAt(Math.floor(Math.random()*caracteres.length));
            codigo = codigo.toUpperCase().substr(0,9)
            return this.metadatos.codigoLlamada = codigo
        },
        generarTiempo(){
            var sec = 0;
            function pad ( val ) { return val > 9 ? val : "0" + val; }
            setInterval( function(){
                document.getElementById("seconds").innerHTML=pad(++sec%60);
                document.getElementById("minutes").innerHTML=pad(parseInt(sec/60,10));
                this.generarTiempo()
            }, 1000)
        }
    },
    created(){
            // this.generarTiempo()
        }

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
</style>
