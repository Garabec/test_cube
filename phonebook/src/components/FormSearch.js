import React from 'react';
import ReactDOM from 'react-dom';

import data from './fixture';
import NoteList from './NoteList';

class FormSearch extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      
      telefone: "",
      name: "",
      lastname: "",
      company: "",
      email:""
      
    };
    this.handleSubmit = this.handleSubmit.bind(this);
    this.handleChange = this.handleChange.bind(this);
    this.getData = this.getData.bind(this);
  }

  getData(){
      
  var key=[];  
  
//   function isValidId(value) {
//   if (typeof(value) === 'number') {
//     // То має бути ціле число більше від нуля.
//     return value > 0 && Math.floor(value) === value;
//   }
//   return false;
// }

// var validatedItems = items.filter(function(item) {
//   return isValidId(item.id);
// });


      
  for (var item in this.state) { // "foreach"
        console.log(this.state[item]);
       if(this.state[item]){
         console.log("good"); 
         key[item]=this.state[item]; 
           
       }
    }      
      
  console.log(key);  
      
  for (var item in data) { // "foreach"
        console.log(data[ item ]);
    }    
      
  console.log(this.state.name)
  
      
  ReactDOM.render(
   <NoteList  notes={data} /> ,
   document.getElementById('result')
);            
     
  
  }

  handleSubmit(event) {
    event.preventDefault();
    
   ReactDOM.render(
   <h4></h4>,
   document.getElementById('result')
);          
  
  console.log(this.getData())


     
   
        

  }  
     

  
  
    handleChange(event) {
      
      
    const target = event.target;
    const value =  target.value;
    const name = target.name;

    this.setState({
      [name]: value
    });
    
    
   
  }

  render() {
    return (
      
      
      <form   className="ui form"  onSubmit={this.handleSubmit}>
        <label>
          Telefone:
          <input type="text"  name="telefone" value={this.state.telefone}onChange={this.handleChange}   />
        </label>  <br></br>
        <label>
          Name:
          <input type="text"  name="name" value={this.state.name} onChange={this.handleChange} />
        </label> <br></br>
        <label>
          LastName:
          <input type="text"  name="lastname" value={this.state.lastname} onChange={this.handleChange} />
        </label> <br></br>
        
         <label>
          Company:
          <input type="text"  name="company" value={this.state.company} onChange={this.handleChange} />
        </label> <br></br>
        
        <label>
          Email:
          <input type="text"  name="email" value={this.state.email} onChange={this.handleChange} />
        </label> <br></br><br></br>
       
        <button  type="submit" className="ui primary button">
          Search
        </button>
      </form>
      
      
    );
  }
  
}


export default FormSearch;