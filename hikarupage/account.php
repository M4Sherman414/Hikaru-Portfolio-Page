<?php 
session_start();



if(isset($_SESSION['error'])&&$_SESSION['error'] == 1){
    echo "<script>alert('User could not found! Please check if password and email is correct.')</script>";
}

$_SESSION['error'] = 0;

if(isset($_SESSION['id'])){
    header("Location: loggedin.php");
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div style="margin-top: 70px;" align="center"><a href="home.html"><img src="videos/hikaru.png" alt="hikaru"></a></div>

    <div class="all">
        <a href="home.html" class="button-link">Home</a>
        <a href="about.html" class="button-link">About Hikaru</a>
        <a href="videos.html" class="button-link">Videos</a>
        <a href="rating.html" class="button-link">Rating</a>
        <a href="social.html" class="button-link">Social</a>
        <a href="account.php"><img src="videos/account-svgrepo-com.png" alt=""></a>
    </div>
    
    <div class="content-frame">
            

        <div id="sign-up" class="sign-up">
            <div class="register">
                
                <form id="profile" action="register.php" method="post" name="profile">
                    <div style="font-size:30px;color: orangered;">Register</div>
                    <br>
                    Name
                    <br>
                    <div style="display:flex;align-items:center;justify-content:center;">
                        <input name="name" type="text" placeholder="name">
                        <input name="surname" type="text" placeholder="surname">
                    </div>
                    Birthday
                    <br>
                    <div style="display:flex;align-items:center;justify-content:center;">
                        <select name="days" id="days" ></select>
                        <select name="months" id="months">
                        <option name="month" value="1">January</option>
                        <option name="month" value="2">February</option>
                        <option name="month" value="3">March</option>
                        <option name="month" value="4">April</option>
                        <option name="month" value="5">May</option>
                        <option name="month" value="6">June</option>
                        <option name="month" value="7">July</option>
                        <option name="month" value="8">August</option>
                        <option name="month" value="9">September</option>
                        <option name="month" value="10">October</option>
                        <option name="month" value="11">November</option>
                        <option name="month" value="12">December</option>
                        </select>
                        <select name="years" id="years"></select>
                    </div>
                    Gender
                    <br>
                    <div style="display: flex;user-select:none;font-size:25px;align-items:center;justify-content:center;">
                        <div style="border-radius:10px;margin:10px;cursor: pointer;padding-right:10px;background-color:gray;" onclick="check('male')"><input id="male" type="radio" value="1" name="gender">Male</div>
                        <div style="border-radius:10px;margin:10px;cursor: pointer;padding-right:10px;background-color:gray;" onclick="check('female')"><input id="female" type="radio" value="0" name="gender">Female</div>
                    </div>
                    E-mail
                    <br>
                    <div style="display: flex;align-items:center;justify-content:center;">
                        <input type="email" placeholder="e-mail" name="mail" style="width:400px;">
                    </div>
                    Password
                    <br>
                    <div style="display: flex;align-items:center;justify-content:center;">
                        <input type="password" placeholder="password" name="pass" style="width: 400px;">
                    </div>
                    <input type="submit" value="Submit">
                    <br>
                    <a class="a-link" id="login" onclick="change(0)" style="font-size: 15px;">Already have an account</a>
                </form>
            </div>
        </div>
        
        <div id="sign-in" class="sign-in">
            <div class="register">
                
                <form id="profile" action="login.php" method="post" name="profile">
                    <div style="font-size:30px;color: orangered;">Log in</div>
                    <br>
                    E-mail
                    <br>
                    <div style="display: flex;align-items:center;justify-content:center;">
                        <input type="email" placeholder="e-mail" name="mail">
                    </div>
                    Password
                    <br>
                    <div style="display: flex;align-items:center;justify-content:center;">
                        <input type="password" placeholder="password" name="pass">
                    </div>
                    <input type="submit" value="Submit">
                    <br>
                    <div style="display: flex; font-size:15px;">
                        <a class="a-link" id="signup" onclick="change(1)">Not a member yet?</a>
                    </div>
                </form>
            </div>
        </div>
    
    <br><br><br>
    <div class="footer">
        <div class="section">
            <p>Hikaru Nakamura<br>All rights reserved.<br>Made by <a class="p1" href="burhanco.html">BurhanCo</a></p>
        </div>

        <div style="margin-left: 30px;" class="section">
            <p>Follow Hikaru<br>
                <a class="facebook-link" href="https://www.facebook.com/GMHikaru">Facebook</a><br>
                <a class="twitch-link" href="https://www.twitch.tv/gmhikaru">Twitch</a><br>
                <a class="twitter-link" href="https://x.com/gmhikaru">X</a></p>
        </div>
        <div class="section"></div>
        <div class="section"></div>
        <div  class="section">
            <a href="https://lichess.org"><img src="videos/lichess.png" alt=""></a>
        </div>
        <div class="section"> 
            <a href="https://chess.com"><img src="videos/chess.jpg" alt="chees.com"></a>
        </div>
        <br><br><br><br><br>
    </div>

    <script>

       
        function check(id){
            let radio = document.getElementById(id);
            if(radio.checked==false){
                radio.checked = true;
            }else{
                radio.checked=false;
            }
        }
        
        const selectD = document.getElementById("days");
        const selectM = document.getElementById("months");
        const selectY = document.getElementById("years");
        
        selectY.addEventListener("change",day);
        selectM.addEventListener("change",day);

        for(let i=2024;i>=1950;i--){
        
            let year = document.createElement("option");
        
            year.value=""+i;
            year.className="year";
            if(i<10){
                year.textContent=""+i;
            }else{
                year.textContent=""+i;
            }
            selectY.appendChild(year);
        }
        


        function day(){

            console.log(selectM.value);

            let Year=parseInt(selectY.value);
            let Month=parseInt(selectM.value);

            selectD.innerHTML="";

            if(Month==4||Month==6||Month==9||Month==11){
                for(let i=1;i<=30;i++){
                    let day = document.createElement("option");
                    day.value=""+i;
                    day.textContent=""+i;
                    day.className="day";
                    selectD.appendChild(day);
                }
            }else if(Month==2){
                if(Year%4==0){
                    for(let i=1;i<=29;i++){
                        let day = document.createElement("option");
                        day.value=""+i;
                        day.textContent=""+i;
                        day.className="day";
                        selectD.appendChild(day);
                    }
                }else{
                    for(let i=1;i<=28;i++){
                        let day = document.createElement("option");
                        day.value=""+i;
                        day.textContent=""+i;
                        day.className="day";
                        selectD.appendChild(day);
                    }
                }
            }else{
                for(let i=1;i<=31;i++){
                    let day = document.createElement("option");
                    day.value=""+i;
                    day.textContent=""+i;
                    day.className="day";
                    selectD.appendChild(day);
                }
            }
        }

        day();

        let form = document.profile.gender;

        let login = document.getElementById("login");
        let signup = document.getElementById("signup");
        let sign_up = document.getElementById("sign-up");
        let sign_in = document.getElementById("sign-in");

        function change(id){
            
            if(id==1){
                sign_in.style.display = "none";
                sign_up.style.display = "flex";
            }else{
                sign_in.style.display = "flex";
                sign_up.style.display = "none";
            }

        }

        let welcome = document.getElementById("welcome");

        function checkId(id){
            if(id!=0){
                welcome.style.display = "flex";
                sign_in.style.display = "none";
            }else{
                welcome.style.display = "none";
                sign_in.style.display = "flex";
            }
        }


    </script>

</body>
</html>