<?php
session_start();
if(isset($_SECCSION['is_login'])){
  header('location: index.php');
}
 ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Web_study week2_3</title>
</head>
<body>
  <a href="./logout.php">로그아웃</a>
  <h3>로그인</h3>
  <form method="get">
    <br> 아이디 <input type="text" name="id"></br>
    <br> 비밀번호 <input type="password" name="password"></br>
    <br><input type="submit" value="로그인">
</form>
</body>
</html>
