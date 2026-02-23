console.log("HTML Page are Connected"); 
//alert("HTML Page are Connected");


let _a = 10;  
var b = 20.56667;
var c = _a+b;
console.log("Sum of A +B", c);
if(_a<0)
{
    _a++;
    console.log(_a);
}
else if(_a>0 && _a<=10)
{
    b = _a;
    console.log(b); 
    c= b+_a;
    console.log(c);
}

var name = "AIUB";
//var name;
var name ='BUET';
console.log(name);

function collect_data()
{
    let Patient_Name = document.getElementById("PatientName").value;
    console.log(Patient_Name); 

    let P_age= document.getElementById("Age").value;
    console.log(P_age);

    return false;
}