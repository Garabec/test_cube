<html>
<head>
  

  
  

<script src="https://www.gstatic.com/firebasejs/5.0.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.1/firebase-firestore.js"></script>

<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyATObeStI8YjNUPMQpg5MuGyN_ukhuk-VA",
    authDomain: "cube-80e91.firebaseapp.com",
    databaseURL: "https://cube-80e91.firebaseio.com",
    projectId: "cube-80e91",
    storageBucket: "cube-80e91.appspot.com",
    messagingSenderId: "186722454165"
  };
  firebase.initializeApp(config);
  
 // var database = firebase.database();
  var db = firebase.firestore();
</script> 


<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>

<link rel="stylesheet" type="text/css" href="/node_modules/semantic-ui/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<script src="/node_modules/semantic-ui/dist/semantic.min.js"></script> 


</head>
<body>
 <div class="ui container">
   <div class="ui grid">
    <div class="eight wide column" id="root" > 
    </div>
     <div class="four wide column" id="result" > 
    </div>
   </div>
 </div>
    <script type="text/babel">
    
  
  
class PhoneBook extends React.Component {
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
  }


  handleSubmit(event) {
    event.preventDefault();
    
  var coll=db.collection("telefonebook");
  
$("#result").empty();

$("form :input").each(function(){
  
  if($(this).val()!="")
    coll=coll.where($(this).attr('name'),"==",$(this).val())
    
   });


coll.get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
        console.log(doc.id, " => ", doc.data());
        
  ReactDOM.render(
  <div>
  <h1>Telefone:{doc.data().telefone}  Name:{doc.data().name}</h1>
  </div>,
  document.getElementById('result')
);          
        
});
        
        });
        
        
// ReactDOM.render(
//   <div>
//   <h1>Result search</h1>
//   </div>,
//   document.getElementById('result')
// );        
        

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





ReactDOM.render(
    <PhoneBook />, 
    document.getElementById("root")
);
    
//-------------------------------------------------------------- 




// db.collection("telefonebook").where("name", "==", "tima").get().then(function(querySnapshot) {
//     querySnapshot.forEach(function(doc) {
//         // doc.data() is never undefined for query doc snapshots
//         console.log(doc.id, " => ", doc.data());
        
//         });
// });
    
//---------------------------------------------------------------    
    </script>
    
 <script type="text/javascript" >
   
   
   
 </script>  
    
</body>
</html>