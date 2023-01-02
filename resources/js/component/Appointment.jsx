import React,{useState,useEffect} from 'react';
import AppointmentService from '../services/AppointmentService';


export default function Appointment(){
    const [Patient, setPatient]= useState();
    const [Msg, setMsg]= useState();

    const handelInputChange = event =>{
        const {name, value} =event.target;
        setPatient({...Patient,[name]:value});
    }
    const savePatient= () =>{
      console.log(Patient)
      AppointmentService.create(Patient).then(res=>{
         setMsg(res.data);
        }).catch(e=>{
            console.log(e);
        });
    }


  return(
    <>
    <section id="appointment" className="appointment section-bg">
      <div className="container" data-aos="fade-up">

        <div className="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        {/* {Msg} */}
        <form action="" method="post" role="form" className="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div className="row">
            <div className="col-md-4 form-group">
              <input type="text" name="name" className="form-control" id="name" placeholder="Your Name" required onChange={handelInputChange}/>
            </div>
            <div className="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" className="form-control" name="email" id="email" placeholder="Your Email" required onChange={handelInputChange}/>
            </div>
            <div className="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" className="form-control" name="phone" id="phone" placeholder="Your Phone" required onChange={handelInputChange}/>
            </div>
          </div>
          <div className="row">
            <div className="col-md-4 form-group mt-3">
              <input type="date" name="date" className="form-control datepicker" id="date" placeholder="Appointment Date" required onChange={handelInputChange}/>
            </div>
            <div className="col-md-4 form-group mt-3">
              <select name="department" id="department" className="form-select" onChange={handelInputChange}>
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
            </div>
            <div className="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" className="form-select" onChange={handelInputChange}>
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
            </div>
          </div>

          <div className="form-group mt-3">
            <textarea className="form-control" name="message" rows="5" placeholder="Message (Optional)" onChange={handelInputChange}></textarea>
          </div>
          <div className="my-3">
            <div className="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div className="text-center"><button className="btn btn-primary" type="button" onClick={() => savePatient()}>Make an Appointment</button></div>
        </form>

      </div>
    </section>
    </>

  );
}
