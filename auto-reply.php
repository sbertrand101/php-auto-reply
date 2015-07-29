<?php

//prepare the BXML response headers
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

//format response using transfer
echo '<Response>';
if ($_REQUEST['eventType'] == 'answer') {
  echo '<SendMessage to="'.$_REQUEST['from'].'" from="'.$_REQUEST['to'].'">AutoReply Message</SendMessage>';
}
echo '</Response>';
?>