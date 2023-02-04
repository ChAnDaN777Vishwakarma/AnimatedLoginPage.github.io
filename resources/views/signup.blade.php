<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Animated Login Form</title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<style>
		.form1 
{
	position: absolute;
	inset: 2px;
	background: #28292d;
	padding: 20px 40px;
	border-radius: 8px;
	z-index: 2;
	display: flex;
	flex-direction: column;
}
	</style>
</head>
<body>
	<div class="box">
		<form class="form1" autocomplete="off">
			<h2>Sign up</h2>
			<div class="inputBox">
				<input type="text" required="required">
				<span>Name</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="email" required="required">
				<span>Email</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required">
				<span>Password</span>
				<i></i>
				
			</div>
			<div class="links">
				<a href="{{url('/signin')}}">Signin</a>
			</div>
			<input type="submit" value="Login">
			
		</form>
	</div>
</body>
</html>