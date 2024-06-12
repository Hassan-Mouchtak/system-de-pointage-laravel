import axios from "axios";
import { useState, useEffect } from "react";

export default function Employée() {

    
  useEffect(() => {
    getEtudiants();
  }, []);

  function getEtudiants() {
    axios({
      method: "GET",
      url: "http://127.0.0.1:8000/api/etudiants",
    })
      .then((response) => {
        const data = response.data;
        setNewEtudiant(data);
      })
      .catch((error) => {
        console.log(error.response);
        console.log(error.response.status);
        console.log(error.response.headers);
      });
  }
  return (
    <>
      
    </>
  );
}
