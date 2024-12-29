function checklog(){
    const url=new URL(window.location.href);
    var x= document.getElementById("userd");
    var y= document.getElementById("login");
    var n= url.searchParams.get('name');
    if(url.searchParams.has('name')){
        x.style.display="block";
        y.style.display="none";
        x.innerHTML=n;
    }
}

function error(){
    const url=new URL(window.location.href);
    var y= document.getElementById("er");
    var e= url.searchParams.get('error');
    if(url.searchParams.has('error')){
        y.innerHTML=e;
        
    }    
}
/*
function login(){
    var x= document.getElementById("home");
    var y= document.getElementById("log");
    x.style.display="none";
    y.style.display="block";
    }
*/
function signup(){
    var y=document.getElementById("lg");
    var z=document.getElementById("su");
    var v=document.getElementById("lgn");
    var u=document.getElementById("mc");
    var t=document.getElementById("sup");
    /*form */
    v.style.display="none";
    t.style.display="block";
    /*button */
    z.style.display="none";
    y.style.display="block";
    /*heading */
    u.innerHTML="SignUp";

}

function signtolog(){
    var y=document.getElementById("lg");
    var z=document.getElementById("su");
    var v=document.getElementById("lgn");
    var u=document.getElementById("mc");
    var t=document.getElementById("sup");
    /*form */
    v.style.display="block";
    t.style.display="none";
    /*button */
    z.style.display="block";
    y.style.display="none";
    /*heading */
    u.innerHTML="Login";

}
function profile(){
    var y= document.getElementById("login");
    var x=document.getElementById("userd");
    var name=x.innerHTML;
    if(y.style.display!="none"){
        window.alert("you need to login first!");
    }else{
        
        window.location.href="display.php?name="+name;  
    }
      
    }
    

    function gqr(){
        var y= document.getElementById("login");
        var x=document.getElementById("userd");
        var name=x.innerHTML;
        if(y.style.display!="none"){
            window.alert("you need to login first!");
        }else{
            
            window.location.href="http://localhost/fproject/QR/index.html?name="+name;  
        }
        }