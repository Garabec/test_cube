import React from 'react';


class Note extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      i: 0
      };
      
    this.increment = this.increment.bind(this); 

   
  }
   
   increment() {
     
    this.setState({
      i: this.state.i + 1
    });
     
   }
   
   
   
   
  
  render(){
  
  return ( <div>
              <h5>{this.props.i}.Telefone: {this.props.note.phone}  Name: {this.props.note.name} LastName: {this.props.note.lastname} Company: {this.props.note.company} Email: {this.props.note.email} </h5>
              <br />
            </div>
           ) 
  } 
};


export default Note;