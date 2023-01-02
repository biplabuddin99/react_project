import React,{useEffect,useState} from "react";
import Header from './Header';
import Hero from './Hero';
import Feature from './Feature';
import Registration from './Registration';
import Count from './Count';
import Service from "./Service";
import Appointment from "./Appointment";
import Department from './Department';
import Doctor from './Doctor';
import Pricing from './Pricing';
import Frequently from './Frequently';
import Contact from './Contact';
import Footer from './Footer';


export default function Home(){
  return(
    <>
    <Header/>
    <Hero/>
    <Feature/>
    <Registration/>
    <Count/>
    <Service/>
    <Appointment/>
    <Department/>
    <Doctor/>
    <Pricing/>
    <Frequently/>
    <Contact/>
    <Footer/> 
    </>  
  );
}