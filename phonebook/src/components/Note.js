import React from 'react';


function Note(props){
   
  const {note}=props; 
    
  return ( <div className="ui container">
              <div className="ui grid">
                 <h3>Telefone: {note.telefone}  Name: {note.name} LastName: {note.lastname} Company: {note.company} Email: {note.email} </h3>
              </div>
           </div>
           ) 
    
};


export default Note;