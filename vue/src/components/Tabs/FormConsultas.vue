<template>
    <div class="container-fluid">
        <form class="row g-3 needs-validation">
            <div class="col-lg-6">
                <label class="form-label">Nombre</label>
                <input v-model="nombreTrucada" type="text" class="form-control" autofocus required />
            </div>
            <div class="col-lg-6">
                <label class="form-label" >Teléfono</label>
                <input
                v-model="telefono"
                    type="text"
                    class="form-control"
                    id="validationCustom01"
                    required
                    autofocus
                />
            </div>
            <div class="col-lg-12">
                <label for="validationCustom01" class="form-label titulo">Municipio</label>
                <select class="form-select" v-model="municipioSeleccionado">
                    <option
                        v-for="municipio in municipioTrucada"
                        :value="municipio.id"
                        :key="municipio.id"
                    >
                        {{ municipio.nom }}
                    </option>
                </select>
            </div>
            <div class="col-lg-6">
                <label class="form-label">Procedencia</label>
                <input v-model="procedenciaTrucada" type="text" class="form-control" required />
            </div>
            <div class="col-lg-6">
                <label class="form-label">Origen</label>
                <input v-model="origenTrucada" type="text" class="form-control" required />
            </div>

            <!-- <div class="col-md-12">
                <label class="form-label">Municipio</label>
                <input v-model="municipioTrucada" type="text" class="form-control" required />
            </div> -->

            <div class="col-md-12">
                <label class="form-label">Dirección</label>
                <input v-model="direccionTrucada" type="text" class="form-control" required />
            </div>
            <div class="col-md-12">
                <label class="form-label">Información relevante</label>
                <textarea  v-model="infoRelevante" type="text" class="form-control" required />
            </div>
            <div class="col-12"></div>
        </form>
    </div>
</template>

<script>
import EventService from "../../services/EventService.js";
export default {
    name: "Datos Principales",
    data() {
        return {
            telefono: null,
            procedenciaTrucada: null,
            origenTrucada: null,
            nombreTrucada: null,
            municipioTrucada: null,
            municipioSeleccionado: null,
            direccionTrucada: null,
            infoRelevante: null,

        };
    },

  methods: {
    cambiarLocation(){
this.localizacion = null
    }

  },
   created() {
        EventService.getComarcas()
            EventService.getMunicipios()
            .then((response) => {
                this.municipioTrucada = response.data;

                JSON.parse(JSON.stringify(this.municipioTrucada));

            })
            .catch((error) => {
                console.log(error);
            });
    },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>

</style>
