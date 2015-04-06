// Lavet af Thomas. Bruges til at validere input ved brugeroprettelse
  
    function checkForm(form)
  {
    
    re = /^\w+$/;
    

    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 6) {
        alert("Fejl: Koden skal være på mindst 6 tegn!");
        form.pwd1.focus();
        return false;
      }
      if(form.pwd1.value == form.email.value) {
        alert("Fejl: Koden og mail må ikke være det samme!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Fejl: Begge koder er ikke det samme");
      form.pwd1.focus();
      return false;
    }

    
    return true;
  }

