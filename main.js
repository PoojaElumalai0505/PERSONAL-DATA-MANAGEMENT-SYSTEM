function validation(){
    var firstname=document.getElementById("firstname").value;
    var lastname=document.getElementById("lastname").value;
    var dob=document.getElementById("dob").value;
    var gender=document.getElementById("gender").value;
    var fathername=document.getElementById("fathername").value;
    var mothername=document.getElementById("mothername").value;
    var fathermobilenumber=document.getElementById("fathermobilenumber").value;
    var mothermobilenumber=document.getElementById("mothermobilenumber").value;
    var address=document.getElementById("address").value;
    var password=document.getElementById("password").value;
    if(firstname == ""){
        document.getElementById('firstname-error').innerHTML = "** Enter your first name";
        return false;
    }
    else{document.getElementById('firstname-error').innerHTML = "";}

    var fname=/^[a-zA-Z\-]+$/;
    if(!firstname.match(fname)){
        document.getElementById('firstname-error').innerHTML = "** Enter alphapets only";
        return false;
    }  
    if(lastname == ""){
        document.getElementById('lastname-error').innerHTML = "** Enter your last name";
        return false;
    }
    else{document.getElementById('lastname-error').innerHTML = "";}
    var lname=/^[a-zA-Z\-]+$/;
    if(!lastname.match(lname)){
        document.getElementById('lastname-error').innerHTML = "** Enter alphapets only";
        return false;
    }  

    if(dob == ""){
        document.getElementById('dob-error').innerHTML = "** Enter your date of birth";
        return false;
    }
    else{document.getElementById('dob-error').innerHTML = "";}

    if(gender == "0"){
        document.getElementById('gender-error').innerHTML = "** Select your gender";
        return false;
    }
    else{document.getElementById('gender-error').innerHTML = "";}

    if(fathername == ""){
        document.getElementById('fathersname-error').innerHTML = "** Enter your father name";
        return false;
    }
    else{document.getElementById('fathersname-error').innerHTML = "";}

    if(mothername == ""){
        document.getElementById('mothersname-error').innerHTML = "** Enter your mother name";
        return false;
    }
    else{document.getElementById('mothersname-error').innerHTML = "";}

    var p=/^\d{10}$/;
    if(fathermobilenumber == ""){
        document.getElementById('fathersmobilenumber-error').innerHTML = "** Enter your father mobile number";
        return false;
    }
    else{document.getElementById('fathersmobilenumber-error').innerHTML = "";}
    if(fathermobilenumber.length != "10"){
        document.getElementById('fathersmobilenumber-error').innerHTML = "** Father mobile number should be 10 in length";
        return false;
    }
    else{document.getElementById('fathersmobilenumber-error').innerHTML = "";}
    if(!fathermobilenumber.match(p)){
        document.getElementById('fathersmobilenumber-error').innerHTML = "** Enter numeric value only";
        return false;
    }    

    var q=/^\d{10}$/;   
    if(mothermobilenumber == ""){
        document.getElementById('mothersmobilenumber-error').innerHTML = "** Enter your mother mobile number";
        return false;
    }
    else{document.getElementById('mothersmobilenumber-error').innerHTML = "";}

    if(mothermobilenumber.length != "10"){
        document.getElementById('mothersmobilenumber-error').innerHTML = "** Mother mobile number should be 10 in length";
        return false;
    }
    else{document.getElementById('mothersmobilenumber-error').innerHTML = "";}
    if(!mothermobilenumber.match(q)){
        document.getElementById('mothersmobilenumber-error').innerHTML = "** Enter numeric value only";
        return false;
    }   

    if(address == ""){
        document.getElementById('address-error').innerHTML = "** Enter your address";
        return false;
    }
    else{document.getElementById('address-error').innerHTML = "";}

    //var r =/^(?=.*[-\#\$\.\%\&\@\!\+\=\\*])(?=.*[a-zA-Z])(?=.*\d).{8,12}$/;
    var r = /^(?=.*[.\-\@\$\*])(?=.*[a-zA-Z])(?=.*\d).{8,12}$/;
    if(password == ""){
        document.getElementById('password-error').innerHTML = "** Enter your password";
        return false;
    }
    else{document.getElementById('password-error').innerHTML = "";}
    if(!password.match(r)){
        document.getElementById('password-error').innerHTML = "** Password must be 8-12 characters,atleast one alphabet,atleast one number,atleast one special character (-,.,@,$)";
        return false;
    }  
    return true;
}