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
</head>
<body>
    <div id="root"></div>
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
      <form onSubmit={this.handleSubmit}>
        <label>
          Telefone:
          <input type="text"  name="telefone" value={this.state.value}  />
        </label>
        <label>
          Name:
          <input type="text"  name="name" value={this.state.value}  />
        </label>
        <label>
          LastName:
          <input type="text"  name="lastname" value={this.state.value}  />
        </label>
        
         <label>
          Company:
          <input type="text"  name="company" value={this.state.value}  />
        </label>
        
        <label>
          Email:
          <input type="text"  name="email" value={this.state.value}  />
        </label>
       
        <input type="submit" value="Search" />
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