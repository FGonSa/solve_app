<template>
    <div class="container-fluid mt-4">
        <form class="row g-3 needs-validation" @submit.prevent="insertCarta">
            <div class="row">
                <label for="validationCustom01" class="form-label"
                    >Selecciona cómo cerrar la carta:</label
                >
                <div class="col">
                    <select
                        class="form-select"
                        @blur="getFinalizacion(finalizacion)"
                        v-model="finalizacion.como_cerrar_carta"
                    >
                        <option value="crear_expediente_nuevo" selected>
                            Crear expediente nuevo
                        </option>
                        <option value="asociar_expediente">
                            Asociar expediente existente
                        </option>
                        <option value="crear_expediente_recomendado" disabled>
                            Crear expediente nuevo con recomendación
                        </option>
                    </select>

                    <div
                        class="col-md-12 mt-4"
                        v-if="
                            finalizacion.como_cerrar_carta ==
                            'crear_expediente_nuevo'
                        "
                    >
                        <label for="validationCustom01" class="form-label"
                            >Indica el estado del expediente que vas a
                            crear:</label
                        >

                        <select
                            class="form-select"
                            @blur="getFinalizacion(finalizacion)"
                            v-model="estats_expedients_id"
                        >
                            <option
                                v-for="estado in estados"
                                :value="estado.id"
                                :key="estado.id"
                            >
                                {{ estado.estat }}
                            </option>
                        </select>
                    </div>
                    <div
                        class="col-md-12 mt-4"
                        v-if="
                            finalizacion.como_cerrar_carta ==
                            'asociar_expediente'
                        "
                    >
                        <label for="validationCustom01" class="form-label"
                            >Selecciona el expediente:</label
                        >

                        <select
                            class="form-select"
                            @blur="getFinalizacion(finalizacion)"
                            v-model="finalizacion.expediente_id_select"
                        >
                            <option
                                v-for="exp in expedients"
                                :value="exp.id"
                                :key="exp.id"
                            >
                                {{ exp.id }}
                            </option>
                        </select>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label class="form-label">Nota Comuna</label>
                        <textarea
                            @blur="getFinalizacion(finalizacion)"
                            v-model="finalizacion.nota_comuna"
                            class="texto-notas form-control"
                            rows="6"
                        >
                        </textarea>
                        <div class="valid-feedback">Correcto</div>
                    </div>
                </div>
            </div>
            <div class="btn-margin-right d-flex justify-content-end mt-4">
                <button
                    type="submit"
                    class="div-btn-fin-btn btn btn-dark mt-3"
                    @click="getSuccess(isSuccess)"
                >
                    <div class="d-flex align-content-center gap-2">
                        <span class="material-icons">check</span>
                        Terminar
                    </div>
                </button>
            </div>
        </form>
    </div>
</template>

<script>
import EventService from "../../services/EventService.js";
import axios from "axios";
export default {
    props: ["cartaLlamada"],
    data() {
        return {
            expediente_estado_form: '',
            estados: null,
            estats_expedients_id: null,
            isSuccess: null,
            finalizacion: {
                como_cerrar_carta: null,
                nota_comuna: "Relación con el incidente:  \nDescripción del suceso:  \nComentario extra a añadir:  ",
                expediente_id_select: null,
                mostrarAlert: false,
            },
            objeto: this.cartaLlamada,
            // prueba: {"codi_trucada":"algo","data_hora":null,"temps_trucada":null,"dades_personals_id":2,"telefono":"666","nom_trucada":"IAGO","municipis_id_trucada":18,"procedencia_trucada":"SADSA","origen_trucada":"SADSA","adreca_trucada":"SADAS","fora_catalunya":0,"provincies_id":1,"municipis_id":16,"comarca_id":18,"tipus_localitzacions_id":"2","descripcio_localitzacio":"SADAS","detall_localitzacio":"SASDASDASS","altres_ref_localitzacio":"SASAD","incidents_id":18,"tipus_incidents_descripcio":1,"como_cerrar_carta":"asociar_expediente","nota_comuna":"Relación con el incidente: \nDescripción del suceso: \nComentario extra a añadir:","expedients_id":2,"usuaris_id":1},
        };
    },
    created() {
        EventService.getEstado()
            .then((response) => {
                this.estados = response.data;

                JSON.parse(JSON.stringify(this.estados));
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
    methods: {
        getFinalizacion() {
            this.$emit("padre-datos-llamada", this.finalizacion);
        },
        getSuccess() {
            this.$emit("pagina-expedientes", this.isSuccess);
        },
        insertCarta() {
            let idExp = 0;

            let me = this;
            if (
                this.finalizacion.como_cerrar_carta == "crear_expediente_nuevo"
            ) {
                axios
                    .post(
                        "http://localhost:8080/proyecto112/public/api/expedients",
                        me,
                        {
                            headers: {
                                "Content-Type": "application/json",
                            },
                        }
                    )
                    .then((response) => {
                        console.log("expediente registrado con exito");
                        me.objeto.expedients_id = pm.response
                    })
                    .catch((error) => {
                        console.log("error al insertar expediente");
                    });
            }
            let article = JSON.stringify(this.objeto);
            axios
                .post(
                    // "http://localhost/proyecto112/public/api/cartes_trucades",
                    "http://localhost:8080/proyecto112/public/api/cartes_trucades",
                    article,
                    {
                        headers: {
                            "Content-Type": "application/json",
                        },
                    }
                )
                .then((response) => {
                    this.isSuccess = true;
                    //   this.$router.push('/expediente')
                    //hace que se recargue la pagina automaticamente al enviar el POST
                    this.$router.go();
                })
                .catch((error) => {
                    this.isSuccess = false;
                    this.holaAlert();
                });
        },
        holaAlert(){
            alert(
                        "Error S8S. El formulario no ha podido enviarse, revise los datos."
                    );
            // this.finalizacion.mostrarAlert = true;
        },
    },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
.div-btn-fin {
    padding-top: 2rem;
    padding-right: 2.1rem;
    border-radius: 35px;
}
.div-btn-fin-btn {
    border-radius: 35px;
    transition: 0.2s all ease-out;
}
.div-btn-fin-btn:hover {
    opacity: 70%;
    transition: 0.2s all ease-out;
}
.btn-margin-right {
    padding-right: 2rem;
}
.texto-notas {
    background-color: #ffe11c;
    height: 180px;
}
</style>
