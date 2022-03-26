import axios from 'axios'

const apiClient = axios.create({
    baseURL: 'http://localhost/proyecto112/public/api/',
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
    getIncidents(id){

    }
}
