var boxLogin = document.getElementById("login-box");
var boxForgot = document.getElementById("forgot-box");
var containerLogin = document.getElementById("container-login");
var containerRegister = document.getElementById("container-register");
var countcheck = 0;
console.log("sdsadsa");

function checkLogin(arg) {
    var check = 0;
    for (let i = 0; i < listUsers.length; i++) {
        if (arg.usernameLogin == listUsers[i].username) {
            if (arg.passwordLogin == listUsers[i].password) {
                check = 1;
                break;
            } else {
                check = 2;
                break;
            }
        }
    }
    return check;
}

function login(arg) {
    if (arg == 0) {
        alert("Your user name or password is incorrect.");
    } else if (arg == 1) {
        alert("Successful.");
    }
}

function displayForgotContainer() {
    boxLogin.style.display = "none";
    boxForgot.style.display = "flex";
}
var code = -1;

function checkForgotPassword() {
    var usernametext = document.getElementById("forgot-username").value;
    if (countcheck == 0) {
        var phonetext = document.getElementById("forgot-phonenumber").value;
        var userForgot = {
            usernameForgot: usernametext,
            phonenumberForgot: phonetext
        }
        var check = checkForgot(userForgot);
        if (check == 0) {
            alert("Your user name and phone number are incorrect.");
        } else if (check == 2) {
            alert("Your phone number is incorrect.");
        } else {
            countcheck++;
            displayCodeBox();
            code = Math.floor(Math.random() * 1000);
            //se gui toi sdt tren
            console.log(code);
        }
    } else {
        var codetext = parseInt(document.getElementById("code").value);
        if (checkCode(codetext) == true) {
            var displayPassword = confirm("Your password is " + returnPassword(usernametext) + ". Sign in again");
            if (displayPassword = true) {
                window.location = "index.php";
            }
        } else {
            alert("Your code is incorrect.");
        }
    }

}

function checkCode(arg) {
    console.log(arg);
    if (code == arg) {
        return true;
    } else return false;
}

function returnPassword(username) {
    for (let i = 0; i < listUsers.length; i++) {
        if (username == listUsers[i].username) {
            return listUsers[i].password;
        }
    }
    return 1000;
}

function checkForgot(arg) {
    var check = 0;
    for (let i = 0; i < listUsers.length; i++) {
        if (arg.usernameForgot == listUsers[i].username) {
            if (arg.phonenumberForgot == listUsers[i].phone) {
                check = 1;
                break;
            } else {
                check = 2;
                break;
            }
        }
    }
    return check;
}
var countcheckregister = 0;

function register(arg) {
    if (arg == 0) {
        alert("Your username has already exist.");
    } else if (arg == 1) {
        alert("Your passwords are not confirm.");
    } else if (arg == 2) {
        alert("Successful. Let you login.");
    } else {
        alert("May be have a box is being empty.");
    }
}

function displayCodeBox() {
    var code = document.getElementById("code-box");
    code.style.display = "block";
}

function displayCodeRegister() {
    var displaycodebox = document.getElementById("code-register-box");
    displaycodebox.style.display = "block";
}

function displayLogin() {
    containerLogin.style.display = "block";
    containerRegister.style.display = "none";
}

function displayRegister() {
    containerRegister.style.display = "block";
    containerLogin.style.display = "none";
}