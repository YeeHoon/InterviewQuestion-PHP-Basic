<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="verify_ajax.js"></script>
		<title>Welcome</title>
		
		<style>			
			*{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}
			
			body{
				background-size: cover;
				font-family: sans-serif;
				font-size: 15px;
			}
			
			.divWrapper{
				width: 100%;
				float: left;
			}
			
			#loginWrapper{
				height: 100vh;
				width: 100vw;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			
			#loginForm{
				position: relative;
				width: 100%;
				max-width: 380px;
				max-height: 200px;
				padding: 40px 30px 20px 30px;
				background: #FAFAFA;
				border-style: solid;
				border-width: 1px;
				border-radius: 10px;
				border-color: #DFDFDF;
			}
			
			#username{
				width: 100%;
				padding: 3px 8px;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}
			
			#login{
				width: 20%;
				float: right;
				background-color: #4CAF50;
				color: white;
				padding: 6px 9px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			}
			
			#submit:hover{
				background-color: #AFAFAF;
			}
			
			#remark, #message{
				font-size: 12px;
				text-align: center;
				margin-top: 2%;
			}
		</style>
	</head>
	
	<body>
		<div id="loginWrapper">
			<div id="loginForm">
				<div class="divWrapper">
					<div id="leftWrapper" style="width:30%;float:left;">
						Username: 
					</div>
					
					<div id="rightWrapper" style="width:70%;float:left;">
						<input type="text" id="username" placeholder="Enter username">
						<div id="message"></div>
						<div id="remark"></div>
					</div>
				</div>
				
				<br/><br/><br/>
				
				<input type="submit" id="login">
			</div>
		</div>
	</body>
</html>
