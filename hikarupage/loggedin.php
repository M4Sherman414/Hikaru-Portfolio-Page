<?php

session_start();

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

        <div id="welcome" class="sign-in">
            <div style="font-size:45px;text-align: center;" class="register">
                WELCOME,
                <br>
                <?php echo $_SESSION['name']." ".$_SESSION['surname']?>
                <br>
                <form action="logout.php" method="post">
                    <input type="submit" name="logout" value="Log out" class="logout">
                </form>
            </div>
        </div>
    
    <br><br><br>
    <div class="footer">

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