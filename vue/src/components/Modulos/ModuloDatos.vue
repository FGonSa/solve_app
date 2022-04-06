<template >
<div class="mb-4">
    <!-- <div class="container-fluid carta-main"> -->
        <div class="carta-header p-3" >
            <h5>Meta-Datos</h5>
        </div>
        <div class="carta-body p-3">
            <p class="carta-text">Fecha: {{ fechaActual() }}</p>
            <p class="carta-text">Código llamada: {{ generarCodigoLlamada() }}</p>
            <p class="carta-text">Tiempo: <b>{{ generarTiempo() }}</b> s</p>
            <div @click="getModuloDatos(moduloDatos)" class="d-flex justify-content-left mt-4"><a href="#" class="btn-enlazar btn btn-dark "><div class="d-flex align-content-center gap-2"><span class="material-icons">compare_arrows</span>Enlazar</div></a></div>
        </div>
</div>
    <!-- </div> -->
</template>

<script>

export default {
    data() {
        return {
            classYellow: 'class="color-yellow"',
            countDown: 0,
            moduloDatos: {
                    fecha: 0,
                    codigoLlamada: 0,
                    tiempo: 0,
                },
}
    },
    methods: {
        getModuloDatos() {
            this.$emit("padre-datos-llamada", this.moduloDatos);
        },
        fechaActual(){
            let hoy = new Date();
            let hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
            let fecha = hoy.getDate() + '-' + ( hoy.getMonth() + 1 ) + '-' + hoy.getFullYear();
            let fechaYHora = fecha + ' ' + hora;
            if (this.moduloDatos.codigoLlamada === 0) {
                return this.moduloDatos.fecha = fechaYHora
            }
            else{
                return this.moduloDatos.fecha
            }
        },
        generarCodigoLlamada(){
            let caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHJKMNPQRTUVWXYZ012346789";
            let codigo = "";
            let i = 0
            for (i=0; i<20; i++) codigo +=caracteres.charAt(Math.floor(Math.random()*caracteres.length));
            codigo = codigo.toUpperCase().substr(0,9)
            if (this.moduloDatos.codigoLlamada === 0) {
                return this.moduloDatos.codigoLlamada = codigo
            }
            else{
                return this.moduloDatos.codigoLlamada
            }
        },
        generarTiempo(){
                if(this.countDown >= 0) {
                    setTimeout(() => {
                        this.countDown += 1
                        this.countDown -= 0.5
                    }, 1000)
                }
                if(this.countDown>10){

                }
            return this.moduloDatos.tiempo = this.countDown
        },
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
.color-verde{
    color: green;
}
.color-amarillo{
    color: yellow;
}
.color-rojo{
    color: red;
}
</style>
