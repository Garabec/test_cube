<html>
<head>
  

  
  
<script src="https://www.gstatic.com/firebasejs/5.0.2/firebase.js"></script>
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
  
  var database = firebase.database();
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
   </div>
 </div>
    <script type="text/babel">
    
  
  
class PhoneBook extends React.Component {
  constructor(props) {
    super(props);
    this.state = {value: ''};
    this.handleSubmit = this.handleSubmit.bind(this);
  }


  handleSubmit(event) {
    event.preventDefault();
    
    
  }

  render() {
    return (
      
      
      <form   class="ui form"  onSubmit={this.handleSubmit}>
        <label>
          Telefone:
          <input type="text"  name="telefone" value={this.state.value}  />
        </label>  <br></br>
        <label>
          Name:
          <input type="text"  name="name" value={this.state.value}  />
        </label> <br></br>
        <label>
          LastName:
          <input type="text"  name="lastname" value={this.state.value}  />
        </label> <br></br>
        
         <label>
          Company:
          <input type="text"  name="company" value={this.state.value}  />
        </label> <br></br>
        
        <label>
          Email:
          <input type="text"  name="email" value={this.state.value}  />
        </label> <br></br><br></br>
       
        <button  type="submit" class="ui primary button">
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
    
    </script>
    
   
    
</body>
</html>