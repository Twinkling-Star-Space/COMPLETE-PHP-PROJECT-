
var D = document.form1.Diplalname.value;
var I = document.form1.Diplaladdress. value;
var P = document.form1. Diplalemail.value;


function validate()
{
    var namepattern ="/^[a-zA-Z]+[ ]+[a-zA-Z]$/";
    if(D.match(namepattern))
    {
     alert("Valid Name");
    }

    var addresspattern = "/^[a-zA-Z]$/";
    if(I.match(Diplaladdress))
    {
        alert("Valid Address ");
    }
    
    var emailpattern = "/^[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]{2}$/";
    if(P. match(Diplalemail))
    {
        alert("Valid Email");
    }

}
