<?php
# $f=fopen ("/mnt/ifaces-speed/all_kb_speed","r");
# $all=fread ($f,100);
# fclose ($f);
# echo $all;
# echo "0|0|0|0|100|100";
$frx = fopen ("/sys/class/net/ppp0/statistics/rx_bytes","r");
$rx = fgets ($frx);
$rx = rtrim ($rx);
fclose ($frx);

$ftx = fopen ("/sys/class/net/ppp0/statistics/tx_bytes","r");
$tx = fgets ($ftx);
$tx = rtrim ($tx);
fclose ($ftx);
echo "||||$rx|$tx"
?>