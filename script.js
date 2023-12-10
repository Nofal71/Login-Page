
function Verify(){
let username = document.getElementById("name").value;
let password = document.getElementById("password").value;


if (username === "NOFAL" && password === "Nofal123") {
    
        document.getElementById("verify").innerHTML = " Successful Login ";
    
} else {
    document.getElementById("verify").innerHTML = " Login Failed ";
}
}
