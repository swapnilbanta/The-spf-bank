<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <link rel="stylesheet" type="text/css" href="css/nav.css">

    <style>

    button,input {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        letter-spacing: 1.4px;
      }
      .background {
        width: 100%;
        display: flex;
      }

      .container {
        flex: 0 1 700px;
        width: 100%;
        margin: auto;
        padding: 10px;
      }

      .screen {
        position: relative;
        background-color: yellow;
        border-radius: 15px;
          box-shadow: 5px 10px #888888;
      }

      .screen-header {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        background: green;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
      }

      .screen-header-right {
        display: flex;
      }

      .screen-header-ellipsis {
        width: 5px;
        height: 5px;
        margin-left: 3px;
        border-radius: 8px;
        background:#c0ce21;
      }

      .screen-body {
        display: flex;
      }

      .screen-body-item {
        flex: 1;
        padding: 50px;
      }
      .app-form-group {
        margin-bottom: 15px;
      }

      .app-form-group.button {
        margin-bottom: 0;
        text-align: right;
        position: absolute;
        bottom: 30px;
        right:40px;
      }

      .app-form-control{
        width: 100%;
        padding: 10px 0;
        background: none;
        border: none;
        border-bottom: 1px solid #8b0101;
        color: green;
        font-size: 14px;
        outline: none;
        transition: border-color .2s;
      }

      .app-form-control::placeholder {
        color: yellow;
      }

      .app-form-control:focus {
        border-bottom-color: yellow;
      }

      .app-form-button {
        background: none;
        border: none;
        margin-left: 20px;
        color: green;
        font-size: 14px;
        cursor: pointer;
        outline: none;
      }

      .app-form-button:hover {
        color: #524848;
      }

      @media screen and (max-width: 520px) {
        *{
          letter-spacing:1px;
        }
        .container{
          margin-left: 20px;
          margin-right: 20px;
          margin-bottom: 40px;
        }
        .screen-body {
          flex-direction: column;
        }

        .screen-body-item.left {
          margin-bottom: 50px;
        }
        .app-form-button{
          margin-top:5px;
        }
      }

      @media screen and (max-width: 600px) {
        .screen-body {
          padding: 40px;
        }

        .screen-body-item {
          padding: 0;
        }
      }


    </style>

</head>

<body style="background-color : red;">
    <?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
        }
    }
    ?>

    <div class="topnav" id="myTopnav">
    <h1> TSF Bank</h1>
      <a href="index.php" >Home</a>
      <a href="createuser.php">Create  User</a>
      <a href="transfermoney.php">Transfer Money</a>
      <a href="transactionhistory.php">Transcation history</a>

    </div>

    <h2 class="text-center pt-4" style="color : blue;">Create a User</h2>
    <br>

    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">

                </div>


                    <div class="screen-body-item">
                        <form class="app-form" method="post">
                            <div class="app-form-group">
                                <input s placeholder="NAME" type="text" name="name" required>
                            </div>
                            <div class="app-form-group">
                                <input placeholder="EMAIL" type="email" name="email" required>
                            </div>
                            <div class="app-form-group">
                                <input  placeholder="BALANCE" type="number" name="balance" required>
                            </div>
                            <br>
                            <div class="app-form-group button">
                                <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                                <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>swapnil banta</b><br>GRIP TheSparksFoundation.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


</body>

</html>
