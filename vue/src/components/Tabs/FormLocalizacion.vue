<template>
    <div class="container-fluid mt-4">
        <form class="row g-3 needs-validation">
            <div class="row">
                <label for="validationCustom01" class="form-label"
                    >¿Sucede fuera de Cataluña?</label
                >
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="inlineRadioOptions"
                            id="inlineRadio1"
                            value="1"
                            checked
                            v-model="localizacion.foraCat"
                            @click="cambiarLocation()"
                            @blur="getLocalizacion(datosPrincipales)"
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
                            value="0"
                            v-model="localizacion.foraCat"
                            @click="cambiarLocation()"
                            @blur="getLocalizacion(datosPrincipales)"
                        />
                        <label class="form-check-label" for="inlineRadio2"
                            >No</label
                        >
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col" v-if="localizacion.foraCat == 0">
                    <label for="validationCustom01" class="form-label titulo"
                        >Comarca</label
                    >
                    <select class="form-select" @blur="getLocalizacion(datosPrincipales)" v-model="localizacion.comarcaSelect">
                        <option
                            v-for="comarca in localizacion.comarcas"
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
                    <select class="form-select" @blur="getLocalizacion(datosPrincipales)" v-model="localizacion.provinciaSelect">
                        <option
                            v-for="provincia in localizacion.provincias"
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
                    <select class="form-select" @blur="getLocalizacion(datosPrincipales)" v-model="localizacion.municipioSelect">
                        <option
                            v-for="municipio in localizacion.municipios"
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
                        v-if="localizacion.foraCat == 0"
                        class="form-select"
                        v-model="localizacion.localizacion"
                        @blur="getLocalizacion(datosPrincipales)"
                    >
                        <option selected value="1">Calle</option>
                        <option value="2">Punto Singular</option>
                        <option value="4">Carretera</option>
                        <option value="3">Entidad Población</option>
                        <option value="5">Provincia</option>
                    </select>

                    <div v-else class="col">
                        <select class="form-select" v-model="localizacion.localizacion" @blur="getLocalizacion(datosPrincipales)">
                            <option value="5" selected>Provincia</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row my-4" v-if="localizacion.localizacion == 1">
                <div class="col">
                    <label for="validationCustom01" class="form-label titulo"
                        >Via</label
                    >
                    <input type="text" class="form-control" />
                </div>

                <div class="col">
                    <label for="validationCustom01" class="form-label titulo"
                        >Nombre</label
                    >
                    <input type="password" class="form-control" />
                </div>

                <div class="col">
                    <label for="validationCustom01" class="form-label titulo"
                        >Número</label
                    >
                    <input type="password" class="form-control" />
                </div>

                <div class="col">
                    <label for="validationCustom01" class="form-label titulo"
                        >Escalera</label
                    >
                    <input type="password" class="form-control" />
                </div>

                <div class="col">
                    <label for="validationCustom01" class="form-label titulo"
                        >Piso</label
                    >
                    <input type="password" class="form-control" />
                </div>

                <div class="col">
                    <label for="validationCustom01" class="form-label titulo"
                        >Puerta</label
                    >
                    <input type="password" class="form-control" />
                </div>
            </div>

            <div class="row my-4" v-if="localizacion.localizacion == 4">
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
                    <input type="text" class="form-control" name="pswd" />
                </div>

                <div class="col">
                    <label for="validationCustom01" class="form-label titulo"
                        >Sentido</label
                    >
                    <input type="text" class="form-control" name="pswd" />
                </div>
            </div>

            <div class="row my-4" v-if="localizacion.localizacion == 2">
                <div class="col">
                    <label for="validationCustom01" class="form-label titulo"
                        >Nombre</label
                    >
                    <input type="text" class="form-control" name="email" />
                </div>
            </div>

            <div class="col-md-12 mb-2">
                <label class="form-label">Descripción</label>
                <input
                    @blur="getLocalizacion(datosPrincipales)"
                    v-model="localizacion.descripcion"
                    type="text"
                    class="form-control"
                    required
                />
            </div>
            <div class="col-md-12 mb-2">
                <label class="form-label">Detalle</label>
                <input
                    @blur="getLocalizacion(datosPrincipales)"
                    v-model="localizacion.detalle"
                    type="text"
                    class="form-control"
                    required
                />
            </div>
            <div class="col mb-2">
                <label class="form-label titulo"
                    >Otras referencias de la localización</label
                >
                <textarea
                    @blur="getLocalizacion(datosPrincipales)"
                    v-model="localizacion.otrasRef"
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    rows="3"
                ></textarea>
            </div>

            <div class="col-12"></div>
        </form>
    </div>
</template>

<script>
import EventService from "../../services/EventService.js";
export default {
    name: "Localizacion",
    data() {
        return {
            localizacion: {
                localizacion: "",
                comarcas: "",
                provincias: "",
                municipios: "",
                comarcaSelect: null,
                municipioSelect: null,
                provinciaSelect: null,
                foraCat: 0,
                descripcion: "",
                detalle: "",
                otrasRef: "",
            },
        };
    },
    methods: {
        cambiarLocation() {
            this.localizacion.localizacion = null;
        },
        getLocalizacion(){
            this.$emit("padre-datos-llamada", this.localizacion);
        },
    },
    created() {
        EventService.getComarcas()
            .then((response) => {
                this.localizacion.comarcas = response.data;

                JSON.parse(JSON.stringify(this.localizacion.comarcas));
            })
            .catch((error) => {
                console.log(error);
            });
        EventService.getProvincias()
            .then((response) => {
                this.localizacion.provincias = response.data;

                JSON.parse(JSON.stringify(this.localizacion.provincias));
            })
            .catch((error) => {
                console.log(error);
            });
        EventService.getMunicipios()
            .then((response) => {
                this.localizacion.municipios = response.data;

                JSON.parse(JSON.stringify(this.localizacion.municipios));
            })
            .catch((error) => {
                console.log(error);
            });
    },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
.titulo {
    text-align: left;
}
</style>
