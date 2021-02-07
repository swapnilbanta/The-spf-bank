<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

@import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap');

*
{
  margin: 0;
  padding: 0;
font-family: 'Libre Baskerville', serif;
}





.topnav {
  overflow: hidden;
  background-color: #333;
}
h1
{
  float: left;
margin-top: 30px;
 color: white;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 50px 90px;
  text-decoration: none;
  font-size: 17px;

}

.topnav a:hover {
  background-color: green;
  color: black;
}
.one
{
  height: 300px;

  display: flex;
  align-items: center;
  justify-content: center;



}




@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}




.column {
  float: left;
  width: 200px;
  padding: 100px;
  height: 200px;

}





.row:after {
  content: "";
  display: table;
  clear: both;
}


.login-card {

  width: 400px;
  background-color: #7E7E7E;
  margin: 0px auto ;
  border-radius: 9px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  min-height:440px;

}
.login-card h1 {
  text-align: center;
  font-family:open Sans;
  color:#FFFFFF;
  font-weight:700px;
  font-size:20px;
  line-height:27px;
  padding-top: 24px;

}

.lock{ padding-left:181px; width:30px; height:37px; padding-top:10px;}

.log_body{ padding:40px 20px 20px 20px;}

.log_user{ background:#FEFEFE; color:#999999; border-radius: 10px; width:349px; height:31px; padding:5px; font-family:open Sans; font-weight:700px; font-size:15px; border:none; }

.log_Pass{background:#FEFEFE; color:#999999; border-radius: 10px; width:349px; height:31px; padding:5px; font-family:open Sans; font-weight:700px; font-size:15px; border:none;}


.login-submit{ background:#4DC889; border:none; border-radius: 10px; width:359px; height:36px; cursor:pointer; font-family:open Sans; font-weight:700px; font-size:15px; color:#FFFFFF; }

.log_body a{ text-decoration:none; color:#78EEB2; font-family:open Sans; font-weight:900px; font-size:15px; line-height:21px;}


.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}


.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


}


</style>
</head>





<div class="topnav" id="myTopnav">
<h1> TSF Bank</h1>
<nav>
  <a href="index.php" >Home</a>
  <a href="createuser.php">Create  User</a>
  <a href="transfermoney.php">Transfer Money</a>
  <a href="transactionhistory.php">Transcation history</a>
</nav>
</div>

<div class="one">
<h2 >Welcome  To TSF Bank </h2>

<img  style="margin-left: 12px;"src="img/bank_one.jpg" width="400px" />




</div>
<div class="row">
  <div class="column" >
<img  src="img/user.png"/>
<br>
 <a href="createuser.php"><button class="button">Create user</button></a>

  </div>
  <div class="column" >
    <img  src="img/transcation.png"  height="200px"/>
 <a href="transfermoney.php"><button class="button">Make a Transaction</button></a>

</div>




  <div class="column" >
  <img  src="img/history.png"  height="200px"/>
   <a href="transactionhistory.php"><button class="button">Transaction  History</button></a>
  </div>
</div>





</body>
</html>
