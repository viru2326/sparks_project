
<html>
<head>
<style>
.hvrbtn {
  border-radius: 9px;
  background-color: white;
  border: none;
  color: white;
  text-align: center;
  font-size: 15px;
  padding: 3px;
  width: 190px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.hvrbtn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.hvrbtn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.hvrbtn:hover span {
  padding-right: 25px;
}

.hvrbtn:hover span:after {
  opacity: 1;
  right: 0;
}
 marquee{
      font-size: 30px;
      font-weight: 800;
      color: #8ebf42;
      font-family: sans-serif;
      }
</style>
</head>
<body>
<nav class="navbar navbar-fixed-top " style="background-color:#1abc9c;">
<div class="container">
<div class="navbar-header">
<button class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<marquee><b><a class="navbar-brand" style="color: white;font-size: 26px;">Sparks Bank</a></b></marquee>
</div>
<div class="collapse navbar-collapse" id="mynavbar">
<ul class="nav navbar-nav navbar-right" >
<li class="hvrbtn"><a href="index.php" ><span class="glyphicon glyphicon-user"></span> Home</a></li>
<li class="hvrbtn"><a href="user.php" ><span class="glyphicon glyphicon-user"></span> New Users</a></li>
<li class="hvrbtn"><a href="transaction.php" ><span class="glyphicon glyphicon-transfer"></span> Transfer Money</a></li>
<li class="hvrbtn"><a href="histroy.php" ><span class="glyphicon glyphicon-inbox"></span> History</a></li>1
</ul>
</div>
</div>
</nav>
</body>
</html>