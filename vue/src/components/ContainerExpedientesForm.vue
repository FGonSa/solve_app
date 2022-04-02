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
                            <td v-for="estado in estats_expedients"
                                :value="estado.id"
                                :key="estado.id">
                                <div class="d-flex justify-content-center mt-3"><p v-if="expedient.estats_expedients_id == estado.id" >{{ estado.estat }}</p></div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-3 mx-5">
                                    <div>
                                        <button class="btn-mostrar btn btn-warning btn-sm d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons">visibility</span>Mostrar</button>
                                    </div>
                                    <div>
                                        <button class="btn-mostrar btn btn-danger btn-sm d-flex align-items-center gap-1"><span class="material-icons">delete_forever</span></button>
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


            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <input type="password" class="form-control" placeholder="123456789" id="exampleInputPassword1" disabled>
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Fecha</label>
                                    <input type="password" class="form-control" placeholder="16/10/2022 - 08:15h" id="exampleInputPassword1" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Autor</label>
                                    <input type="password" class="form-control" placeholder="NombreUsuario" id="exampleInputPassword1" disabled>
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Fecha</label>
                                    <input type="password" class="form-control" placeholder="17/10/2022 - 12:33h" id="exampleInputPassword1" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                    <div class="col">
                                        <label for="validationCustom01" class="form-label titulo"
                                            >Estado</label
                                        >
                                        <select class="form-select" v-model="estadoSelect">
                                            <option
                                                v-for="estado in estats_expedients"
                                                :value="estado.id"
                                                :key="estado.id"
                                            >
                                                {{ estado.estat }}
                                            </option>
                                        </select>
                                    </div>
                            </div>
                            <div class="row mt-5 mb-3">
                                <hr>
                            </div>
                            <h6 class="texto-modal pb-3">Localidad</h6>
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
                                            v-model="foraCat"
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
                                            value="0"
                                            v-model="foraCat"
                                            @click="cambiarLocation()"
                                        />
                                        <label class="form-check-label" for="inlineRadio2"
                                            >No</label
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="row my-4">
                                <div class="col" v-if="foraCat == 0">
                                    <label for="validationCustom01" class="form-label titulo"
                                        >Comarca</label
                                    >
                                    <select class="form-select" v-model="comarcaSelect" disabled>
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
                                    <select class="form-select" v-model="provinciaSelect" disabled>
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
                                    <select class="form-select" v-model="municipioSelect" disabled>
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
    </div>
    <!-- <td class="">
                            <div class="d-flex justify-content-center gap-2">
                                <div class="autor-img">
                                    <img src="/public/assets/foto-perfil.png">
                                </div>
                                <div class="autor-nombre">
                                    <div>NombreUser</div>
                                    <div class="email-font">nombreuser@gmail.com</div>
                                </div>
                            </div>
                        </td> -->
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
    },
};

</script>


<style lang="scss" scoped>
.aaa{
    // align: center;
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
