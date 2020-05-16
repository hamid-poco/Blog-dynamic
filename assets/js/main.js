function myfunction(){

  let age = parseInt( prompt("Hi how old are you ?") );
    
    if(age < 18){
      alert ( age + "!" + " " + "You are teenager" );
    }
    else if (age >= 18 && age < 40){
      alert ( age + "!" + " " + "You are young" );
  
    }
    else if (age >= 40 && age < 50){
      alert ( age + "!" + " " + "You are middle-age" );
  
    }
    else if (age >= 50 && age < 65){
      alert ( age + "!" + " " + "You are old" );
  
    }
    else if (age >= 65){
      alert ( age + "!" + " " + "The calculator is broken!!!!!!" );
  
    }
  };