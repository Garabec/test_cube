import React from 'react';

import Note from './Note';

function NoteList({notes}){
var i=0;    
const elements=notes.map(note=>
          <div key={note.id} > <Note note={note} i={i++} />  </div>
        )
    
  return ( <div className="ui container">
            <h4> Найдено записей {i} </h4>
            <div>{elements}</div>
           </div>
           ) 
    
};


export default NoteList;