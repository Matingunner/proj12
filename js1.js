var a=0;
var amal="";
function getnum(){
    a=Number(document.getElementById("txt").value);
    document.getElementById("txt").value="";
    document.getElementById("txt").focus();
}
function gam(){
    getnum();
    amal="+";
}
function m(){
    getnum();
    amal="-";
}

function t(){
    getnum();
    amal="/";
}

function z(){
    getnum();
    amal="*";
}
function h(){
    var b=Number(document.getElementById("txt").value);
    var c=0;
    if(amal=="+")
    c=a+b;
    if(amal=="-")
    c=a-b;
    if(amal=="*")
    c=a*b;
    if(amal=="/")
    c=a/b;
    switch(amal){
        case "+":c=a+b;break;
        case "-":c=a-b;break;
        case "/":c=a/b;break;
        case "*":c=a*b;break;
    }
    document.getElementById("txt").value=c;
}