<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<style type="text/css">
      *{
      	margin: 0;
      	padding: 0;
      }
      .container
      {
      	display: flex;
      	justify-content: center;
      	align-items: center;
      	padding: 30px;
      	background: #dde1e7;
      }
      .neumorphism-1
      {
      	height: 50px;
      	width: 50px;
      	background: #dde1e7;
      	box-shadow: -3px -3px 7px #ffffff73, 3px 3px 5px rgba(94, 104, 121, .288);
      }
      .neumorphism-2
      {
      	margin: 15px;
      	height: 50px;
      	width: 50px;
      	background: #dde1e7;
      	box-shadow: inset -3px -3px 7px #ffffff73,inset 3px 3px 5px rgba(94, 104, 121, .288);
      }
      .neumorphism-3
      {
      	position: relative;
      	display: flex;
      	justify-content: center;
      	align-items: center;
      	height: 50px;
      	width: 50px;
      	background: #dde1e7;
      	border-radius: 50%;
      	box-shadow: -3px -3px 7px #ffffff73, 3px 3px 5px rgba(94, 104, 121, .288);
      }
      .neumorphism-3:after
      {
      	content: '';
      	position: absolute;
      	height: 80%;
      	width: 80%;
      	background: transparent;
      	border-radius: 50%;
      	box-shadow: inset -3px -3px 7px #ffffff73,inset 3px 3px 5px rgba(94, 104, 121, .288);
      }

	</style>
</head>
<body>
   <div class="container">
   	 <div class="neumorphism-1"></div>
   	 <div class="neumorphism-2"></div>
   	 <div class="neumorphism-3"></div>
   </div>
 
</body>
</html>