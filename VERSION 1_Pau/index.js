function login() {


    var username;
    var password;

    username = document.getElementById("username_txt").value;
    
    password = document.getElementById("password_txt").value;
    

    $.ajax({
        url: "indexcontroller.php",
        method: "POST",
        data: {
            "tbl_name": username,
            "password": password
        },
        success: function (data) {
            alert(data);
            console.log(data);
            if (data == "Proceed")
            {
                window.location.href = "Home.php";
            }
            else
             {
                alert("Invalid Credentials");
             }
        },
        error: function (data) {
            alert(data);
            console.log(data);
        }
    });
   


    document.getElementById("username_lbl").innerHTML = username;
    document.getElementById("password_lbl").innerHTML = password;

}