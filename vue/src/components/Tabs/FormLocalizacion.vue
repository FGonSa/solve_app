<template>
    <form class="row g-3 needs-validation">
        <div class="row">
            <label for="validationCustom01" class="form-label"
                >¿Sucede en Cataluña?</label
            >
            <div class="col">
                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio1"
                        value="true"
                        checked
                        v-model="picked"
                        @click="cambiarLocation()"
                    />
                    <label class="form-check-label" for="inlineRadio1"
                        >Sí</label
                    >
                </div>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio2"
                        value="false"
                        v-model="picked"
                        @click="cambiarLocation()"
                    />
                    <label class="form-check-label" for="inlineRadio2"
                        >No</label
                    >
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col" v-if="picked == 'true'">
                <label for="validationCustom01" class="form-label titulo"
                    >Comarca</label
                >
               <select class="form-select">
                    <option
                        v-for="comarca in comarcas"
                        :value="comarca.id"
                        :key="comarca.id"
                    >
                        {{ comarca.nom }}
                    </option>
                </select>
            </div>

            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Provincia</label
                >
                <select class="form-select">
                    <option
                        v-for="provincia in provincias"
                        :value="provincia.id"
                        :key="provincia.id"
                    >
                        {{ provincia.nom }}
                    </option>
                </select>
            </div>

            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Municipio</label
                >
                <select class="form-select">
                    <option
                        v-for="municipio in municipios"
                        :value="municipio.id"
                        :key="municipio.id"
                    >
                        {{ municipio.nom }}
                    </option>
                </select>
            </div>
        </div>

        <div class="row">
            <label for="validationCustom01" class="form-label"
                >Tipo de Localización</label
            >
            <div class="col">
                <select
                    v-if="picked == 'true'"
                    class="form-select"
                    v-model="localizacion"
                >
                    <option selected value="Calle">Calle</option>
                    <option value="Punto">Punto Singular</option>
                    <option value="Carretera">Carretera</option>
                    <option value="Poblacion">Entidad Población</option>
                    <option value="Provincia">Provincia</option>
                </select>

                <div v-else class="col">
                    <select class="form-select">
                        <option value="Provincia" selected>Provincia</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row my-4" v-if="localizacion == 'Calle'">
            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Via</label
                >
                <input type="text" class="form-control" name="email" />
            </div>

            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Nombre</label
                >
                <input type="password" class="form-control" name="pswd" />
            </div>

            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Número</label
                >
                <input type="password" class="form-control" name="pswd" />
            </div>

            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Escalera</label
                >
                <input type="password" class="form-control" name="pswd" />
            </div>

            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Piso</label
                >
                <input type="password" class="form-control" name="pswd" />
            </div>

            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Puerta</label
                >
                <input type="password" class="form-control" name="pswd" />
            </div>
        </div>

        <div class="row my-4" v-if="localizacion == 'Carretera'">
            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Nombre</label
                >
                <input type="text" class="form-control" name="email" />
            </div>

            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Km</label
                >
                <input type="password" class="form-control" name="pswd" />
            </div>

            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Sentido</label
                >
                <input type="password" class="form-control" name="pswd" />
            </div>
        </div>

        <div class="row my-4" v-if="localizacion == 'Punto'">
            <div class="col">
                <label for="validationCustom01" class="form-label titulo"
                    >Nombre</label
                >
                <input type="text" class="form-control" name="email" />
            </div>
        </div>

        <div class="col">
            <label for="validationCustom01" class="form-label titulo"
                >Otras referencias de la localización</label
            >
            <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
            ></textarea>
        </div>

        <div class="col-12"></div>
    </form>
</template>

<script>
import EventService from "../../services/EventService.js";
export default {
  name: "Localizacion",
  data(){
return {
  picked: "true",
localizacion: null,
comarcas: null,
provincias: null,
municipios: null
}
  },
  methods: {
    cambiarLocation(){
this.localizacion = null
    }

  },
   created() {
        EventService.getComarcas()
            .then((response) => {
                this.comarcas = response.data;

                JSON.parse(JSON.stringify(this.comarcas));

            })
            .catch((error) => {
                console.log(error);
            });
            EventService.getProvincias()
            .then((response) => {
                this.provincias = response.data;

                JSON.parse(JSON.stringify(this.provincias));

            })
            .catch((error) => {
                console.log(error);
            });
            EventService.getMunicipios()
            .then((response) => {
                this.municipios = response.data;

                JSON.parse(JSON.stringify(this.municipios));

            })
            .catch((error) => {
                console.log(error);
            });
    },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.titulo {
    text-align: left;
}
</style>
