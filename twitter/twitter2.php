<?php

include "twitter.php";

$tweetusers = new Twitter(elanurtw)

echo "toplamsayı: " .$tweetusers->tweet();
echo "<br/>";
echo "takipçi sayısı : " .$tweetusers->follower();

?>