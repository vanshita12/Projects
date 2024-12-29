function error(){
    const url=new URL(window.location.href);
    var e= url.searchParams.get('error');
    if(url.searchParams.has('error')){
        alert(e);
        window.location.href="http://localhost/fproject/login.php";
    }    
    var s= url.searchParams.get('status');
    if(url.searchParams.has('status')){
        alert("registration successful");
        window.location.href="http://localhost/fproject/login.php";
    }  
}


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