import axios from 'axios'

const apiClient = axios.create({
    baseURL: 'http://localhost:/proyecto112/public/api/',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json'
    }
})

export default {
    getEvents(){
        return apiClient.get('tipus_incidents')
    },
    getComarcas(){
        return apiClient.get('comarques')
    },
    getProvincias(){
        return apiClient.get('provincies')
    },
    getMunicipios(){
        return apiClient.get('municipis')
    },
    getAgencias(){
        return apiClient.get('agencies')
    },
    getIncidents(id){
        return apiClient.get('/incidents/'+id)
    }
}
