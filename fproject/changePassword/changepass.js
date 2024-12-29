function change(){
    const url=new URL(window.location.href);
    var e= url.searchParams.get('change');
    if(url.searchParams.has('change')){
        alert(e);
        window.location.href="http://localhost/fproject/changePassword/changepass.html";
    }    
   
}

function redirect(){
    window.location.href="http://localhost/fproject/login.php";
}