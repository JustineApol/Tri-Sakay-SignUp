function checkPassword(){
    let password = document.getElementById
    ("password").value;
    let cnfrmPassword = document.getElementById
    ("confirm-password") .value;
    console.log(password,cnfrmPassword);
    let message = document.getElementById
    ("message");

    if(password.length !=0){
        if(password == cnfrmPassword){
            message.textContent = "Password Match";
        message.style.backgroundColor = "#ffffff";
        }
        else{
            message.textContent = "Password don't match"
            message.style.backgroundColor = "#ff4d4d";
        }
    }
    
        else {
            alert("Password can't be empty!");
            message.textContent = "";
        }
    
    
}