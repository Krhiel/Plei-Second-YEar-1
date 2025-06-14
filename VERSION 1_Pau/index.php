<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .AdminLogin {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px; 
            width: 100%;
        }
        h1 {
            color: #4285f4;
        }
        h2 {
            color: #4285f4;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
          #username_txt {
          margin-bottom: 30px;
          }
        button {
            background-color: #4285f4;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #357ae8;
        }
        
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 150px; 
        }
        .PNLlogo
        {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 120px;   
        }
    </style>
</head>
<body>
    <img class="logo" src="BATOCERANOBG.png" alt="Logo">
    <img class= "PNLlogo" src="PNLLOGO.png" alt="Company Logo"> 
    <div class="AdminLogin">
        <h1 id="andmin_lbl">PNL Product Sales Login</h1>     
        <input id="username_txt" type="text" placeholder="Username">
        <br>
        <input id="password_txt" type="password" placeholder="Password">
        <br>
        <button onclick="login()">Login</button>
    </div>

    

    
</body>
<script src="jquery.js"></script>
<script src="index.js"></script>
</html>