var $ = function(id){
    return document.getElementById(id) ;
};

//get associative array of name and password stored in memory
var getStoredValues = function(){
    var username = localStorage.getItem("teamRocketUsername") || "" ;
    var password = localStorage.getItem("teamRocketPassword") || "" ; 
    return {name:username , password:password} ;
};

//given username and password, stores them in memory
var setStorageValues = function(username , password) {
    localStorage.setItem('teamRocketUsername',username) ; 
    localStorage.setItem('teamRocketPassword' , password) ; 
};

//updates the fields if there are values in memory
var updateInputs = function(){
    values = getStoredValues() ; 
    if (values.name && values.password){
        $('username').value =values.name ; 
        $('password').value = values.password ;
    }
} ;

window.onload=function(){
    updateInputs() ; 
};

//on submit, this function is called
function processForm(){
    //if remeber checkbox was checked store the details in memory
     if($('remember').checked){
        var username = $('username').value ;
        var password = $('password').value ;
        setStorageValues(username , password) ;
    }
    
    // if any of the fields is empty, display error_message
    if(!($('username').value && $('password').value)){
        $('error_message').firstChild.nodeValue="Please,fill in both fields" ;
        return false ;
    }
    
   return true ;
} ;


