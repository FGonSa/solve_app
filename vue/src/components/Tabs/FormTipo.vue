<template>
    <form class="row g-3 needs-validation">
        <div class="row">
            <label for="validationCustom01" class="form-label"
                >Tipo de Incidente</label
            >
            <div class="col">
                <select class="form-select">
                    <option
                        v-for="tipo in tipus"
                        :value="tipo.id"
                        :key="tipo.id"
                    >
                        {{ tipo.descripcio }}
                    </option>
                </select>
            </div>
        </div>
        <div class="col-12"></div>
    </form>
</template>

<script>
import EventService from "../../services/EventService.js";

export default {
    data() {
        return {
            tipus: null,
        };
    },
    created() {
        EventService.getEvents()
            .then((response) => {
                this.tipus = response.data;

                JSON.parse(JSON.stringify(this.tipus));
                console.log(this.tipus);
            })
            .catch((error) => {
                console.log(error);
            });
    },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped></style>
