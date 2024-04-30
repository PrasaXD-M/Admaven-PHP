<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Rubik+Burned&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Protest+Strike&family=Rubik+Burned&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Oswald:wght@500&family=Rubik+Burned&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato&display=swap');

        :root {
            /* || FONTS */
            --SPACIAL-FF: 'Dancing Script', cursive;
            --SPACIAL-FF2: 'system-ui';

            --FF-CAPTION: 'Protest Strike', sans-serif;

            --LINK-FF: 'Oswald', sans-serif;

            --ABT-FONT: "Kanit";

            /* || COLORS */
            --INFO-MAIL-COLOR: #000;
            --INFO-BGCOLOR: rgb(237, 232, 232);
            --LIGHT-COLOR: #fff;
                /* Nav color */
            --NAV-BACK-COLOR: #333;
            --NAV-LINE-BACK: hsl(39, 93%, 45%);

            /* header content */
            --ORANGE-COLOR: rgb(228, 151, 6); 
        }
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .user_interface_container {
            display: flex;

        }

        .user_side_bar {
            flex: 30%;
            height: 79vh;
            background-color: lightblue;
            /* opacity: 0.5; */
        }

        .user_details {
            flex: 70%;
        }

        .details_cont_user {
            background-color: dodgerblue;
            /* opacity: 0.6; */
            padding: 1rem;
            border-radius: 20px;
            margin: 1em;
        }
        
        .details_cont_user h3 {
            text-align: center;
            font-family: var(--ABT-FONT);
            color: var(--LIGHT-COLOR);
            text-decoration: underline var(--ORANGE-COLOR);
        }

        .details_cont_user p {
            margin-bottom: 0.3rem;
        }

    </style>
</head>
<body>
    <header>
    <?php include("header.php"); ?>
    </header>
    <div class="main">
        <div class="user_interface_container">
            <div class="user_side_bar">
                <div class="user_profile_pic">

                </div>
                <div class="Detailsedit-btn">

                </div>
            </div>
            <div class="user_details">
                <div class="details_cont_user">
                    <h3>My Account Details</h3>
                    <p><b>Fist Name: </b></p>
                    <p><b>Last Name: </b></p>
                    <p><b>Email: </b></p>
                    <p><b>Password: </b></p>
                    <p><b>Contact Number: </b></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>