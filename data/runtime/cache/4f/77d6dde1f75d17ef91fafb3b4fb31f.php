<?php
//000000000000
 exit();?>
s:332:"SELECT `b`.*,`a`.* FROM `ey_archives` `a` LEFT JOIN `ey_arctype` `b` ON `b`.`id`=`a`.`typeid` WHERE  (  a.typeid IN (85,86,90,91,92,104,87,93,94,95,96,88,97,98,99,89,100,101,102,103) AND a.channel IN (1) AND a.arcrank > -1 AND a.status = 1 AND a.is_del = 0 )  AND `a`.`lang` = 'cn' ORDER BY a.sort_order asc, a.add_time desc LIMIT 3";