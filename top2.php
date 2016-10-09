<html>
<head>
	<title></title>
<!--	<meta name="description" content=Animated Login Form - 2 using HTML+CSS+JAVASCRIPT for use in any web project./>
-->	<meta name="keywords" content="html,css,js,javascript,codingflag,front end,web design,web,codes,programms,html5,coding,editor,jquery,p5,web dev"/>
	<link rel="shortcut icon" href="images/favicon.ico" >
<script src="login-css/prettify.js"></script>
<link rel="stylesheet"  href="login-css/prettify.css">
<script src="login-css/jquery.js"></script>
<script src="login-css/default.js"></script>
<style>
	.code{
		width:100%;
		resize:none;
		height:320px;
		font-family:sans-serif;
		font-size:18px;
		
	}
	#codes
	{
		position: absolute;
		margin-right:1px;
		top: 220;
		left: 0;
		right:0;
		background: #EFEFEF;
		width: 54px;
		height: auto;
		padding: 14 1;
		border-radius:0 10px 10px 0 ;
		border:3px solid #eee;
		transition:all 0.3s linear;
	}
	#codes:hover
	{
		width:60px;
		padding-left:6px;
	}
	#codes i
	{
		cursor:pointer;
		display:block;
		width:40px;
		font-size:35px;
		margin-left:3px;
		margin-top:6px;
	}
                       .codesTextArea{
				color: #151719;
				right: 0px;
				top:0;
				border:none;
				outline:none;
				font-size:17px;
				border-left:2px dashed #333;
				resize:none;
				margin-top: 0px;
				position: absolute;
				width: 570px;
				padding-left:3px;
				height: 100%;
				z-index: 10;
				transform-origin:100% 100%;
				transform:perspective(800px) rotateY(90deg);
				transition:transform 0.3s linear;
				float:right;
				padding: 5px;
			}
</style>

<script type="text/javascript">
			var statusA = "close";
			function showCode(menu,b,c)
			{
				var menu=document.getElementById(menu);
				if(statusA == "close")
				{
					menu.style.transform = "perspective(800px) rotateY(0deg)";
					statusA = "open";
				}else
				{
					menu.style.transform = "perspective(800px) rotateY(90deg)";
					statusA = "close";
				}
			}
			
</script>


<style>
@import 'https://daneden.github.io/animate.css/animate.min.css';
@import url(http://fonts.googleapis.com/css?family=Open+Sans);

html,body {
	width: 100%;
	height:100%;
	overflow:hidden; 
}
body { 
	font-family: 'Open Sans', sans-serif;
	background: rgba(44, 44, 58, 0.96);
}
.login,.welcomeMsg { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:320px;
	height:320px;
	-webkit-animation-duration:1.3s;
	-moz-animation-duration:1.3s;
	animation-duration:1.3s;
}
.welcomeMsg {
	margin: -50px 0 0 -135px;
	font-size: 350%;
	color:#eee;
	font-family: sans-serif;
	-webkit-animation-duration:1.5s;
	-moz-animation-duration:1.5s;
	animation-duration:1.5s;
}
.login h1 {
	text-align:center; 
	color: #eee;
	text-shadow: 0 0 12px rgba(0,0,0,0.22);
	letter-spacing:1px;
}
.login input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #e7e7e7;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .8s ease-out;
	-moz-transition: box-shadow .8s ease-out;
	transition: box-shadow .8s ease-out;
	-webkit-animation-duration:1s;
	-moz-animation-duration:1s;

}
.login input:focus {
	font-size: 14px;
	border-radius: 7px;
}

.login .btn {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	padding: 4px 10px 4px;
	margin-bottom: 0;
	font-size: 18px;
	line-height: 18px;
	color: #eee;
	border:none;
	text-align: center;
	vertical-align: middle;
	background-color: #55acee;
	cursor: pointer;
}
.btn:hover, .btn:active{
	background-color: #6FC6FF; 
}
.login .btn-large {
 	padding: 9px 14px;
 	font-size: 17px;
 	line-height: normal;
 	-webkit-border-radius: 5px;
 	-moz-border-radius: 5px;
 	border-radius: 5px; 
 }
.login .btn-block {
	width: 100%; 
	display:block; 
}
.disp {
	display:block;
	-wenkit-animation-delay:0.3s;
	-moz-animation-delay:0.3s;
	animation-delay:0.3s;
}
.hide {
	display:none;
}
</style>
</head>
<body>


<!--<script>prettyPrint();</script>-->