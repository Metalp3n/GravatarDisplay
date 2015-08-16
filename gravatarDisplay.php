<?
//start with some settings
$userEmail = "mike@rapidpurple.com";
$size = "150";
$defaultAvatar = "http://icons.iconarchive.com/icons/guillendesign/variations-3/256/Default-Icon-icon.png";


//convert email to lowercase
$userEmail = strtolower($userEmail);
//convert to MD5 Hash
$userEmailHash = md5($userEmail);

//convert default avatar URL to urlencoded
$defaultAvatar = urlencode($defaultAvatar); 

//echo gravatar
echo "<img src='//gravatar.com/avatar/$userEmailHash?d=$defaultAvatar&s=$size'>";

?>
