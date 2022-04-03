<template>
    <div class="carta-expediente-main container-fluid">
            <div class="carta-expediente-header p-5">
                <h5><b>Expedientes</b></h5>
            </div>
            <div class="carta-expediente-body">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID Expediente</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Actualizado</th>
                            <th scope="col">Estado</th>
                            <!-- <th scope="col">Editar</th>
                            <th scope="col">Estado</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="expedient in expedients"
                            :value="expedient.id"
                            :key="expedient.id">
                            <th scope="row">{{ expedient.id }}</th>
                            <td>{{ expedient.data_creacio }}</td>
                            <td>{{ expedient.data_ultima_modificacio }}</td>
                            <td>
                                <select v-model="expedient.estats_expedients_id" :class=" 'estado_select' + expedient.estats_expedients_id" disabled>
                                    <option v-for="estado in estats_expedients"
                                            :value="estado.id"
                                            :key="estado.id"
                                            :class=" 'estado_select' + estado.id ">
                                            <p>{{ estado.estat }}</p>
                                    </option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-3 mx-5">
                                    <div>
                                        <button class="btn-mostrar btn btn-warning btn-sm d-flex align-items-center gap-1" data-bs-toggle="modal" :data-bs-target="'#exampleModal' + expedient.id"><span class="material-icons">visibility</span>Mostrar</button>
                                    </div>
                                    <div>
                                        <button class="btn-mostrar btn btn-danger btn-sm d-flex align-items-center gap-1"><span class="material-icons">delete_forever</span></button>
                                    </div>
                                </div>
                                <div class="modal fade" :id="'exampleModal' + expedient.id" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editar Expediente</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <h6 class="texto-modal pt-1 pb-3">Aspectos Generales</h6>
                                                    <div class="row mb-3">
                                                            <div class="col">
                                                                <label for="exampleInputPassword1" class="form-label">ID Expediente</label>
                                                                <input v-model="expedient.id" type="text" class="form-control" disabled>
                                                            </div>
                                                            <div class="col">
                                                                <label for="validationCustom01" class="form-label titulo"
                                                                    >Estado</label
                                                                >
                                                                <select class="form-select" v-model="expedient.estats_expedients_id" :class=" 'estado_select' + expedient.estats_expedients_id">
                                                                    <option v-for="estado in estats_expedients"
                                                                            :value="estado.id"
                                                                            :key="estado.id"
                                                                            :class=" 'estado_select' + estado.id ">
                                                                            <p>{{ estado.estat }}</p>
                                                                    </option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="exampleInputPassword1" class="form-label">Fecha</label>
                                                            <input v-model="expedient.data_creacio" type="text" class="form-control" disabled>
                                                        </div>
                                                        <div class="col">
                                                            <label for="exampleInputPassword1" class="form-label">Actualizacion</label>
                                                            <input v-model="expedient.data_ultima_modificacio" type="text" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5 mb-3">
                                                        <hr>
                                                    </div>
                                                    <h6 class="texto-modal pb-3">Carta de Llamadas</h6>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="validationCustom01" class="form-label titulo mb-2">Asociadas a este Expediente</label>
                                                                <div class="d-flex flex-wrap">
                                                                    <div v-for="llamada in cartes_trucades">
                                                                        <div><button type="button" v-if="expedient.id == llamada.expedients_id" class="btn-mostrar btn btn-warning btn-sm d-flex align-items-center gap-1 border border-white" data-bs-toggle="modal" data-bs-target="#modalCartasLlamadas"><span class="material-icons">visibility</span>{{ llamada.id }}</button></div>
                                                                        <div><div class="modal" id="modalCartasLlamadas" tabindex="-1" aria-labelledby="modalCartasLlamadas" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">Editar Expediente</h5>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        soy el body
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                    </div>
                                                                </div>
                                                                <!-- <ul class="form-select">
                                                                    <li
                                                                        v-for="llamada in cartes_trucades"
                                                                    >
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.id }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.codi_trucada }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.data_hora }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.temps_trucada }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.dades_personals_id }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.telefon }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.procedencia_trucada }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.origen_trucada }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.nom_trucada }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.municipis_id_trucada }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.adreca_trucada }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.fora_catalunya }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.provincies_id }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.municipis_id }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.tipus_localitzacions_id }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.descripcio_localitzacio }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.detall_localitzacio }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.altres_ref_localitzacio }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.incidents_id }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.tipus_localitzacions_id }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.descripcio_localitzacio }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.detall_localitzacio }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.altres_ref_localitzacio }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.incidents_id }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.nota_comuna }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.expedients_id }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.usuaris_id }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.comarca }}</p>
                                                                        <p v-if="expedient.id == llamada.expedients_id">Id: {{ llamada.tipus_incident }}</p>
                                                                    </li>
                                                                </ul> -->
                                                                    <!-- <div v-if="cartes_trucades.expedients_id == expedients.id"> -->
                                                                        <!-- <p>Id: {{ cartes_trucades.id }}</p> -->
                                                                        <!-- <p>Id: {{ cartes_trucades.codi_trucada }}</p>
                                                                        <p>Id: {{ cartes_trucades.data_hora }}</p>
                                                                        <p>Id: {{ cartes_trucades.temps_trucada }}</p>
                                                                        <p>Id: {{ cartes_trucades.dades_personals_id }}</p>
                                                                        <p>Id: {{ cartes_trucades.telefon }}</p>
                                                                        <p>Id: {{ cartes_trucades.procedencia_trucada }}</p>
                                                                        <p>Id: {{ cartes_trucades.origen_trucada }}</p>
                                                                        <p>Id: {{ cartes_trucades.nom_trucada }}</p>
                                                                        <p>Id: {{ cartes_trucades.municipis_id_trucada }}</p>
                                                                        <p>Id: {{ cartes_trucades.adreca_trucada }}</p>
                                                                        <p>Id: {{ cartes_trucades.fora_catalunya }}</p>
                                                                        <p>Id: {{ cartes_trucades.provincies_id }}</p>
                                                                        <p>Id: {{ cartes_trucades.municipis_id }}</p>
                                                                        <p>Id: {{ cartes_trucades.tipus_localitzacions_id }}</p>
                                                                        <p>Id: {{ cartes_trucades.descripcio_localitzacio }}</p>
                                                                        <p>Id: {{ cartes_trucades.detall_localitzacio }}</p>
                                                                        <p>Id: {{ cartes_trucades.altres_ref_localitzacio }}</p>
                                                                        <p>Id: {{ cartes_trucades.incidents_id }}</p>
                                                                        <p>Id: {{ cartes_trucades.nota_comuna }}</p>
                                                                        <p>Id: {{ cartes_trucades.expedients_id }}</p>
                                                                        <p>Id: {{ cartes_trucades.usuaris_id }}</p>
                                                                        <p>Id: {{ cartes_trucades.comarca }}</p>
                                                                        <p>Id: {{ cartes_trucades.tipus_incident }}</p> -->
                                                                </div>
                                                            </div>
                                                    <div class="row mt-5 mb-3">
                                                        <hr>
                                                    </div>
                                                    <h6 class="texto-modal pb-3">Otros Datos</h6>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="exampleInputPassword1" class="form-label">Id Agencia</label>
                                                            <input type="text" placeholder="Accidente moto" class="form-control" id="exampleInputPassword1" disabled>
                                                        </div>
                                                        <div class="col">
                                                            <label for="exampleInputPassword1" class="form-label">Nombre Agencia</label>
                                                            <input type="text" placeholder="1:24min" class="form-control" id="exampleInputPassword1" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="exampleInputPassword1" class="form-label">Incidente</label>
                                                            <input type="text" placeholder="Accidente moto" class="form-control" id="exampleInputPassword1" disabled>
                                                        </div>
                                                        <div class="col">
                                                            <label for="exampleInputPassword1" class="form-label">Tiempo Llamada</label>
                                                            <input type="text" placeholder="1:24min" class="form-control" id="exampleInputPassword1" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="exampleInputEmail1" class="form-label">Nota Común</label>
                                                            <textarea class="form-control nota-comun-modal" id="validationTextarea" placeholder="El incidente ocurrio hace 5 min, al lado de la via..." disabled></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-guardar-modal btn-cerrar-modal" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-dark">Guardar</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="p-5 d-flex justify-content-center">
                <small>&copy; Copyright 2022, Solve Solutions</small>
            </div>

    </div>
</template>


<script >
import 'bootstrap/dist/js/bootstrap.bundle';
import EventService from "../services/EventService.js";
export default {
    name: "Localizacion",
    data() {
        return {
            comarcas: null,
            provincias: null,
            municipios: null,
            foraCat: 0,
            estats_expedients: '',
            expedients: '',
            selectedAtributo: false,
            cartes_trucades: null,
            // cartes_trucades: {
            //     id: '',
            //     codi_trucada: '',
            //     data_hora: '',
            //     temps_trucada: '',
            //     dades_personals_id: '',
            //     telefon: '',
            //     procedencia_trucada: '',
            //     origen_trucada: '',
            //     nom_trucada: '',
            //     municipis_id_trucada: '',
            //     adreca_trucada: '',
            //     fora_catalunya: '',
            //     provincies_id: '',
            //     municipis_id: '',
            //     tipus_localitzacions_id: '',
            //     descripcio_localitzacio: '',
            //     detall_localitzacio: '',
            //     altres_ref_localitzacio: '',
            //     incidents_id: '',
            //     nota_comuna: '',
            //     expedients_id: '',
            //     usuaris_id: '',
            //     comarca: '',
            //     tipus_incident: '',
            //     tipus_incident: '',
            // }
        };
    },
    methods: {
        cambiarLocation() {
            this.localizacion = null;
        },
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
        EventService.getEstado()
            .then((response) => {
                this.estats_expedients = response.data;

                JSON.parse(JSON.stringify(this.estats_expedients));
            })
            .catch((error) => {
                console.log(error);
            });
        EventService.getExpedientes()
            .then((response) => {
                this.expedients = response.data;

                JSON.parse(JSON.stringify(this.expedients));
            })
            .catch((error) => {
                console.log(error);
            });
        EventService.getCartaLlamada()
            .then((response) => {
                this.cartes_trucades = response.data;

                JSON.parse(JSON.stringify(this.cartes_trucades));
            })
            .catch((error) => {
                console.log(error);
            });
    },
};

</script>


<style lang="scss" scoped>
option:empty {
   display: none;
}
li:empty {
   display: none;
}
button:empty {
   display: none !important;
}
.modal-content{
    text-align: initial;
}
.estado_select1{
    background-color: var(--color-verde);
    color: var(--dark);
}
.estado_select2{
    background-color: var(--color-amarillo);
    color: var(--dark);
}
.estado_select3{
    background-color: var(--color-verde-oliva);
    color: white;
}
.estado_select4{
    background-color: var(--color-azul-fuerte);
    color: white;
}
.estado_select5{
    background-color: var(--color-lila);
    color: white;
}
select:disabled {
  cursor: not-allowed;
}
.btn-guardar-modal{
    background-color: var(--color-rosa-fuerte);
    color: white;
    border: 1px solid var(--color-rosa-fuerte);
}
.btn-guardar-modal:hover{
    opacity: 60%;
}
.btn-cerrar-modal:hover{
    opacity: 60%;
}
.nota-comun-modal{
    background-color: var(--color-amarillo-fuerte);
}
.catalunya-texto{
    margin-left: 5px;
}
.container-catalunya{
    display: flex;
    justify-content: left;
    gap: 1rem;
}

#en_proceso{
    color: rgb(86, 195, 95);
}
#solicitado{
    color: var(--color-amarillo-visible);
}
#aceptado{
    color: rgb(88, 129, 23);
}
#cerrado{
    color: var(--color-azul-fuerte);
}
#inamovible{
    color: rgb(85, 35, 109);
}
    .carta-expediente-main{
        font-family: 'Poppins', sans-serif;
        border-radius: 25px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background-color: white;
        .carta-expediente-header{
            color: var(--color-amarillo-visible);
        }
        .card-header{
        border-radius: 25px 25px 0px 0px;
        /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
    }


    .autor-main{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;

    }
    img{
        height: 45px;
        width: 45px;
        border-radius: 45px;
    }
    .email-font{
        font-size: 10pt;
        color: grey;
    }
    .modal-title{
        color: var(--color-amarillo-visible);
    }

    .texto-modal{
        color: grey;
    }

    }
    .btn-estado{
        border-radius: 25px;
    }
    .btn-mostrar{
        border-radius: 25px;
        // display: flex;
        // align-items: center;
        // gap: 0.5rem;
    }
    tr{
        text-align: center;
        vertical-align: middle;
    }

</style>
