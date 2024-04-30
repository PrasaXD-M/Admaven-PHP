<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
            height: 80vh;
            background-color: #333;
        }

        .user_details {
            flex: 70%;
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
                <p><b>Fist Name: </b></p>
                <p><b>Last Name: </b></p>
                <p><b>Email: </b></p>
                <p><b>Password: </b></p>
                <p><b>Contact Number: </b></p>
            </div>
        </div>
    </div>
</body>
</html>