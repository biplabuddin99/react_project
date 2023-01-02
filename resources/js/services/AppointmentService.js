import http from "../http-common";
const create = data=>{
    return http.post('appointment',data);
}

const getAll = () =>{
    return http.get('appointment');
}

const destroy = id=>{
    return http.post('delete.php',id);
}

const getSingle = id=>{
    return http.post('retrive_single.php',id);
}

const update = data=>{
    return http.post('update.php',data);
}

const AppointmentService = {
    create,getAll,destroy,getSingle,update
}

export default AppointmentService;
