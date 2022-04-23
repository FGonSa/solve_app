import axios from 'axios'


const apiClient = axios.create({
    baseURL: 'http://localhost/proyecto112/public/api/',
    // baseURL: 'http://localhost:8080/proyecto112/public/api/',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json'
    }
})



export default {
    getEvents() {
        return apiClient.get("tipus_incidents");
    },
    getComarcas() {
        return apiClient.get("comarques");
    },
    getProvincias() {
        return apiClient.get("provincies");
    },
    getMunicipios() {
        return apiClient.get("municipis");
    },
    getAgencias() {
        return apiClient.get("agencies");
    },
    getIncidents() {
        return apiClient.get("incidents");
    },
    getEstado(){
        return apiClient.get("estats_expedients");
    },
    getExpedientes(){
        return apiClient.get("expedients");
    },
    getCartaLlamada(){
        return apiClient.get("cartes_trucades");
    },
    getHasAgencias(){
        return apiClient.get("cartes_trucades_has_agencies");
    },
    getIncidents(){
        return apiClient.get("count");
    }

};
