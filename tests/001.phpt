--TEST--
Check for yrmcds server status constants.
--SKIPIF--
<?php if( (! extension_loaded('yrmcds')) and (! dl('yrmcds.so')) )
          print "skip"; ?>
--FILE--
<?php
echo \yrmcds\STATUS_NOTFOUND;
?>
--EXPECT--
1
