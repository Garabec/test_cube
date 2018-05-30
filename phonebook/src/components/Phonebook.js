import React from 'react';

import FormSearch from './FormSearch';

function Phonebook(){
    
  return ( <div className="ui container">
          
            <div className="ui grid">
                  <div className="eight wide column" id="search" >
                  <FormSearch/>
                  </div>
                <div className="eight wide column" id="result" >
                  ResultSearch
                  </div>
            </div>
          
          </div>
    
    
   ) 
    
};


export default Phonebook;