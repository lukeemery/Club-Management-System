<?php

include "src/objects/members.php";
include "src/objects/contact.php";
include "src/objects/data.php";

$phone = new Phone(1);
echo $phone;
?>

This is a changed.

<pre>
<?php

$member = new User($_GET['uid']);

var_dump($member);

?>

</pre>