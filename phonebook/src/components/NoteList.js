import React from 'react';

import Note from './Note';

function NoteList({notes}){
    
    const elements=notes.map(note=>
          <div key={note.id} > <Note note={note} />  </div>
        )
    
  return ( <div className="ui container">
            <div>{elements}</div>
           </div>
           ) 
    
};


export default NoteList;