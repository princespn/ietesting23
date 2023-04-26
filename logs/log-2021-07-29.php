<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-29 00:24:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 00:24:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 00:24:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 00:24:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 00:24:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 00:24:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 00:24:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 00:27:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 00:27:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 00:27:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 00:27:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 00:28:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 00:28:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 00:28:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 00:28:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 00:31:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 00:31:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 00:32:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 00:32:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 00:35:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 309
ERROR - 2021-07-29 00:35:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 322
ERROR - 2021-07-29 00:35:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 00:35:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 514
ERROR - 2021-07-29 00:40:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 00:48:46 --> Query error: Unknown column 'S.alumni' in 'where clause' - Invalid query: SELECT `S`.*, `SC`.`school_name`, `U`.`username`, `U`.`temp_password`, `U`.`role_id`, `U`.`status` AS `login_status`
FROM `enrollments` AS `E`
LEFT JOIN `students` AS `S` ON `S`.`id` = `E`.`student_id`
LEFT JOIN `users` AS `U` ON `U`.`id` = `S`.`user_id`
LEFT JOIN `schools` AS `SC` ON `SC`.`id` = `S`.`school_id`
WHERE `E`.`academic_year_id` = '82'
AND `S`.`school_id` = '71'
AND `S`.`alumni` = '0'
ERROR - 2021-07-29 00:48:46 --> Severity: error --> Exception: Call to a member function result() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\administrator\models\Administrator_Model.php 34
ERROR - 2021-07-29 00:50:01 --> Severity: Notice --> Trying to get property 'enable_rtl' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\core\MY_Controller.php 91
ERROR - 2021-07-29 00:50:01 --> Query error: Unknown column 'S.alumni' in 'where clause' - Invalid query: SELECT `S`.*, `SC`.`school_name`, `U`.`username`, `U`.`temp_password`, `U`.`role_id`, `U`.`status` AS `login_status`
FROM `enrollments` AS `E`
LEFT JOIN `students` AS `S` ON `S`.`id` = `E`.`student_id`
LEFT JOIN `users` AS `U` ON `U`.`id` = `S`.`user_id`
LEFT JOIN `schools` AS `SC` ON `SC`.`id` = `S`.`school_id`
WHERE `E`.`academic_year_id` = '82'
AND `S`.`school_id` = '71'
AND `S`.`alumni` = '0'
ERROR - 2021-07-29 00:50:01 --> Severity: error --> Exception: Call to a member function result() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\administrator\models\Administrator_Model.php 34
ERROR - 2021-07-29 00:51:55 --> Severity: Notice --> Trying to get property 'enable_rtl' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\core\MY_Controller.php 91
ERROR - 2021-07-29 01:05:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\subject\index.php 166
ERROR - 2021-07-29 01:05:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\subject\index.php 219
ERROR - 2021-07-29 01:05:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\subject\index.php 233
ERROR - 2021-07-29 01:06:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\subject\index.php 166
ERROR - 2021-07-29 01:06:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\subject\index.php 219
ERROR - 2021-07-29 01:06:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\subject\index.php 233
ERROR - 2021-07-29 01:10:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\subject\index.php 166
ERROR - 2021-07-29 01:10:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\subject\index.php 219
ERROR - 2021-07-29 01:10:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\subject\index.php 233
ERROR - 2021-07-29 01:12:55 --> Could not find the language line "module"
ERROR - 2021-07-29 01:12:55 --> Could not find the language line "function"
ERROR - 2021-07-29 01:13:12 --> Could not find the language line "module"
ERROR - 2021-07-29 01:13:12 --> Could not find the language line "function"
ERROR - 2021-07-29 01:25:03 --> Unable to delete cache file for academic/classes/index
ERROR - 2021-07-29 01:25:35 --> Could not find the language line "study"
ERROR - 2021-07-29 01:25:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\material\index.php 136
ERROR - 2021-07-29 01:25:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\material\index.php 191
ERROR - 2021-07-29 01:25:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\material\index.php 214
ERROR - 2021-07-29 01:25:35 --> Could not find the language line "study"
ERROR - 2021-07-29 01:25:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\academic\views\syllabus\index.php 196
ERROR - 2021-07-29 01:28:05 --> Could not find the language line "number"
ERROR - 2021-07-29 01:28:15 --> Could not find the language line "method"
ERROR - 2021-07-29 01:28:15 --> Could not find the language line "bank"
ERROR - 2021-07-29 01:28:15 --> Could not find the language line "bank"
ERROR - 2021-07-29 01:28:15 --> Could not find the language line "number"
ERROR - 2021-07-29 01:28:15 --> Could not find the language line "number"
ERROR - 2021-07-29 01:28:15 --> Could not find the language line "number"
ERROR - 2021-07-29 01:28:15 --> Could not find the language line "number"
ERROR - 2021-07-29 01:28:15 --> Could not find the language line "year"
ERROR - 2021-07-29 01:28:58 --> Could not find the language line "number"
ERROR - 2021-07-29 02:19:11 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:19:24 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:23:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:24:02 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:24:34 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:14 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:28:14 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:19 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:22 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:28:23 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:28:29 --> 404 Page Not Found: /index
ERROR - 2021-07-29 07:58:32 --> Could not find the language line "number"
ERROR - 2021-07-29 02:28:47 --> 404 Page Not Found: /index
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 07:58:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:28:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:29:01 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:29:01 --> 404 Page Not Found: /index
ERROR - 2021-07-29 07:59:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 02:29:39 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:30:16 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:00:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 02:30:59 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:08:22 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 260
ERROR - 2021-07-29 08:08:22 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 301
ERROR - 2021-07-29 02:41:02 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:13:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:14:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:14:32 --> Could not find the language line ""
ERROR - 2021-07-29 08:14:32 --> Could not find the language line ""
ERROR - 2021-07-29 08:14:32 --> Could not find the language line ""
ERROR - 2021-07-29 08:14:32 --> Could not find the language line ""
ERROR - 2021-07-29 08:14:32 --> Could not find the language line ""
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:14:46 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:14:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:14:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:14:54 --> Could not find the language line "number"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:45:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:48:45 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:19:25 --> Could not find the language line "number"
ERROR - 2021-07-29 08:19:52 --> Could not find the language line "number"
ERROR - 2021-07-29 08:19:53 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 08:19:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 08:19:53 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:19:53 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:19:53 --> Could not find the language line "number"
ERROR - 2021-07-29 08:19:53 --> Could not find the language line "number"
ERROR - 2021-07-29 08:20:16 --> Could not find the language line "number"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:52:58 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:53:05 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:53:06 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:24:07 --> Could not find the language line "method"
ERROR - 2021-07-29 08:24:07 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:24:07 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:24:07 --> Could not find the language line "number"
ERROR - 2021-07-29 08:24:07 --> Could not find the language line "number"
ERROR - 2021-07-29 08:24:07 --> Could not find the language line "number"
ERROR - 2021-07-29 08:24:07 --> Could not find the language line "number"
ERROR - 2021-07-29 08:24:07 --> Could not find the language line "year"
ERROR - 2021-07-29 08:25:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 02:56:33 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:57:06 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:16 --> Could not find the language line "visit"
ERROR - 2021-07-29 02:57:18 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:57:18 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:57:24 --> 404 Page Not Found: /index
ERROR - 2021-07-29 02:57:30 --> Could not find the language line "now"
ERROR - 2021-07-29 02:57:30 --> Could not find the language line "now"
ERROR - 2021-07-29 02:57:30 --> Could not find the language line "now"
ERROR - 2021-07-29 02:57:30 --> Could not find the language line "apply"
ERROR - 2021-07-29 02:57:30 --> Could not find the language line "now"
ERROR - 2021-07-29 08:28:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 08:28:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 02:58:25 --> Could not find the language line "now"
ERROR - 2021-07-29 02:58:25 --> Could not find the language line "now"
ERROR - 2021-07-29 02:58:25 --> Could not find the language line "now"
ERROR - 2021-07-29 02:58:25 --> Could not find the language line "apply"
ERROR - 2021-07-29 02:58:25 --> Could not find the language line "now"
ERROR - 2021-07-29 02:58:37 --> Could not find the language line "now"
ERROR - 2021-07-29 02:58:37 --> Could not find the language line "now"
ERROR - 2021-07-29 02:58:37 --> Could not find the language line "now"
ERROR - 2021-07-29 02:58:37 --> Could not find the language line "apply"
ERROR - 2021-07-29 02:58:37 --> Could not find the language line "now"
ERROR - 2021-07-29 08:28:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 08:28:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 08:28:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\alumni.php 169
ERROR - 2021-07-29 08:29:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 08:29:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 02:59:17 --> Could not find the language line "now"
ERROR - 2021-07-29 02:59:17 --> Could not find the language line "now"
ERROR - 2021-07-29 02:59:17 --> Could not find the language line "now"
ERROR - 2021-07-29 02:59:17 --> Could not find the language line "apply"
ERROR - 2021-07-29 02:59:17 --> Could not find the language line "now"
ERROR - 2021-07-29 02:59:32 --> Could not find the language line "now"
ERROR - 2021-07-29 02:59:32 --> Could not find the language line "now"
ERROR - 2021-07-29 02:59:32 --> Could not find the language line "now"
ERROR - 2021-07-29 02:59:32 --> Could not find the language line "apply"
ERROR - 2021-07-29 02:59:32 --> Could not find the language line "now"
ERROR - 2021-07-29 08:30:04 --> Severity: Warning --> rand() expects exactly 2 parameters, 1 given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\controllers\Student.php 927
ERROR - 2021-07-29 08:30:04 --> Query error: Duplicate entry 'chaina' for key 'email' - Invalid query: INSERT INTO `users` (`school_id`, `role_id`, `password`, `temp_password`, `username`, `created_at`, `created_by`, `status`) VALUES ('134', '3', 'd41d8cd98f00b204e9800998ecf8427e', '', 'chaina', '2021-07-29 08:30:04', '97787', 1)
ERROR - 2021-07-29 08:30:04 --> Severity: Warning --> mail(): SMTP server response: 530 SMTP authentication is required. C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\core\MY_Model.php 433
ERROR - 2021-07-29 08:30:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 03:00:19 --> Could not find the language line "now"
ERROR - 2021-07-29 03:00:19 --> Could not find the language line "now"
ERROR - 2021-07-29 03:00:19 --> Could not find the language line "now"
ERROR - 2021-07-29 03:00:19 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:00:19 --> Could not find the language line "now"
ERROR - 2021-07-29 03:00:20 --> Could not find the language line "now"
ERROR - 2021-07-29 03:00:20 --> Could not find the language line "now"
ERROR - 2021-07-29 03:00:20 --> Could not find the language line "now"
ERROR - 2021-07-29 03:00:20 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:00:20 --> Could not find the language line "now"
ERROR - 2021-07-29 08:30:26 --> Could not find the language line "divyu"
ERROR - 2021-07-29 08:30:26 --> Could not find the language line ""
ERROR - 2021-07-29 08:30:26 --> Could not find the language line "511976477173"
ERROR - 2021-07-29 08:30:26 --> Could not find the language line ""
ERROR - 2021-07-29 08:30:59 --> Could not find the language line "method"
ERROR - 2021-07-29 08:30:59 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:30:59 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:30:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:30:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:30:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:30:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:30:59 --> Could not find the language line "year"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:01:04 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:01:06 --> Could not find the language line "now"
ERROR - 2021-07-29 03:01:06 --> Could not find the language line "now"
ERROR - 2021-07-29 03:01:06 --> Could not find the language line "now"
ERROR - 2021-07-29 03:01:06 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:01:06 --> Could not find the language line "now"
ERROR - 2021-07-29 03:01:09 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:31:27 --> Could not find the language line "number"
ERROR - 2021-07-29 08:31:27 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 08:31:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 08:31:27 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:31:27 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:31:27 --> Could not find the language line "number"
ERROR - 2021-07-29 08:31:27 --> Could not find the language line "number"
ERROR - 2021-07-29 03:01:55 --> Could not find the language line "now"
ERROR - 2021-07-29 03:01:55 --> Could not find the language line "now"
ERROR - 2021-07-29 03:01:55 --> Could not find the language line "now"
ERROR - 2021-07-29 03:01:55 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:01:55 --> Could not find the language line "now"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:09 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:10 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:02:11 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:02:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:33:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 08:33:38 --> Could not find the language line "amont"
ERROR - 2021-07-29 08:33:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Invoice.php 690
ERROR - 2021-07-29 08:33:38 --> Could not find the language line "number"
ERROR - 2021-07-29 08:34:16 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:05:52 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:05:52 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:06:02 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:36:25 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:36:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:37:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:37:15 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 03:07:15 --> Could not find the language line "now"
ERROR - 2021-07-29 03:07:15 --> Could not find the language line "now"
ERROR - 2021-07-29 03:07:15 --> Could not find the language line "now"
ERROR - 2021-07-29 03:07:15 --> Could not find the language line "now"
ERROR - 2021-07-29 03:07:15 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:07:15 --> Could not find the language line "now"
ERROR - 2021-07-29 08:37:29 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 08:38:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:13 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:08:16 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:38:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 08:38:23 --> Could not find the language line "divyu"
ERROR - 2021-07-29 08:38:23 --> Could not find the language line ""
ERROR - 2021-07-29 08:38:23 --> Could not find the language line "511976477173"
ERROR - 2021-07-29 08:38:23 --> Could not find the language line ""
ERROR - 2021-07-29 08:38:46 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 08:38:57 --> Could not find the language line "number"
ERROR - 2021-07-29 08:38:57 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 08:38:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 08:38:57 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:38:57 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:38:57 --> Could not find the language line "number"
ERROR - 2021-07-29 08:38:57 --> Could not find the language line "number"
ERROR - 2021-07-29 08:39:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 08:39:07 --> Could not find the language line "number"
ERROR - 2021-07-29 08:39:22 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 08:40:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:40:48 --> Could not find the language line "divyu"
ERROR - 2021-07-29 08:40:48 --> Could not find the language line ""
ERROR - 2021-07-29 08:40:48 --> Could not find the language line "511976477173"
ERROR - 2021-07-29 08:40:48 --> Could not find the language line ""
ERROR - 2021-07-29 08:41:38 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 08:41:41 --> Could not find the language line "number"
ERROR - 2021-07-29 08:42:26 --> Could not find the language line "method"
ERROR - 2021-07-29 08:42:26 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:42:26 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:42:26 --> Could not find the language line "number"
ERROR - 2021-07-29 08:42:26 --> Could not find the language line "number"
ERROR - 2021-07-29 08:42:26 --> Could not find the language line "number"
ERROR - 2021-07-29 08:42:26 --> Could not find the language line "number"
ERROR - 2021-07-29 08:42:26 --> Could not find the language line "year"
ERROR - 2021-07-29 08:42:59 --> Could not find the language line "method"
ERROR - 2021-07-29 08:42:59 --> Could not find the language line "method"
ERROR - 2021-07-29 08:42:59 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:42:59 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:42:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:42:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:42:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:42:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:42:59 --> Could not find the language line "year"
ERROR - 2021-07-29 08:43:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 08:43:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:43:54 --> Could not find the language line "divyu"
ERROR - 2021-07-29 08:43:54 --> Could not find the language line ""
ERROR - 2021-07-29 08:43:54 --> Could not find the language line "511976477173"
ERROR - 2021-07-29 08:43:54 --> Could not find the language line ""
ERROR - 2021-07-29 08:44:04 --> Could not find the language line "number"
ERROR - 2021-07-29 08:44:43 --> Could not find the language line "method"
ERROR - 2021-07-29 08:44:43 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:44:43 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:44:43 --> Could not find the language line "number"
ERROR - 2021-07-29 08:44:43 --> Could not find the language line "number"
ERROR - 2021-07-29 08:44:43 --> Could not find the language line "number"
ERROR - 2021-07-29 08:44:43 --> Could not find the language line "number"
ERROR - 2021-07-29 08:44:43 --> Could not find the language line "year"
ERROR - 2021-07-29 08:45:03 --> Could not find the language line "method"
ERROR - 2021-07-29 08:45:53 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 08:46:08 --> Could not find the language line "pais"
ERROR - 2021-07-29 08:46:08 --> Could not find the language line "tabular"
ERROR - 2021-07-29 08:46:08 --> Could not find the language line "graphical"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:22 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:25 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:16:25 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:46:28 --> Could not find the language line "pais"
ERROR - 2021-07-29 08:46:28 --> Could not find the language line "tabular"
ERROR - 2021-07-29 08:46:28 --> Could not find the language line "graphical"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:16:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:46:50 --> Could not find the language line "tabular"
ERROR - 2021-07-29 03:16:50 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:16:51 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:47:08 --> Could not find the language line "tabular"
ERROR - 2021-07-29 03:17:22 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:17:24 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:47:39 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:48:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 03:18:24 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:19:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:49:06 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 03:19:07 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:49:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 03:19:26 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:19:32 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:49:54 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 08:50:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 03:20:48 --> Could not find the language line "now"
ERROR - 2021-07-29 03:20:48 --> Could not find the language line "now"
ERROR - 2021-07-29 03:20:48 --> Could not find the language line "now"
ERROR - 2021-07-29 03:20:48 --> Could not find the language line "now"
ERROR - 2021-07-29 03:20:48 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:20:48 --> Could not find the language line "now"
ERROR - 2021-07-29 03:20:55 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:20:55 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:06 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:28 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:51:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:51:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:52 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:52 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:52 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:52 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:52 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:51:52 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:51:52 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:51:52 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:51:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:52:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:52:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:52:24 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 08:52:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 84
ERROR - 2021-07-29 08:52:31 --> Could not find the language line "number"
ERROR - 2021-07-29 08:52:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:53:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 03:23:28 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:53:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 03:23:48 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:53:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:53:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:53:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:53:50 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:54:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 03:24:00 --> Could not find the language line "now"
ERROR - 2021-07-29 03:24:00 --> Could not find the language line "now"
ERROR - 2021-07-29 03:24:00 --> Could not find the language line "now"
ERROR - 2021-07-29 03:24:00 --> Could not find the language line "now"
ERROR - 2021-07-29 03:24:00 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:24:00 --> Could not find the language line "now"
ERROR - 2021-07-29 03:24:01 --> Could not find the language line "now"
ERROR - 2021-07-29 03:24:01 --> Could not find the language line "now"
ERROR - 2021-07-29 03:24:01 --> Could not find the language line "now"
ERROR - 2021-07-29 03:24:01 --> Could not find the language line "now"
ERROR - 2021-07-29 03:24:01 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:24:01 --> Could not find the language line "now"
ERROR - 2021-07-29 03:24:28 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:54:57 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 03:25:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:05 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:06 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:07 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:25:08 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:55:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:25:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:55:22 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 03:25:32 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:25:44 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:25:47 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:56:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:56:17 --> Could not find the language line ""
ERROR - 2021-07-29 08:56:17 --> Could not find the language line ""
ERROR - 2021-07-29 08:56:17 --> Could not find the language line ""
ERROR - 2021-07-29 08:56:17 --> Could not find the language line ""
ERROR - 2021-07-29 08:56:17 --> Could not find the language line ""
ERROR - 2021-07-29 08:56:33 --> Could not find the language line "number"
ERROR - 2021-07-29 03:26:50 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:56:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:56:59 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 08:56:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 08:56:59 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:56:59 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:56:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:56:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:57:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:57:02 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 03:27:02 --> Could not find the language line "now"
ERROR - 2021-07-29 03:27:02 --> Could not find the language line "now"
ERROR - 2021-07-29 03:27:02 --> Could not find the language line "now"
ERROR - 2021-07-29 03:27:02 --> Could not find the language line "now"
ERROR - 2021-07-29 03:27:02 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:27:02 --> Could not find the language line "now"
ERROR - 2021-07-29 03:27:20 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:57:29 --> Could not find the language line "method"
ERROR - 2021-07-29 08:57:29 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:57:29 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:57:29 --> Could not find the language line "number"
ERROR - 2021-07-29 08:57:29 --> Could not find the language line "number"
ERROR - 2021-07-29 08:57:29 --> Could not find the language line "number"
ERROR - 2021-07-29 08:57:29 --> Could not find the language line "number"
ERROR - 2021-07-29 08:57:29 --> Could not find the language line "year"
ERROR - 2021-07-29 03:27:43 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:27:43 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:57:47 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 08:57:58 --> Could not find the language line "amont"
ERROR - 2021-07-29 08:57:59 --> Could not find the language line "number"
ERROR - 2021-07-29 08:58:08 --> Could not find the language line "number"
ERROR - 2021-07-29 08:58:08 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 08:58:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 08:58:08 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:58:08 --> Could not find the language line "bank"
ERROR - 2021-07-29 08:58:08 --> Could not find the language line "number"
ERROR - 2021-07-29 08:58:08 --> Could not find the language line "number"
ERROR - 2021-07-29 08:58:44 --> Could not find the language line "amont"
ERROR - 2021-07-29 08:58:45 --> Could not find the language line "number"
ERROR - 2021-07-29 08:59:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 08:59:08 --> Could not find the language line "tabular"
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 08:59:22 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 08:59:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 08:59:42 --> Could not find the language line "number"
ERROR - 2021-07-29 09:00:26 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:00:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:21 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:31:23 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:31:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:31:45 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:32:17 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:02:48 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:34:19 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:04:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:04:50 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:05:49 --> Could not find the language line ""
ERROR - 2021-07-29 09:05:49 --> Could not find the language line ""
ERROR - 2021-07-29 09:05:49 --> Could not find the language line ""
ERROR - 2021-07-29 09:07:00 --> Could not find the language line ""
ERROR - 2021-07-29 09:07:00 --> Could not find the language line ""
ERROR - 2021-07-29 09:07:00 --> Could not find the language line ""
ERROR - 2021-07-29 09:07:45 --> Could not find the language line "number"
ERROR - 2021-07-29 03:39:34 --> Could not find the language line "now"
ERROR - 2021-07-29 03:39:34 --> Could not find the language line "now"
ERROR - 2021-07-29 03:39:34 --> Could not find the language line "now"
ERROR - 2021-07-29 03:39:34 --> Could not find the language line "now"
ERROR - 2021-07-29 03:39:34 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:39:34 --> Could not find the language line "now"
ERROR - 2021-07-29 03:40:40 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:40:59 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:11:10 --> Could not find the language line "allowance"
ERROR - 2021-07-29 09:11:10 --> Could not find the language line "deduction"
ERROR - 2021-07-29 09:11:26 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 09:11:26 --> Could not find the language line "deduction"
ERROR - 2021-07-29 09:11:27 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 09:11:27 --> Could not find the language line "deduction"
ERROR - 2021-07-29 09:11:27 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 09:11:27 --> Could not find the language line "deduction"
ERROR - 2021-07-29 09:11:32 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 09:11:32 --> Could not find the language line "deduction"
ERROR - 2021-07-29 09:11:32 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 09:11:32 --> Could not find the language line "deduction"
ERROR - 2021-07-29 09:11:44 --> Could not find the language line "allowance"
ERROR - 2021-07-29 09:11:44 --> Could not find the language line "deduction"
ERROR - 2021-07-29 09:11:44 --> Could not find the language line "method"
ERROR - 2021-07-29 09:11:44 --> Could not find the language line "bank"
ERROR - 2021-07-29 09:11:44 --> Could not find the language line "bank"
ERROR - 2021-07-29 09:11:44 --> Could not find the language line "number"
ERROR - 2021-07-29 09:11:44 --> Could not find the language line "number"
ERROR - 2021-07-29 09:11:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\views\payment\index.php 385
ERROR - 2021-07-29 09:11:47 --> Could not find the language line "deduction"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:14 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:42:20 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:42:29 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:42:51 --> Could not find the language line "now"
ERROR - 2021-07-29 03:42:51 --> Could not find the language line "now"
ERROR - 2021-07-29 03:42:51 --> Could not find the language line "now"
ERROR - 2021-07-29 03:42:51 --> Could not find the language line "now"
ERROR - 2021-07-29 03:42:51 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:42:51 --> Could not find the language line "now"
ERROR - 2021-07-29 03:43:09 --> Could not find the language line "now"
ERROR - 2021-07-29 03:43:09 --> Could not find the language line "now"
ERROR - 2021-07-29 03:43:09 --> Could not find the language line "now"
ERROR - 2021-07-29 03:43:09 --> Could not find the language line "now"
ERROR - 2021-07-29 03:43:09 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:43:09 --> Could not find the language line "now"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:14 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:15 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:43:19 --> 404 Page Not Found: /index
ERROR - 2021-07-29 03:43:24 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 09:13:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 09:15:18 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:15:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 09:15:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:15:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:15:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 09:15:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:16:22 --> Could not find the language line "registration"
ERROR - 2021-07-29 09:16:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 09:16:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:16:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:16:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 03:46:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:17:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:17:21 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:18:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 09:18:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:18:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:18:55 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:19:59 --> Could not find the language line ""
ERROR - 2021-07-29 09:19:59 --> Could not find the language line ""
ERROR - 2021-07-29 09:19:59 --> Could not find the language line ""
ERROR - 2021-07-29 09:20:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 09:20:08 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 09:20:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 09:20:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:20:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 09:20:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 03:51:06 --> Could not find the language line "now"
ERROR - 2021-07-29 03:51:06 --> Could not find the language line "now"
ERROR - 2021-07-29 03:51:06 --> Could not find the language line "now"
ERROR - 2021-07-29 03:51:06 --> Could not find the language line "now"
ERROR - 2021-07-29 03:51:06 --> Could not find the language line "apply"
ERROR - 2021-07-29 03:51:06 --> Could not find the language line "now"
ERROR - 2021-07-29 09:21:07 --> Could not find the language line "registration"
ERROR - 2021-07-29 09:29:22 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 09:29:22 --> Could not find the language line "registration"
ERROR - 2021-07-29 09:29:22 --> Could not find the language line "registration"
ERROR - 2021-07-29 09:29:22 --> Could not find the language line "logo"
ERROR - 2021-07-29 09:29:22 --> Could not find the language line "logo"
ERROR - 2021-07-29 03:59:56 --> 404 Page Not Found: /index
ERROR - 2021-07-29 04:03:17 --> 404 Page Not Found: /index
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:19 --> 404 Page Not Found: /index
ERROR - 2021-07-29 04:03:20 --> 404 Page Not Found: /index
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:58 --> 404 Page Not Found: /index
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:03:59 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:04:00 --> 404 Page Not Found: /index
ERROR - 2021-07-29 04:04:07 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:34:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:39:20 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:39:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:41:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:41:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:41:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 04:11:21 --> 404 Page Not Found: /index
ERROR - 2021-07-29 04:11:24 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:41:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:41:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:41:53 --> Could not find the language line ""
ERROR - 2021-07-29 09:41:53 --> Could not find the language line ""
ERROR - 2021-07-29 09:41:53 --> Could not find the language line ""
ERROR - 2021-07-29 09:41:53 --> Could not find the language line ""
ERROR - 2021-07-29 09:41:53 --> Could not find the language line ""
ERROR - 2021-07-29 09:42:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:44:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:44:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:45:03 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:45:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:46:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:46:03 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:46:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:46:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:47:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 09:47:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:47:29 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:47:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:48:08 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 04:18:43 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:48:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:49:29 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:49:30 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:49:30 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:49:30 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:49:30 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:49:30 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:49:30 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:49:30 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:49:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:49:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:49:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:49:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:50:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:50:15 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "postal"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "postal"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "postal"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "postal"
ERROR - 2021-07-29 09:50:50 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "postal"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "receive"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "postal"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "receive"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "receive"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "receive"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "receive"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "receive"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "receive"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "postal"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "postal"
ERROR - 2021-07-29 09:51:11 --> Could not find the language line "receive"
ERROR - 2021-07-29 09:51:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:51:29 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:51:43 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:52:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:52:39 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:52:55 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:52:55 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:52:55 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:52:55 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:52:55 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:52:55 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:52:55 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:53:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:53:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 09:53:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:53:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:53:47 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:53:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:53:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:53:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:53:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:53:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:53:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:53:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:53:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:53:56 --> Could not find the language line ""
ERROR - 2021-07-29 09:54:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:54:51 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:55:04 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:55:04 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:55:04 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:55:04 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:55:04 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:55:04 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:55:04 --> Could not find the language line "visitor"
ERROR - 2021-07-29 09:55:04 --> Could not find the language line "visitor"
ERROR - 2021-07-29 04:25:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:56:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:57:14 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:57:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 09:58:13 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:58:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:02:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 84
ERROR - 2021-07-29 10:02:07 --> Could not find the language line "number"
ERROR - 2021-07-29 10:05:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:05:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:07:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:09:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:09:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:09:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:09:48 --> Severity: Warning --> rand() expects exactly 2 parameters, 1 given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\controllers\Student.php 927
ERROR - 2021-07-29 10:09:48 --> Severity: Warning --> mail(): SMTP server response: 530 SMTP authentication is required. C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\core\MY_Model.php 433
ERROR - 2021-07-29 10:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:10:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:10:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:11:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:11:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:15:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:46:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:34 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:49:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:50:55 --> Could not find the language line "now"
ERROR - 2021-07-29 04:50:55 --> Could not find the language line "now"
ERROR - 2021-07-29 04:50:55 --> Could not find the language line "now"
ERROR - 2021-07-29 04:50:55 --> Could not find the language line "now"
ERROR - 2021-07-29 04:50:55 --> Could not find the language line "apply"
ERROR - 2021-07-29 04:50:55 --> Could not find the language line "now"
ERROR - 2021-07-29 04:50:56 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 10:20:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 10:21:06 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 10:21:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:22:40 --> Could not find the language line "number"
ERROR - 2021-07-29 04:53:45 --> 404 Page Not Found: /index
ERROR - 2021-07-29 04:53:53 --> 404 Page Not Found: /index
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:03 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 04:54:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:27:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:27:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:28:02 --> Could not find the language line "registration"
ERROR - 2021-07-29 10:28:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:28:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:28:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:28:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:29:06 --> Could not find the language line ""
ERROR - 2021-07-29 10:29:06 --> Could not find the language line ""
ERROR - 2021-07-29 10:29:06 --> Could not find the language line ""
ERROR - 2021-07-29 10:29:06 --> Could not find the language line ""
ERROR - 2021-07-29 10:29:06 --> Could not find the language line ""
ERROR - 2021-07-29 10:29:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:29:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:29:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:30:38 --> Could not find the language line "registration"
ERROR - 2021-07-29 10:31:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 10:31:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:47 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:01:53 --> 404 Page Not Found: /index
ERROR - 2021-07-29 05:01:55 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:32:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 05:02:25 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:33:55 --> Could not find the language line "registration"
ERROR - 2021-07-29 10:34:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:34:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 10:34:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 10:34:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 10:34:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 10:34:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 10:34:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 10:34:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 10:34:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 10:34:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:35:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 10:35:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 10:35:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 10:35:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 10:35:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 10:35:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 10:36:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 05:08:54 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:39:16 --> Severity: Warning --> mail(): SMTP server response: 530 SMTP authentication is required. C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\core\MY_Model.php 433
ERROR - 2021-07-29 10:39:38 --> Could not find the language line "registration"
ERROR - 2021-07-29 10:40:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:40:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:43:14 --> Severity: Warning --> rand() expects exactly 2 parameters, 1 given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\controllers\Student.php 927
ERROR - 2021-07-29 10:43:14 --> Query error: Duplicate entry 'avinash' for key 'email' - Invalid query: INSERT INTO `users` (`school_id`, `role_id`, `password`, `temp_password`, `username`, `created_at`, `created_by`, `status`) VALUES ('134', '3', 'd41d8cd98f00b204e9800998ecf8427e', '', 'avinash', '2021-07-29 10:43:14', '97787', 1)
ERROR - 2021-07-29 10:43:14 --> Severity: Warning --> mail(): SMTP server response: 530 SMTP authentication is required. C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\core\MY_Model.php 433
ERROR - 2021-07-29 10:43:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 05:13:23 --> Could not find the language line "now"
ERROR - 2021-07-29 05:13:23 --> Could not find the language line "now"
ERROR - 2021-07-29 05:13:23 --> Could not find the language line "now"
ERROR - 2021-07-29 05:13:23 --> Could not find the language line "now"
ERROR - 2021-07-29 05:13:23 --> Could not find the language line "now"
ERROR - 2021-07-29 05:13:23 --> Could not find the language line "apply"
ERROR - 2021-07-29 05:13:23 --> Could not find the language line "now"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:17 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> 404 Page Not Found: /index
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:25 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 10:44:27 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 05:14:32 --> 404 Page Not Found: /index
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:42 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:43 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:14:44 --> 404 Page Not Found: /index
ERROR - 2021-07-29 05:15:05 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:45:18 --> Could not find the language line "registration"
ERROR - 2021-07-29 10:45:43 --> Could not find the language line ""
ERROR - 2021-07-29 10:45:43 --> Could not find the language line ""
ERROR - 2021-07-29 10:45:43 --> Could not find the language line ""
ERROR - 2021-07-29 10:45:43 --> Could not find the language line ""
ERROR - 2021-07-29 10:45:43 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 10:45:43 --> Could not find the language line "registration"
ERROR - 2021-07-29 10:45:43 --> Could not find the language line "registration"
ERROR - 2021-07-29 10:45:43 --> Could not find the language line "logo"
ERROR - 2021-07-29 10:45:43 --> Could not find the language line "logo"
ERROR - 2021-07-29 05:15:51 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:46:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:47:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 10:47:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 10:47:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 10:47:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 10:53:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 10:53:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 10:53:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 10:53:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 10:53:33 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 10:53:33 --> Could not find the language line "registration"
ERROR - 2021-07-29 10:53:33 --> Could not find the language line "registration"
ERROR - 2021-07-29 10:53:33 --> Could not find the language line "logo"
ERROR - 2021-07-29 10:53:33 --> Could not find the language line "logo"
ERROR - 2021-07-29 05:25:00 --> Severity: Warning --> mail(): SMTP server response: 530 SMTP authentication is required. C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Auth.php 352
ERROR - 2021-07-29 05:25:02 --> 404 Page Not Found: Auth/assets
ERROR - 2021-07-29 05:25:20 --> Could not find the language line "apply"
ERROR - 2021-07-29 05:25:20 --> Could not find the language line "now"
ERROR - 2021-07-29 05:25:21 --> 404 Page Not Found: /index
ERROR - 2021-07-29 05:25:57 --> 404 Page Not Found: Auth/assets
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:26:29 --> 404 Page Not Found: /index
ERROR - 2021-07-29 05:26:35 --> 404 Page Not Found: /index
ERROR - 2021-07-29 05:27:05 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:57:26 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 260
ERROR - 2021-07-29 10:57:26 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 301
ERROR - 2021-07-29 05:27:36 --> 404 Page Not Found: Auth/assets
ERROR - 2021-07-29 10:58:47 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\models\Student_Model.php 362
ERROR - 2021-07-29 11:00:02 --> Could not find the language line "number"
ERROR - 2021-07-29 11:00:03 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 11:00:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 11:00:03 --> Could not find the language line "bank"
ERROR - 2021-07-29 11:00:03 --> Could not find the language line "bank"
ERROR - 2021-07-29 11:00:03 --> Could not find the language line "number"
ERROR - 2021-07-29 11:00:03 --> Could not find the language line "number"
ERROR - 2021-07-29 11:00:09 --> Could not find the language line "number"
ERROR - 2021-07-29 05:30:37 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:02:38 --> Could not find the language line "method"
ERROR - 2021-07-29 11:02:38 --> Could not find the language line "bank"
ERROR - 2021-07-29 11:02:38 --> Could not find the language line "bank"
ERROR - 2021-07-29 11:02:38 --> Could not find the language line "number"
ERROR - 2021-07-29 11:02:38 --> Could not find the language line "number"
ERROR - 2021-07-29 11:02:38 --> Could not find the language line "number"
ERROR - 2021-07-29 11:02:38 --> Could not find the language line "number"
ERROR - 2021-07-29 11:02:38 --> Could not find the language line "year"
ERROR - 2021-07-29 11:03:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:03:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:03:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:04:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:04:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 05:34:05 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:05:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:05:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:05:33 --> Could not find the language line "number"
ERROR - 2021-07-29 11:05:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:05:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 11:06:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:06:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 05:36:28 --> Could not find the language line "apply"
ERROR - 2021-07-29 05:36:28 --> Could not find the language line "now"
ERROR - 2021-07-29 05:36:30 --> Could not find the language line "apply"
ERROR - 2021-07-29 05:36:30 --> Could not find the language line "now"
ERROR - 2021-07-29 11:06:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:06:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 05:36:34 --> 404 Page Not Found: /index
ERROR - 2021-07-29 05:36:56 --> 404 Page Not Found: /index
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:37:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:36 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 260
ERROR - 2021-07-29 11:07:36 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 301
ERROR - 2021-07-29 11:08:10 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 11:09:15 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 260
ERROR - 2021-07-29 11:09:15 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 301
ERROR - 2021-07-29 11:09:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:10:04 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 05:40:50 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:10:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:10:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:11:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:11:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:11:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:11:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:11:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 11:11:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:11:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:12:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:12:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:12:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 11:12:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:12:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:12:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:43:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:44:02 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:14:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:14:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:45:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:15:17 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 11:15:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:15:53 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 11:15:57 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 11:15:57 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:15:57 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:15:57 --> Could not find the language line "logo"
ERROR - 2021-07-29 11:15:57 --> Could not find the language line "logo"
ERROR - 2021-07-29 11:16:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 11:16:20 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 11:16:37 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 11:16:54 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 11:17:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\alumni.php 169
ERROR - 2021-07-29 11:17:21 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:17:21 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 05:47:30 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:17:48 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 05:47:50 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:18:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 05:48:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:18:28 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 05:48:28 --> Could not find the language line "apply"
ERROR - 2021-07-29 05:48:28 --> Could not find the language line "now"
ERROR - 2021-07-29 11:18:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:18:54 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 05:49:12 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:19:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:20:11 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:20:23 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 11:20:23 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:20:23 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:20:23 --> Could not find the language line "logo"
ERROR - 2021-07-29 11:20:23 --> Could not find the language line "logo"
ERROR - 2021-07-29 05:50:31 --> 404 Page Not Found: /index
ERROR - 2021-07-29 05:50:58 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:21:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 05:51:15 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:21:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:22:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:23:13 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:23:24 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:23:37 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:24:50 --> Could not find the language line ""
ERROR - 2021-07-29 11:24:50 --> Could not find the language line ""
ERROR - 2021-07-29 11:24:50 --> Could not find the language line ""
ERROR - 2021-07-29 11:24:59 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 11:25:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:25:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:26:18 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:26:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 11:26:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 11:26:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 11:26:53 --> Could not find the language line "visitor"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "postal"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "postal"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "visitor"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "postal"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "postal"
ERROR - 2021-07-29 11:29:03 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 11:29:19 --> Could not find the language line ""
ERROR - 2021-07-29 11:29:19 --> Could not find the language line ""
ERROR - 2021-07-29 11:29:19 --> Could not find the language line ""
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "postal"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "receive"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "postal"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "receive"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "visitor"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "receive"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "receive"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "receive"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "receive"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "receive"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "postal"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "postal"
ERROR - 2021-07-29 11:29:35 --> Could not find the language line "receive"
ERROR - 2021-07-29 11:29:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:29:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:30:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:30:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 06:01:05 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:31:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:31:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 11:31:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:31:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:31:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:31:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 11:32:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:32:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:32:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 11:34:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:35:19 --> Could not find the language line ""
ERROR - 2021-07-29 11:35:19 --> Could not find the language line ""
ERROR - 2021-07-29 11:35:19 --> Could not find the language line ""
ERROR - 2021-07-29 11:36:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:36:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:36:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:07 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:07:14 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:37:43 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 11:38:38 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 260
ERROR - 2021-07-29 11:38:38 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 301
ERROR - 2021-07-29 11:38:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:38:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 11:39:55 --> Could not find the language line "number"
ERROR - 2021-07-29 11:40:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:40:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 06:11:31 --> Could not find the language line "now"
ERROR - 2021-07-29 06:11:31 --> Could not find the language line "now"
ERROR - 2021-07-29 06:11:31 --> Could not find the language line "now"
ERROR - 2021-07-29 06:11:31 --> Could not find the language line "now"
ERROR - 2021-07-29 06:11:31 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:11:31 --> Could not find the language line "now"
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:41:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:41:54 --> Could not find the language line ""
ERROR - 2021-07-29 11:41:54 --> Could not find the language line ""
ERROR - 2021-07-29 11:41:54 --> Could not find the language line ""
ERROR - 2021-07-29 11:41:54 --> Could not find the language line ""
ERROR - 2021-07-29 11:41:54 --> Could not find the language line ""
ERROR - 2021-07-29 11:41:54 --> Could not find the language line ""
ERROR - 2021-07-29 11:41:55 --> Could not find the language line ""
ERROR - 2021-07-29 11:41:55 --> Could not find the language line ""
ERROR - 2021-07-29 11:41:55 --> Could not find the language line ""
ERROR - 2021-07-29 11:42:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:42:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 06:12:08 --> Could not find the language line "now"
ERROR - 2021-07-29 06:12:08 --> Could not find the language line "now"
ERROR - 2021-07-29 06:12:08 --> Could not find the language line "now"
ERROR - 2021-07-29 06:12:08 --> Could not find the language line "now"
ERROR - 2021-07-29 06:12:08 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:12:08 --> Could not find the language line "now"
ERROR - 2021-07-29 11:42:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:42:25 --> Could not find the language line "registration"
ERROR - 2021-07-29 06:13:12 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:13:21 --> Could not find the language line "now"
ERROR - 2021-07-29 06:13:21 --> Could not find the language line "now"
ERROR - 2021-07-29 06:13:21 --> Could not find the language line "now"
ERROR - 2021-07-29 06:13:21 --> Could not find the language line "now"
ERROR - 2021-07-29 06:13:21 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:13:21 --> Could not find the language line "now"
ERROR - 2021-07-29 11:43:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:43:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 06:13:34 --> Could not find the language line "now"
ERROR - 2021-07-29 06:13:34 --> Could not find the language line "now"
ERROR - 2021-07-29 06:13:34 --> Could not find the language line "now"
ERROR - 2021-07-29 06:13:34 --> Could not find the language line "now"
ERROR - 2021-07-29 06:13:34 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:13:34 --> Could not find the language line "now"
ERROR - 2021-07-29 06:13:50 --> Query error: Column 'school_id' cannot be null - Invalid query: INSERT INTO `activity_logs` (`school_id`, `user_id`, `role_id`, `name`, `phone`, `email`, `ip_address`, `user_agent`, `activity`, `status`, `created_at`, `created_by`) VALUES (NULL, 0, 0, NULL, NULL, NULL, '157.38.198.5', 'Mozilla/5.0 (Linux; Android 10; RMX2040) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.96 Mobile Safari/537.36', 'Has been logged out', 1, '2021-07-29 06:13:50', 0)
ERROR - 2021-07-29 11:43:51 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 11:43:51 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:43:51 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:43:51 --> Could not find the language line "logo"
ERROR - 2021-07-29 11:43:51 --> Could not find the language line "logo"
ERROR - 2021-07-29 06:13:51 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:14:00 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:44:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:45:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:45:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:45:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 11:46:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:46:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:46:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:47:01 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:47:28 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 11:47:28 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:47:28 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:47:28 --> Could not find the language line "logo"
ERROR - 2021-07-29 11:47:28 --> Could not find the language line "logo"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:00 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:02 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:18:04 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:18:05 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:49:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:19:04 --> Could not find the language line "now"
ERROR - 2021-07-29 06:19:04 --> Could not find the language line "now"
ERROR - 2021-07-29 06:19:04 --> Could not find the language line "now"
ERROR - 2021-07-29 06:19:04 --> Could not find the language line "now"
ERROR - 2021-07-29 06:19:04 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:19:04 --> Could not find the language line "now"
ERROR - 2021-07-29 11:49:18 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:49:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:49:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:49:41 --> Severity: Warning --> rand() expects exactly 2 parameters, 1 given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\controllers\Student.php 927
ERROR - 2021-07-29 11:49:41 --> Query error: Duplicate entry 'shubam' for key 'email' - Invalid query: INSERT INTO `users` (`school_id`, `role_id`, `password`, `temp_password`, `username`, `created_at`, `created_by`, `status`) VALUES ('71', '4', '19788d563bbc1f4d9f500cdd872046ca', 'YXZtIGJ3cg==', 'shubam', '2021-07-29 11:49:41', '64333', 1)
ERROR - 2021-07-29 11:49:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:49:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:49:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:49:51 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:50:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:50:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:20:05 --> Could not find the language line "now"
ERROR - 2021-07-29 06:20:05 --> Could not find the language line "now"
ERROR - 2021-07-29 06:20:05 --> Could not find the language line "now"
ERROR - 2021-07-29 06:20:05 --> Could not find the language line "now"
ERROR - 2021-07-29 06:20:05 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:20:05 --> Could not find the language line "now"
ERROR - 2021-07-29 11:50:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:50:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:51:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:51:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:51:42 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 11:51:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:21:56 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:51:58 --> Could not find the language line "tabular"
ERROR - 2021-07-29 11:51:58 --> Could not find the language line "graphical"
ERROR - 2021-07-29 06:21:59 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:22:01 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:52:07 --> Could not find the language line "tabular"
ERROR - 2021-07-29 11:52:07 --> Could not find the language line "graphical"
ERROR - 2021-07-29 11:52:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:52:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:52:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:53:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:23:20 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:54:06 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:55:13 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 11:55:13 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:55:13 --> Could not find the language line "registration"
ERROR - 2021-07-29 11:55:13 --> Could not find the language line "logo"
ERROR - 2021-07-29 11:55:13 --> Could not find the language line "logo"
ERROR - 2021-07-29 11:55:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:55:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:55:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:54 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:25:57 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:25:58 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:56:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:26:15 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:26:16 --> Could not find the language line "now"
ERROR - 2021-07-29 06:26:18 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 11:56:19 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 11:56:20 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 11:56:20 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 11:56:45 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 11:56:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:26:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:27:07 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:57:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:27:08 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:27:14 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:57:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:57:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 11:57:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:57:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 06:28:10 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:58:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 11:58:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 11:58:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 11:59:03 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:29:32 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:29:35 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:59:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:30:37 --> 404 Page Not Found: /index
ERROR - 2021-07-29 12:01:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:02:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:01 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:03 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:33:08 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:33:12 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:33:41 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:33:43 --> Could not find the language line "now"
ERROR - 2021-07-29 06:33:43 --> Could not find the language line "now"
ERROR - 2021-07-29 06:33:43 --> Could not find the language line "now"
ERROR - 2021-07-29 06:33:43 --> Could not find the language line "now"
ERROR - 2021-07-29 06:33:43 --> Could not find the language line "now"
ERROR - 2021-07-29 06:33:43 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:33:43 --> Could not find the language line "now"
ERROR - 2021-07-29 12:04:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:04:31 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 12:05:50 --> Could not find the language line ""
ERROR - 2021-07-29 12:05:50 --> Could not find the language line ""
ERROR - 2021-07-29 12:05:50 --> Could not find the language line ""
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:10 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:11 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:36:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 12:06:19 --> Could not find the language line ""
ERROR - 2021-07-29 12:06:19 --> Could not find the language line ""
ERROR - 2021-07-29 12:06:19 --> Could not find the language line ""
ERROR - 2021-07-29 12:06:24 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 260
ERROR - 2021-07-29 12:06:24 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 301
ERROR - 2021-07-29 12:06:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:06:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:06:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:06:57 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:07:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:07:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:07:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:07:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:07:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:08:33 --> Severity: Warning --> Declaration of Item_model::get_list($school_id = NULL) should be compatible with MY_Model::get_list($table_name, $index_array, $columns = NULL, $limit = NULL, $offset = 0, $order_field = NULL, $order_type = NULL) C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\models\Item_model.php 0
ERROR - 2021-07-29 12:08:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\itemstock\index.php 268
ERROR - 2021-07-29 12:08:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\itemstock\index.php 281
ERROR - 2021-07-29 12:08:34 --> Severity: Warning --> Declaration of Item_model::get_list($school_id = NULL) should be compatible with MY_Model::get_list($table_name, $index_array, $columns = NULL, $limit = NULL, $offset = 0, $order_field = NULL, $order_type = NULL) C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\models\Item_model.php 0
ERROR - 2021-07-29 12:08:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\itemstock\index.php 268
ERROR - 2021-07-29 12:08:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\itemstock\index.php 281
ERROR - 2021-07-29 12:09:17 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 12:09:19 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\models\Student_Model.php 362
ERROR - 2021-07-29 12:09:19 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 12:09:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:09:25 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\models\Student_Model.php 362
ERROR - 2021-07-29 12:09:25 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 12:09:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:09:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:09:30 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\models\Student_Model.php 362
ERROR - 2021-07-29 12:09:30 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 12:09:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:09:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:09:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:10:02 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\models\Student_Model.php 362
ERROR - 2021-07-29 12:10:02 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 12:10:08 --> Could not find the language line "confirm"
ERROR - 2021-07-29 12:10:08 --> Could not find the language line "confirm"
ERROR - 2021-07-29 12:10:24 --> Could not find the language line ""
ERROR - 2021-07-29 12:10:24 --> Could not find the language line ""
ERROR - 2021-07-29 12:10:24 --> Could not find the language line ""
ERROR - 2021-07-29 06:41:59 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:41:59 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:41:59 --> Could not find the language line "now"
ERROR - 2021-07-29 06:42:15 --> 404 Page Not Found: /index
ERROR - 2021-07-29 12:13:27 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\models\Student_Model.php 362
ERROR - 2021-07-29 12:13:27 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 12:13:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:43:56 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:43:56 --> Could not find the language line "now"
ERROR - 2021-07-29 06:44:06 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:04 --> Could not find the language line "visit"
ERROR - 2021-07-29 06:45:07 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:45:08 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:45:20 --> 404 Page Not Found: /index
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:15:21 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:15:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:15:48 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:16:19 --> Could not find the language line ""
ERROR - 2021-07-29 12:16:19 --> Could not find the language line ""
ERROR - 2021-07-29 12:16:19 --> Could not find the language line ""
ERROR - 2021-07-29 12:16:19 --> Could not find the language line "572561344610"
ERROR - 2021-07-29 12:16:19 --> Could not find the language line ""
ERROR - 2021-07-29 12:16:21 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:16:59 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:17:02 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\models\Student_Model.php 362
ERROR - 2021-07-29 12:17:02 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 12:17:06 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\models\Student_Model.php 362
ERROR - 2021-07-29 12:17:06 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 12:18:23 --> Could not find the language line ""
ERROR - 2021-07-29 12:18:23 --> Could not find the language line ""
ERROR - 2021-07-29 12:18:23 --> Could not find the language line ""
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:18:29 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:18:30 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:18:32 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 06:48:32 --> Could not find the language line "now"
ERROR - 2021-07-29 06:48:32 --> Could not find the language line "now"
ERROR - 2021-07-29 06:48:32 --> Could not find the language line "now"
ERROR - 2021-07-29 06:48:32 --> Could not find the language line "now"
ERROR - 2021-07-29 06:48:32 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:48:32 --> Could not find the language line "now"
ERROR - 2021-07-29 12:19:10 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:19:16 --> Could not find the language line "module"
ERROR - 2021-07-29 12:19:16 --> Could not find the language line "function"
ERROR - 2021-07-29 06:49:44 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:49:44 --> Could not find the language line "now"
ERROR - 2021-07-29 12:20:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 06:50:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:50:23 --> 404 Page Not Found: /index
ERROR - 2021-07-29 12:21:01 --> Could not find the language line "module"
ERROR - 2021-07-29 12:21:01 --> Could not find the language line "function"
ERROR - 2021-07-29 12:21:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:21:18 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:18 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:18 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:18 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:18 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:18 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:18 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:19 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:19 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:19 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:20 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:21 --> Could not find the language line "type_id"
ERROR - 2021-07-29 06:51:27 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:51:27 --> Could not find the language line "now"
ERROR - 2021-07-29 12:21:29 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:29 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:29 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:29 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:29 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:29 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:29 --> Could not find the language line "visitor"
ERROR - 2021-07-29 06:51:30 --> 404 Page Not Found: /index
ERROR - 2021-07-29 12:21:42 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:42 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:42 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:21:42 --> Could not find the language line "visitor"
ERROR - 2021-07-29 06:51:47 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:51:47 --> Could not find the language line "now"
ERROR - 2021-07-29 06:51:51 --> 404 Page Not Found: /index
ERROR - 2021-07-29 06:52:49 --> Could not find the language line "now"
ERROR - 2021-07-29 06:52:49 --> Could not find the language line "now"
ERROR - 2021-07-29 06:52:49 --> Could not find the language line "now"
ERROR - 2021-07-29 06:52:49 --> Could not find the language line "now"
ERROR - 2021-07-29 06:52:49 --> Could not find the language line "apply"
ERROR - 2021-07-29 06:52:49 --> Could not find the language line "now"
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:23:00 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:23:01 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:23:13 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:23:26 --> Could not find the language line ""
ERROR - 2021-07-29 12:23:26 --> Could not find the language line ""
ERROR - 2021-07-29 12:23:26 --> Could not find the language line ""
ERROR - 2021-07-29 12:24:47 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:25:05 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 12:25:05 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:25:05 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:25:05 --> Could not find the language line "logo"
ERROR - 2021-07-29 12:25:05 --> Could not find the language line "logo"
ERROR - 2021-07-29 12:25:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:26:29 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 12:26:47 --> Could not find the language line "allowance"
ERROR - 2021-07-29 12:26:47 --> Could not find the language line "deduction"
ERROR - 2021-07-29 12:27:00 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 12:27:09 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 12:27:09 --> Could not find the language line "deduction"
ERROR - 2021-07-29 12:27:09 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 12:27:09 --> Could not find the language line "deduction"
ERROR - 2021-07-29 12:27:09 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 12:27:09 --> Could not find the language line "deduction"
ERROR - 2021-07-29 12:27:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:27:57 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:27:57 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 260
ERROR - 2021-07-29 12:27:57 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Feetype.php 301
ERROR - 2021-07-29 12:28:19 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 12:28:19 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:28:19 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:28:19 --> Could not find the language line "logo"
ERROR - 2021-07-29 12:28:19 --> Could not find the language line "logo"
ERROR - 2021-07-29 12:28:53 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:28:53 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:28:54 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:30:05 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:30:24 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 12:30:24 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:30:24 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:30:24 --> Could not find the language line "logo"
ERROR - 2021-07-29 12:30:24 --> Could not find the language line "logo"
ERROR - 2021-07-29 12:30:59 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:31:02 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 12:31:02 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:31:02 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:31:02 --> Could not find the language line "logo"
ERROR - 2021-07-29 12:31:02 --> Could not find the language line "logo"
ERROR - 2021-07-29 12:34:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:34:16 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:34:16 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:34:17 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:34:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 12:34:48 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 12:35:16 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\models\Student_Model.php 362
ERROR - 2021-07-29 12:35:54 --> Could not find the language line "tabular"
ERROR - 2021-07-29 12:35:54 --> Could not find the language line "graphical"
ERROR - 2021-07-29 12:36:13 --> Could not find the language line "tabular"
ERROR - 2021-07-29 12:36:13 --> Could not find the language line "graphical"
ERROR - 2021-07-29 12:40:09 --> Could not find the language line "tabular"
ERROR - 2021-07-29 12:40:09 --> Could not find the language line "graphical"
ERROR - 2021-07-29 12:40:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 12:40:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 12:41:35 --> Could not find the language line "number"
ERROR - 2021-07-29 12:42:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 12:42:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 12:43:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 12:43:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 07:13:57 --> 404 Page Not Found: /index
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "apply"
ERROR - 2021-07-29 07:14:08 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:41 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:14:44 --> 404 Page Not Found: /index
ERROR - 2021-07-29 07:14:45 --> 404 Page Not Found: /index
ERROR - 2021-07-29 07:14:52 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:52 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:52 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:52 --> Could not find the language line "now"
ERROR - 2021-07-29 07:14:52 --> Could not find the language line "apply"
ERROR - 2021-07-29 07:14:52 --> Could not find the language line "now"
ERROR - 2021-07-29 12:44:59 --> Could not find the language line "allowance"
ERROR - 2021-07-29 12:44:59 --> Could not find the language line "deduction"
ERROR - 2021-07-29 07:15:12 --> 404 Page Not Found: /index
ERROR - 2021-07-29 12:45:56 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:45:56 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:45:57 --> Could not find the language line "dispatch"
ERROR - 2021-07-29 12:46:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 12:46:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 12:46:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:46:28 --> Could not find the language line ""
ERROR - 2021-07-29 12:46:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 12:46:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 12:46:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:47:10 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:47:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 12:47:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "apply"
ERROR - 2021-07-29 07:17:22 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "apply"
ERROR - 2021-07-29 07:17:24 --> Could not find the language line "now"
ERROR - 2021-07-29 12:47:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:48:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:49:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:50:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:50:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 12:50:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 12:51:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:51:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:54:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:54:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 07:24:46 --> Could not find the language line "now"
ERROR - 2021-07-29 07:24:46 --> Could not find the language line "now"
ERROR - 2021-07-29 07:24:46 --> Could not find the language line "now"
ERROR - 2021-07-29 07:24:46 --> Could not find the language line "now"
ERROR - 2021-07-29 07:24:46 --> Could not find the language line "apply"
ERROR - 2021-07-29 07:24:46 --> Could not find the language line "now"
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 12:55:12 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:56:24 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "visitor"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "postal"
ERROR - 2021-07-29 12:57:27 --> Could not find the language line "receive"
ERROR - 2021-07-29 12:57:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 12:57:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 12:57:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 07:29:46 --> 404 Page Not Found: /index
ERROR - 2021-07-29 13:00:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 13:00:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:05:29 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:05:49 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:07:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:07:39 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:08:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:08:47 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:09:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:09:20 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:09:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 13:09:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 13:09:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:09:48 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:09:49 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 07:39:49 --> Could not find the language line "now"
ERROR - 2021-07-29 07:39:49 --> Could not find the language line "now"
ERROR - 2021-07-29 07:39:49 --> Could not find the language line "now"
ERROR - 2021-07-29 07:39:49 --> Could not find the language line "now"
ERROR - 2021-07-29 07:39:49 --> Could not find the language line "apply"
ERROR - 2021-07-29 07:39:49 --> Could not find the language line "now"
ERROR - 2021-07-29 13:10:12 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:11:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:12:14 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:53 --> Could not find the language line "visit"
ERROR - 2021-07-29 07:42:58 --> 404 Page Not Found: /index
ERROR - 2021-07-29 13:13:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:13:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 13:13:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 13:13:54 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:13:59 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 07:44:12 --> Could not find the language line "now"
ERROR - 2021-07-29 07:44:12 --> Could not find the language line "now"
ERROR - 2021-07-29 07:44:12 --> Could not find the language line "now"
ERROR - 2021-07-29 07:44:12 --> Could not find the language line "now"
ERROR - 2021-07-29 07:44:12 --> Could not find the language line "apply"
ERROR - 2021-07-29 07:44:12 --> Could not find the language line "now"
ERROR - 2021-07-29 13:14:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "gud"
ERROR - 2021-07-29 07:44:23 --> Could not find the language line "apply"
ERROR - 2021-07-29 07:44:48 --> Could not find the language line "now"
ERROR - 2021-07-29 07:44:48 --> Could not find the language line "now"
ERROR - 2021-07-29 07:44:48 --> Could not find the language line "now"
ERROR - 2021-07-29 07:44:48 --> Could not find the language line "now"
ERROR - 2021-07-29 07:44:48 --> Could not find the language line "apply"
ERROR - 2021-07-29 07:44:48 --> Could not find the language line "now"
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:14:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:15:04 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:15:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:15:06 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 13:15:36 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:15:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:15:59 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:16:19 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:16:30 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:16:39 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:16:50 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:17:00 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:17:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:17:41 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 13:18:40 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 07:48:41 --> Could not find the language line "now"
ERROR - 2021-07-29 07:48:41 --> Could not find the language line "now"
ERROR - 2021-07-29 07:48:41 --> Could not find the language line "now"
ERROR - 2021-07-29 07:48:41 --> Could not find the language line "now"
ERROR - 2021-07-29 07:48:41 --> Could not find the language line "apply"
ERROR - 2021-07-29 07:48:41 --> Could not find the language line "now"
ERROR - 2021-07-29 13:18:49 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:18:49 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:18:49 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:18:49 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:18:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:19:10 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:19:50 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 13:19:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:20:59 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:21:12 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "postal"
ERROR - 2021-07-29 13:21:15 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:21:21 --> Could not find the language line "receive"
ERROR - 2021-07-29 13:21:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:21:46 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:21:46 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:21:46 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:21:46 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:21:57 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 07:52:01 --> 404 Page Not Found: /index
ERROR - 2021-07-29 07:52:09 --> 404 Page Not Found: /index
ERROR - 2021-07-29 07:52:11 --> 404 Page Not Found: /index
ERROR - 2021-07-29 07:52:15 --> 404 Page Not Found: /index
ERROR - 2021-07-29 13:22:28 --> Could not find the language line "visitor"
ERROR - 2021-07-29 13:22:30 --> Severity: error --> Exception: Call to a member function format() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 59
ERROR - 2021-07-29 13:25:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:25:22 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 07:57:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 13:28:25 --> Could not find the language line "allowance"
ERROR - 2021-07-29 13:28:25 --> Could not find the language line "deduction"
ERROR - 2021-07-29 13:28:37 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 13:28:37 --> Could not find the language line "deduction"
ERROR - 2021-07-29 13:28:37 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 13:28:37 --> Could not find the language line "deduction"
ERROR - 2021-07-29 13:28:37 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 13:28:37 --> Could not find the language line "deduction"
ERROR - 2021-07-29 13:28:39 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 13:28:39 --> Could not find the language line "deduction"
ERROR - 2021-07-29 13:28:39 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 13:28:39 --> Could not find the language line "deduction"
ERROR - 2021-07-29 13:28:39 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 13:28:39 --> Could not find the language line "deduction"
ERROR - 2021-07-29 13:28:40 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 13:28:40 --> Could not find the language line "deduction"
ERROR - 2021-07-29 13:28:40 --> Severity: Warning --> cal_days_in_month() expects parameter 2 to be int, string given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\controllers\Payment.php 665
ERROR - 2021-07-29 13:28:40 --> Could not find the language line "deduction"
ERROR - 2021-07-29 13:28:52 --> Could not find the language line "allowance"
ERROR - 2021-07-29 13:28:52 --> Could not find the language line "deduction"
ERROR - 2021-07-29 13:28:52 --> Could not find the language line "method"
ERROR - 2021-07-29 13:28:52 --> Could not find the language line "bank"
ERROR - 2021-07-29 13:28:52 --> Could not find the language line "bank"
ERROR - 2021-07-29 13:28:52 --> Could not find the language line "number"
ERROR - 2021-07-29 13:28:52 --> Could not find the language line "number"
ERROR - 2021-07-29 13:28:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\payroll\views\payment\index.php 385
ERROR - 2021-07-29 13:28:55 --> Could not find the language line "deduction"
ERROR - 2021-07-29 13:29:39 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:29:46 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 13:29:46 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:29:46 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:29:46 --> Could not find the language line "logo"
ERROR - 2021-07-29 13:29:46 --> Could not find the language line "logo"
ERROR - 2021-07-29 13:30:13 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 13:30:13 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:30:13 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:30:13 --> Could not find the language line "logo"
ERROR - 2021-07-29 13:30:13 --> Could not find the language line "logo"
ERROR - 2021-07-29 13:30:31 --> Severity: Warning --> mail(): SMTP server response: 530 SMTP authentication is required. C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\core\MY_Model.php 433
ERROR - 2021-07-29 13:30:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 13:30:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 13:31:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 08:01:26 --> 404 Page Not Found: /index
ERROR - 2021-07-29 13:31:42 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 08:01:59 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:02:32 --> Could not find the language line "now"
ERROR - 2021-07-29 08:02:32 --> Could not find the language line "now"
ERROR - 2021-07-29 08:02:32 --> Could not find the language line "now"
ERROR - 2021-07-29 08:02:32 --> Could not find the language line "apply"
ERROR - 2021-07-29 08:02:32 --> Could not find the language line "now"
ERROR - 2021-07-29 13:32:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 13:32:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 08:02:44 --> 404 Page Not Found: /index
ERROR - 2021-07-29 13:33:08 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 13:33:08 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:33:08 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:33:08 --> Could not find the language line "logo"
ERROR - 2021-07-29 13:33:08 --> Could not find the language line "logo"
ERROR - 2021-07-29 08:03:16 --> Could not find the language line "apply"
ERROR - 2021-07-29 08:03:16 --> Could not find the language line "now"
ERROR - 2021-07-29 08:03:18 --> 404 Page Not Found: /index
ERROR - 2021-07-29 13:33:56 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:38:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:39:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 13:39:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 13:39:09 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:40:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:41:08 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:43:36 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:44:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 13:44:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:45:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 13:45:16 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:45:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 13:45:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 13:45:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 13:46:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:46:23 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:46:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 13:46:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 13:46:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 13:47:35 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:47:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:47:46 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 13:47:46 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:47:46 --> Could not find the language line "registration"
ERROR - 2021-07-29 13:47:46 --> Could not find the language line "logo"
ERROR - 2021-07-29 13:47:46 --> Could not find the language line "logo"
ERROR - 2021-07-29 13:47:51 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:48:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:48:44 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:49:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:49:44 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:50:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:51:19 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:52:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 13:52:53 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 13:53:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 13:53:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 13:54:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 13:54:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 13:56:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 13:56:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 13:58:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 13:58:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 13:59:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 13:59:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 13:59:49 --> Could not find the language line "registration"
ERROR - 2021-07-29 14:00:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:00:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 14:01:19 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 14:01:19 --> Could not find the language line "registration"
ERROR - 2021-07-29 14:01:19 --> Could not find the language line "registration"
ERROR - 2021-07-29 14:01:19 --> Could not find the language line "logo"
ERROR - 2021-07-29 14:01:19 --> Could not find the language line "logo"
ERROR - 2021-07-29 14:02:00 --> Could not find the language line "registration"
ERROR - 2021-07-29 14:02:33 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 14:02:33 --> Could not find the language line "registration"
ERROR - 2021-07-29 14:02:33 --> Could not find the language line "registration"
ERROR - 2021-07-29 14:02:33 --> Could not find the language line "logo"
ERROR - 2021-07-29 14:02:33 --> Could not find the language line "logo"
ERROR - 2021-07-29 14:03:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:03:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:03:30 --> Could not find the language line "registration"
ERROR - 2021-07-29 14:05:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:05:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:20 --> Could not find the language line "visit"
ERROR - 2021-07-29 08:38:23 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:38:34 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:38:55 --> Could not find the language line "apply"
ERROR - 2021-07-29 08:38:55 --> Could not find the language line "now"
ERROR - 2021-07-29 14:09:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 08:39:17 --> Could not find the language line "apply"
ERROR - 2021-07-29 08:39:17 --> Could not find the language line "now"
ERROR - 2021-07-29 08:39:18 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:39:24 --> Could not find the language line "apply"
ERROR - 2021-07-29 08:39:24 --> Could not find the language line "now"
ERROR - 2021-07-29 08:39:26 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:39:33 --> 404 Page Not Found: /index
ERROR - 2021-07-29 08:39:35 --> Could not find the language line "apply"
ERROR - 2021-07-29 08:39:35 --> Could not find the language line "now"
ERROR - 2021-07-29 08:39:36 --> Could not find the language line "apply"
ERROR - 2021-07-29 08:39:36 --> Could not find the language line "now"
ERROR - 2021-07-29 14:09:40 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 14:10:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 14:10:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:10:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:11:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\alumni.php 169
ERROR - 2021-07-29 14:11:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\alumni.php 169
ERROR - 2021-07-29 14:11:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:11:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:12:02 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 14:12:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:12:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 14:14:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:14:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:15:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 14:15:53 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 14:19:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:19:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:20:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:20:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 14:20:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:20:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:20:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\alumni.php 169
ERROR - 2021-07-29 14:24:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:24:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:25:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:25:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:26:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 14:27:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 84
ERROR - 2021-07-29 14:27:41 --> Could not find the language line "number"
ERROR - 2021-07-29 14:29:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:29:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 14:29:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:29:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 08:59:38 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:31:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:31:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 14:32:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:32:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:39:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 14:40:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 14:41:36 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:11:37 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:12:49 --> Query error: Column 'school_id' cannot be null - Invalid query: INSERT INTO `activity_logs` (`school_id`, `user_id`, `role_id`, `name`, `phone`, `email`, `ip_address`, `user_agent`, `activity`, `status`, `created_at`, `created_by`) VALUES (NULL, 0, 0, NULL, NULL, NULL, '103.66.23.5', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'Has been logged out', 1, '2021-07-29 09:12:49', 0)
ERROR - 2021-07-29 14:47:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:47:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:19:50 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:19:54 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:21:22 --> Could not find the language line "apply"
ERROR - 2021-07-29 09:21:22 --> Could not find the language line "now"
ERROR - 2021-07-29 14:53:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:53:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:24:16 --> Could not find the language line "apply"
ERROR - 2021-07-29 09:24:16 --> Could not find the language line "now"
ERROR - 2021-07-29 09:24:18 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:54:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:54:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 09:24:54 --> Could not find the language line "apply"
ERROR - 2021-07-29 09:24:54 --> Could not find the language line "now"
ERROR - 2021-07-29 09:26:22 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:58:08 --> Could not find the language line ""
ERROR - 2021-07-29 14:58:08 --> Could not find the language line ""
ERROR - 2021-07-29 14:58:08 --> Could not find the language line ""
ERROR - 2021-07-29 09:29:04 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:59:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 14:59:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 14:59:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:29:44 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:00:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 15:00:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 15:00:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 15:00:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 664
ERROR - 2021-07-29 15:01:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 15:01:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:33:16 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:03:18 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:33:23 --> Could not find the language line "visit"
ERROR - 2021-07-29 15:03:24 --> Could not find the language line "registration"
ERROR - 2021-07-29 09:33:35 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:03:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 15:03:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 09:33:37 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:03:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 15:03:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 15:03:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:35:08 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:05:53 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:05:56 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:05:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:05:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:05:57 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 841
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 849
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 860
ERROR - 2021-07-29 15:06:04 --> Severity: Notice --> Trying to get property 'role_id' of non-object C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\helpers\util_helper.php 868
ERROR - 2021-07-29 15:06:04 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 09:36:04 --> Could not find the language line "now"
ERROR - 2021-07-29 09:36:04 --> Could not find the language line "now"
ERROR - 2021-07-29 09:36:04 --> Could not find the language line "now"
ERROR - 2021-07-29 09:36:04 --> Could not find the language line "now"
ERROR - 2021-07-29 09:36:04 --> Could not find the language line "apply"
ERROR - 2021-07-29 09:36:04 --> Could not find the language line "now"
ERROR - 2021-07-29 15:07:41 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 15:07:44 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 15:07:44 --> Could not find the language line "registration"
ERROR - 2021-07-29 15:07:44 --> Could not find the language line "registration"
ERROR - 2021-07-29 15:07:44 --> Could not find the language line "logo"
ERROR - 2021-07-29 15:07:44 --> Could not find the language line "logo"
ERROR - 2021-07-29 15:10:11 --> Could not find the language line "registration"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:36 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:37 --> Could not find the language line "visit"
ERROR - 2021-07-29 09:40:39 --> 404 Page Not Found: /index
ERROR - 2021-07-29 09:40:47 --> Could not find the language line "now"
ERROR - 2021-07-29 09:40:47 --> Could not find the language line "now"
ERROR - 2021-07-29 09:40:47 --> Could not find the language line "now"
ERROR - 2021-07-29 09:40:47 --> Could not find the language line "now"
ERROR - 2021-07-29 09:40:47 --> Could not find the language line "apply"
ERROR - 2021-07-29 09:40:47 --> Could not find the language line "now"
ERROR - 2021-07-29 15:13:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 15:13:41 --> Severity: Warning --> rand() expects exactly 2 parameters, 1 given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\controllers\Student.php 927
ERROR - 2021-07-29 15:13:41 --> Severity: Warning --> mail(): SMTP server response: 530 SMTP authentication is required. C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\core\MY_Model.php 433
ERROR - 2021-07-29 15:13:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 15:13:47 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 15:13:47 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 15:13:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 15:13:59 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 15:15:04 --> Could not find the language line ""
ERROR - 2021-07-29 15:15:04 --> Could not find the language line ""
ERROR - 2021-07-29 15:15:04 --> Could not find the language line ""
ERROR - 2021-07-29 15:15:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 15:15:31 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 15:16:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 15:16:38 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 15:17:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 15:17:35 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 15:18:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 15:18:41 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 15:19:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 15:19:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 15:20:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 15:20:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 15:24:38 --> Could not find the language line "mark_total"
ERROR - 2021-07-29 15:24:38 --> Could not find the language line "mark_obtain"
ERROR - 2021-07-29 15:24:38 --> Could not find the language line "option"
ERROR - 2021-07-29 15:24:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 15:25:46 --> Could not find the language line "registration"
ERROR - 2021-07-29 15:26:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 15:26:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 09:56:34 --> Could not find the language line "apply"
ERROR - 2021-07-29 09:56:34 --> Could not find the language line "now"
ERROR - 2021-07-29 15:27:40 --> Could not find the language line "number"
ERROR - 2021-07-29 15:27:40 --> Could not find the language line "number"
ERROR - 2021-07-29 15:27:40 --> Could not find the language line "number"
ERROR - 2021-07-29 15:27:41 --> Could not find the language line "number"
ERROR - 2021-07-29 15:27:41 --> Could not find the language line "number"
ERROR - 2021-07-29 15:27:41 --> Could not find the language line "number"
ERROR - 2021-07-29 09:58:41 --> Could not find the language line "apply"
ERROR - 2021-07-29 09:58:41 --> Could not find the language line "now"
ERROR - 2021-07-29 09:58:46 --> Could not find the language line "apply"
ERROR - 2021-07-29 09:58:46 --> Could not find the language line "now"
ERROR - 2021-07-29 15:30:36 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 15:30:48 --> Could not find the language line "number"
ERROR - 2021-07-29 15:30:48 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 15:30:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 15:30:48 --> Could not find the language line "bank"
ERROR - 2021-07-29 15:30:48 --> Could not find the language line "bank"
ERROR - 2021-07-29 15:30:48 --> Could not find the language line "number"
ERROR - 2021-07-29 15:30:48 --> Could not find the language line "number"
ERROR - 2021-07-29 10:01:24 --> Could not find the language line "apply"
ERROR - 2021-07-29 10:01:24 --> Could not find the language line "now"
ERROR - 2021-07-29 10:01:26 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:01:53 --> Could not find the language line "apply"
ERROR - 2021-07-29 10:01:53 --> Could not find the language line "now"
ERROR - 2021-07-29 10:01:54 --> Could not find the language line "apply"
ERROR - 2021-07-29 10:01:54 --> Could not find the language line "now"
ERROR - 2021-07-29 10:01:56 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:02:03 --> Query error: Column 'school_id' cannot be null - Invalid query: INSERT INTO `activity_logs` (`school_id`, `user_id`, `role_id`, `name`, `phone`, `email`, `ip_address`, `user_agent`, `activity`, `status`, `created_at`, `created_by`) VALUES (NULL, 0, 0, NULL, NULL, NULL, '117.234.70.182', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'Has been logged out', 1, '2021-07-29 10:02:03', 0)
ERROR - 2021-07-29 10:02:03 --> Query error: Column 'school_id' cannot be null - Invalid query: INSERT INTO `activity_logs` (`school_id`, `user_id`, `role_id`, `name`, `phone`, `email`, `ip_address`, `user_agent`, `activity`, `status`, `created_at`, `created_by`) VALUES (NULL, 0, 0, NULL, NULL, NULL, '117.234.70.182', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'Has been logged out', 1, '2021-07-29 10:02:03', 0)
ERROR - 2021-07-29 10:02:03 --> Query error: Column 'school_id' cannot be null - Invalid query: INSERT INTO `activity_logs` (`school_id`, `user_id`, `role_id`, `name`, `phone`, `email`, `ip_address`, `user_agent`, `activity`, `status`, `created_at`, `created_by`) VALUES (NULL, 0, 0, NULL, NULL, NULL, '117.234.70.182', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'Has been logged out', 1, '2021-07-29 10:02:03', 0)
ERROR - 2021-07-29 10:02:05 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:02:53 --> Could not find the language line "apply"
ERROR - 2021-07-29 10:02:53 --> Could not find the language line "now"
ERROR - 2021-07-29 10:02:55 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:03:03 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:03:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:33:34 --> Could not find the language line "number"
ERROR - 2021-07-29 15:33:45 --> Could not find the language line "number"
ERROR - 2021-07-29 15:47:35 --> Could not find the language line "module"
ERROR - 2021-07-29 15:47:35 --> Could not find the language line "function"
ERROR - 2021-07-29 10:17:37 --> Could not find the language line "apply"
ERROR - 2021-07-29 10:17:37 --> Could not find the language line "now"
ERROR - 2021-07-29 10:17:38 --> Could not find the language line "apply"
ERROR - 2021-07-29 10:17:38 --> Could not find the language line "now"
ERROR - 2021-07-29 10:17:41 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:47:46 --> Could not find the language line "module"
ERROR - 2021-07-29 15:47:46 --> Could not find the language line "function"
ERROR - 2021-07-29 15:48:23 --> Could not find the language line "registration"
ERROR - 2021-07-29 15:48:23 --> Could not find the language line "registration"
ERROR - 2021-07-29 15:48:33 --> Could not find the language line "module"
ERROR - 2021-07-29 15:48:33 --> Could not find the language line "function"
ERROR - 2021-07-29 15:50:07 --> Could not find the language line "module"
ERROR - 2021-07-29 15:50:07 --> Could not find the language line "function"
ERROR - 2021-07-29 15:50:26 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 15:50:37 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 15:50:42 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 15:50:42 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:51:18 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:52:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:53:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 15:54:53 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 15:55:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 15:56:23 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 15:56:29 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 15:56:29 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 15:56:37 --> Could not find the language line "number"
ERROR - 2021-07-29 15:56:37 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 15:56:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 15:56:37 --> Could not find the language line "bank"
ERROR - 2021-07-29 15:56:37 --> Could not find the language line "bank"
ERROR - 2021-07-29 15:56:37 --> Could not find the language line "number"
ERROR - 2021-07-29 15:56:37 --> Could not find the language line "number"
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:26 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 15:57:39 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 15:57:39 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 15:58:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 15:59:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 15:59:25 --> Could not find the language line "number"
ERROR - 2021-07-29 15:59:25 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 15:59:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 15:59:25 --> Could not find the language line "bank"
ERROR - 2021-07-29 15:59:25 --> Could not find the language line "bank"
ERROR - 2021-07-29 15:59:25 --> Could not find the language line "number"
ERROR - 2021-07-29 15:59:25 --> Could not find the language line "number"
ERROR - 2021-07-29 15:59:36 --> Could not find the language line "number"
ERROR - 2021-07-29 15:59:36 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 15:59:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 516
ERROR - 2021-07-29 15:59:36 --> Could not find the language line "bank"
ERROR - 2021-07-29 15:59:36 --> Could not find the language line "bank"
ERROR - 2021-07-29 15:59:36 --> Could not find the language line "number"
ERROR - 2021-07-29 15:59:36 --> Could not find the language line "number"
ERROR - 2021-07-29 16:00:16 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 16:00:22 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:00:22 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:00:22 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:00:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:00:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:01:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:01:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:01:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:02:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 16:02:41 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 16:02:41 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 16:02:46 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:02:46 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:02:46 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:02:46 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:02:46 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:03:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:03:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:03:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:03:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:03:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:05:07 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 16:05:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:05:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:05:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:05:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:05:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:05:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:06:02 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:06:02 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:06:02 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:06:02 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:06:02 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:06:02 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:06:08 --> Could not find the language line "number"
ERROR - 2021-07-29 16:06:08 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 16:06:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 16:06:08 --> Could not find the language line "bank"
ERROR - 2021-07-29 16:06:08 --> Could not find the language line "bank"
ERROR - 2021-07-29 16:06:08 --> Could not find the language line "number"
ERROR - 2021-07-29 16:06:08 --> Could not find the language line "number"
ERROR - 2021-07-29 16:09:00 --> Could not find the language line "number"
ERROR - 2021-07-29 16:09:00 --> Could not find the language line "number"
ERROR - 2021-07-29 16:09:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:09:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:09:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:09:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:09:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:09:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:09:13 --> Could not find the language line "number"
ERROR - 2021-07-29 16:09:33 --> Could not find the language line "number"
ERROR - 2021-07-29 16:09:42 --> Could not find the language line "number"
ERROR - 2021-07-29 16:09:53 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 16:10:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 16:10:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 16:10:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:10:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:10:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:10:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:10:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:10:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:10:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:11:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:42:46 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:38 --> Could not find the language line "visit"
ERROR - 2021-07-29 10:43:45 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:43:47 --> 404 Page Not Found: /index
ERROR - 2021-07-29 16:19:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 16:20:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 16:25:03 --> Could not find the language line "number"
ERROR - 2021-07-29 10:56:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:56:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:56:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:56:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:56:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:56:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:56:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:56:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 10:56:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 16:27:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:27:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:27:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:27:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:27:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:27:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:27:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:30:21 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 16:30:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:30:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:30:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:30:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:30:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:30:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:30:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:30:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 11:01:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:01:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:01:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:01:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:01:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:01:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:01:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:01:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:01:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 16:31:50 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 16:31:58 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 16:32:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:32:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 11:03:57 --> Could not find the language line "apply"
ERROR - 2021-07-29 11:03:57 --> Could not find the language line "now"
ERROR - 2021-07-29 11:03:59 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:04:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:04:39 --> 404 Page Not Found: /index
ERROR - 2021-07-29 16:34:47 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 16:34:54 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:34:54 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:34:54 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:34:54 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:34:54 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:34:54 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:34:54 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:34:54 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:34:54 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:34:54 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:34:54 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:35:08 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:36:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:36:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:36:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:36:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:36:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:36:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:36:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:36:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:36:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:36:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 11:07:55 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:06 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:16 --> Could not find the language line "apply"
ERROR - 2021-07-29 16:38:16 --> Could not find the language line "used"
ERROR - 2021-07-29 16:38:27 --> Could not find the language line "apply"
ERROR - 2021-07-29 16:38:27 --> Could not find the language line "used"
ERROR - 2021-07-29 16:38:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:38:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:38:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:38:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:38:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:38:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:38:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:38:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:38:48 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:38:59 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:39:33 --> Could not find the language line "apply"
ERROR - 2021-07-29 16:39:33 --> Could not find the language line "used"
ERROR - 2021-07-29 16:39:51 --> Could not find the language line "apply"
ERROR - 2021-07-29 16:39:51 --> Could not find the language line "used"
ERROR - 2021-07-29 16:40:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:40:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:00 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:42:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:42:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:42:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:42:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:42:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:42:21 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:42:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:42:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:14 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:23 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:43:23 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:43:23 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:43:23 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:43:23 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:43:23 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:43:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:03 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:44:03 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:44:03 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:44:03 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:44:03 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:25 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:47 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:44:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:44:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:44:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:44:56 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:05 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:45:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:45:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:45:17 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:45:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:45:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:45:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:45:37 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:20 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:46:20 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:28 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:46:57 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:03 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:47:24 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:48:43 --> Could not find the language line ""
ERROR - 2021-07-29 16:48:43 --> Could not find the language line ""
ERROR - 2021-07-29 16:48:43 --> Could not find the language line ""
ERROR - 2021-07-29 16:48:51 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 16:49:04 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:10 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:49:27 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:50:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 16:50:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 16:50:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 16:52:40 --> Severity: error --> Exception: Call to undefined method Application_Model::get_reporting_users() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 90
ERROR - 2021-07-29 16:52:46 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Application.php 337
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:52:53 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:53:31 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:03 --> Could not find the language line ""
ERROR - 2021-07-29 16:55:03 --> Could not find the language line ""
ERROR - 2021-07-29 16:55:03 --> Could not find the language line ""
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:13 --> Severity: Warning --> strpos(): Empty needle C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\leave\controllers\Approve.php 213
ERROR - 2021-07-29 16:55:55 --> Could not find the language line ""
ERROR - 2021-07-29 16:55:55 --> Could not find the language line ""
ERROR - 2021-07-29 16:55:55 --> Could not find the language line ""
ERROR - 2021-07-29 16:56:28 --> Could not find the language line "registration"
ERROR - 2021-07-29 16:56:38 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 16:56:38 --> Could not find the language line "registration"
ERROR - 2021-07-29 16:56:38 --> Could not find the language line "registration"
ERROR - 2021-07-29 16:56:38 --> Could not find the language line "logo"
ERROR - 2021-07-29 16:56:38 --> Could not find the language line "logo"
ERROR - 2021-07-29 17:00:21 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 17:03:04 --> Could not find the language line "registration"
ERROR - 2021-07-29 17:04:09 --> Could not find the language line "registration"
ERROR - 2021-07-29 17:04:18 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 17:04:18 --> Could not find the language line "registration"
ERROR - 2021-07-29 17:04:18 --> Could not find the language line "registration"
ERROR - 2021-07-29 17:04:18 --> Could not find the language line "logo"
ERROR - 2021-07-29 17:04:18 --> Could not find the language line "logo"
ERROR - 2021-07-29 17:04:49 --> Could not find the language line "registration"
ERROR - 2021-07-29 17:08:18 --> Could not find the language line "account_group_id"
ERROR - 2021-07-29 11:40:31 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:40:48 --> 404 Page Not Found: /index
ERROR - 2021-07-29 11:46:01 --> Could not find the language line "now"
ERROR - 2021-07-29 11:46:01 --> Could not find the language line "now"
ERROR - 2021-07-29 11:46:01 --> Could not find the language line "now"
ERROR - 2021-07-29 11:46:01 --> Could not find the language line "apply"
ERROR - 2021-07-29 11:46:01 --> Could not find the language line "now"
ERROR - 2021-07-29 17:16:15 --> Severity: Warning --> A non-numeric value encountered C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\models\Student_Model.php 362
ERROR - 2021-07-29 12:02:32 --> Could not find the language line "apply"
ERROR - 2021-07-29 12:02:32 --> Could not find the language line "now"
ERROR - 2021-07-29 12:02:35 --> 404 Page Not Found: /index
ERROR - 2021-07-29 17:33:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 150
ERROR - 2021-07-29 17:33:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\hrm\views\employee\index.php 231
ERROR - 2021-07-29 12:07:46 --> Severity: Warning --> require_once(C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php): failed to open stream: Resource temporarily unavailable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\system\core\CodeIgniter.php 412
ERROR - 2021-07-29 12:07:46 --> Severity: Compile Error --> require_once(): Failed opening required 'C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php' (include_path='.;.\includes;.\pear') C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\system\core\CodeIgniter.php 412
ERROR - 2021-07-29 17:37:50 --> Severity: Warning --> explode() expects parameter 2 to be string, array given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 44
ERROR - 2021-07-29 17:37:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 45
ERROR - 2021-07-29 17:38:06 --> Severity: Warning --> explode() expects parameter 2 to be string, array given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 44
ERROR - 2021-07-29 17:38:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 45
ERROR - 2021-07-29 17:38:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 56
ERROR - 2021-07-29 17:38:29 --> Severity: Warning --> explode() expects parameter 2 to be string, array given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 44
ERROR - 2021-07-29 17:38:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 45
ERROR - 2021-07-29 17:38:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 46
ERROR - 2021-07-29 17:38:31 --> Severity: Warning --> explode() expects parameter 2 to be string, array given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 44
ERROR - 2021-07-29 17:38:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 45
ERROR - 2021-07-29 17:38:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 46
ERROR - 2021-07-29 17:38:37 --> Could not find the language line "module"
ERROR - 2021-07-29 17:38:37 --> Could not find the language line "function"
ERROR - 2021-07-29 17:38:44 --> Severity: Warning --> explode() expects parameter 2 to be string, array given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 44
ERROR - 2021-07-29 17:38:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 46
ERROR - 2021-07-29 17:39:22 --> Severity: Warning --> explode() expects parameter 2 to be string, array given C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 44
ERROR - 2021-07-29 17:39:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php 46
ERROR - 2021-07-29 12:10:20 --> Severity: Warning --> require_once(C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers\Vouchers.php): failed to open stream: Resource temporarily unavailable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\system\core\CodeIgniter.php 412
ERROR - 2021-07-29 12:10:20 --> Severity: Compile Error --> require_once(): Failed opening required 'C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\controllers/Vouchers.php' (include_path='.;.\includes;.\pear') C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\system\core\CodeIgniter.php 412
ERROR - 2021-07-29 12:14:56 --> 404 Page Not Found: Auth/assets
ERROR - 2021-07-29 17:47:46 --> Could not find the language line "registration"
ERROR - 2021-07-29 12:48:52 --> 404 Page Not Found: /index
ERROR - 2021-07-29 12:50:07 --> Could not find the language line "apply"
ERROR - 2021-07-29 12:50:07 --> Could not find the language line "now"
ERROR - 2021-07-29 13:39:39 --> 404 Page Not Found: /index
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:50 --> Could not find the language line "visit"
ERROR - 2021-07-29 13:39:53 --> 404 Page Not Found: /index
ERROR - 2021-07-29 13:39:54 --> 404 Page Not Found: /index
ERROR - 2021-07-29 19:11:40 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:11:40 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:12:23 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:12:23 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:12:23 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:15:47 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:15:47 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:16:19 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:16:20 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:16:20 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:16:46 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:16:46 --> Could not find the language line "confirm"
ERROR - 2021-07-29 19:17:32 --> Could not find the language line "registration"
ERROR - 2021-07-29 19:18:55 --> Could not find the language line "academic_school"
ERROR - 2021-07-29 19:18:55 --> Could not find the language line "registration"
ERROR - 2021-07-29 19:18:55 --> Could not find the language line "registration"
ERROR - 2021-07-29 19:18:55 --> Could not find the language line "logo"
ERROR - 2021-07-29 19:18:55 --> Could not find the language line "logo"
ERROR - 2021-07-29 14:00:05 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:00:16 --> 404 Page Not Found: /index
ERROR - 2021-07-29 19:54:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\views\accountledgers\index.php 216
ERROR - 2021-07-29 14:25:43 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:25:43 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:25:44 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:25:46 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:25:46 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:25:47 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:25:54 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:25:54 --> 404 Page Not Found: /index
ERROR - 2021-07-29 14:25:55 --> 404 Page Not Found: /index
ERROR - 2021-07-29 20:05:06 --> Could not find the language line "method"
ERROR - 2021-07-29 20:05:06 --> Could not find the language line "tabular"
ERROR - 2021-07-29 20:05:06 --> Could not find the language line "graphical"
ERROR - 2021-07-29 20:05:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 84
ERROR - 2021-07-29 20:05:46 --> Could not find the language line "number"
ERROR - 2021-07-29 20:27:48 --> Could not find the language line "number"
ERROR - 2021-07-29 20:27:48 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 20:27:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 20:27:48 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:27:48 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:27:48 --> Could not find the language line "number"
ERROR - 2021-07-29 20:27:48 --> Could not find the language line "number"
ERROR - 2021-07-29 20:28:42 --> Could not find the language line "amont"
ERROR - 2021-07-29 20:28:43 --> Could not find the language line "number"
ERROR - 2021-07-29 20:32:20 --> Could not find the language line "number"
ERROR - 2021-07-29 20:33:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 20:34:05 --> Could not find the language line ""
ERROR - 2021-07-29 20:34:05 --> Could not find the language line ""
ERROR - 2021-07-29 20:34:05 --> Could not find the language line "433682429920"
ERROR - 2021-07-29 20:34:05 --> Could not find the language line ""
ERROR - 2021-07-29 20:34:20 --> Could not find the language line "method"
ERROR - 2021-07-29 20:34:20 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:34:20 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:34:20 --> Could not find the language line "number"
ERROR - 2021-07-29 20:34:20 --> Could not find the language line "number"
ERROR - 2021-07-29 20:34:20 --> Could not find the language line "number"
ERROR - 2021-07-29 20:34:20 --> Could not find the language line "number"
ERROR - 2021-07-29 20:34:20 --> Could not find the language line "year"
ERROR - 2021-07-29 20:35:25 --> Could not find the language line "method"
ERROR - 2021-07-29 20:36:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 20:36:24 --> Could not find the language line ""
ERROR - 2021-07-29 20:36:24 --> Could not find the language line ""
ERROR - 2021-07-29 20:36:24 --> Could not find the language line "433682429920"
ERROR - 2021-07-29 20:36:24 --> Could not find the language line ""
ERROR - 2021-07-29 20:37:04 --> Could not find the language line "method"
ERROR - 2021-07-29 20:37:04 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:37:04 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:37:04 --> Could not find the language line "number"
ERROR - 2021-07-29 20:37:04 --> Could not find the language line "number"
ERROR - 2021-07-29 20:37:04 --> Could not find the language line "number"
ERROR - 2021-07-29 20:37:04 --> Could not find the language line "number"
ERROR - 2021-07-29 20:37:04 --> Could not find the language line "year"
ERROR - 2021-07-29 15:07:20 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:07:20 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:07:20 --> 404 Page Not Found: /index
ERROR - 2021-07-29 20:40:49 --> Could not find the language line "method"
ERROR - 2021-07-29 20:40:49 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:40:49 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:40:49 --> Could not find the language line "number"
ERROR - 2021-07-29 20:40:49 --> Could not find the language line "number"
ERROR - 2021-07-29 20:40:49 --> Could not find the language line "number"
ERROR - 2021-07-29 20:40:49 --> Could not find the language line "number"
ERROR - 2021-07-29 20:40:49 --> Could not find the language line "year"
ERROR - 2021-07-29 20:46:08 --> Could not find the language line "number"
ERROR - 2021-07-29 20:46:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 20:46:52 --> Could not find the language line ""
ERROR - 2021-07-29 20:46:52 --> Could not find the language line ""
ERROR - 2021-07-29 20:46:52 --> Could not find the language line "433682429920"
ERROR - 2021-07-29 20:46:52 --> Could not find the language line ""
ERROR - 2021-07-29 20:47:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 20:47:21 --> Could not find the language line "number"
ERROR - 2021-07-29 20:53:45 --> Could not find the language line "number"
ERROR - 2021-07-29 20:53:45 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 20:53:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 20:53:45 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:53:45 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:53:45 --> Could not find the language line "number"
ERROR - 2021-07-29 20:53:45 --> Could not find the language line "number"
ERROR - 2021-07-29 20:55:28 --> Could not find the language line "number"
ERROR - 2021-07-29 15:27:20 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:27:20 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:27:21 --> 404 Page Not Found: /index
ERROR - 2021-07-29 20:57:25 --> Could not find the language line "number"
ERROR - 2021-07-29 15:27:26 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:27:26 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:27:27 --> 404 Page Not Found: /index
ERROR - 2021-07-29 20:59:39 --> Could not find the language line "number"
ERROR - 2021-07-29 20:59:39 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 20:59:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 20:59:39 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:59:39 --> Could not find the language line "bank"
ERROR - 2021-07-29 20:59:39 --> Could not find the language line "number"
ERROR - 2021-07-29 20:59:39 --> Could not find the language line "number"
ERROR - 2021-07-29 21:00:31 --> Could not find the language line "number"
ERROR - 2021-07-29 21:01:02 --> Could not find the language line "number"
ERROR - 2021-07-29 21:01:49 --> Could not find the language line "method"
ERROR - 2021-07-29 21:01:49 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:01:49 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:01:49 --> Could not find the language line "number"
ERROR - 2021-07-29 21:01:49 --> Could not find the language line "number"
ERROR - 2021-07-29 21:01:49 --> Could not find the language line "number"
ERROR - 2021-07-29 21:01:49 --> Could not find the language line "number"
ERROR - 2021-07-29 21:01:49 --> Could not find the language line "year"
ERROR - 2021-07-29 21:04:25 --> Could not find the language line "method"
ERROR - 2021-07-29 21:04:25 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:04:25 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:04:25 --> Could not find the language line "number"
ERROR - 2021-07-29 21:04:25 --> Could not find the language line "number"
ERROR - 2021-07-29 21:04:25 --> Could not find the language line "number"
ERROR - 2021-07-29 21:04:25 --> Could not find the language line "number"
ERROR - 2021-07-29 21:04:25 --> Could not find the language line "year"
ERROR - 2021-07-29 21:14:05 --> Could not find the language line "method"
ERROR - 2021-07-29 21:14:05 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:14:05 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:14:05 --> Could not find the language line "number"
ERROR - 2021-07-29 21:14:05 --> Could not find the language line "number"
ERROR - 2021-07-29 21:14:05 --> Could not find the language line "number"
ERROR - 2021-07-29 21:14:05 --> Could not find the language line "number"
ERROR - 2021-07-29 21:14:05 --> Could not find the language line "year"
ERROR - 2021-07-29 15:47:51 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:47:52 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:47:52 --> 404 Page Not Found: /index
ERROR - 2021-07-29 21:18:06 --> Could not find the language line "number"
ERROR - 2021-07-29 21:18:06 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 21:18:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 21:18:06 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:18:06 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:18:06 --> Could not find the language line "number"
ERROR - 2021-07-29 21:18:06 --> Could not find the language line "number"
ERROR - 2021-07-29 15:48:36 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:48:36 --> 404 Page Not Found: /index
ERROR - 2021-07-29 15:48:36 --> 404 Page Not Found: /index
ERROR - 2021-07-29 21:20:09 --> Could not find the language line "method"
ERROR - 2021-07-29 21:20:09 --> Could not find the language line "method"
ERROR - 2021-07-29 21:20:09 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:20:09 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:20:09 --> Could not find the language line "number"
ERROR - 2021-07-29 21:20:09 --> Could not find the language line "number"
ERROR - 2021-07-29 21:20:09 --> Could not find the language line "number"
ERROR - 2021-07-29 21:20:09 --> Could not find the language line "number"
ERROR - 2021-07-29 21:20:09 --> Could not find the language line "year"
ERROR - 2021-07-29 21:21:27 --> Could not find the language line "method"
ERROR - 2021-07-29 21:21:27 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:21:27 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:21:27 --> Could not find the language line "number"
ERROR - 2021-07-29 21:21:27 --> Could not find the language line "number"
ERROR - 2021-07-29 21:21:27 --> Could not find the language line "number"
ERROR - 2021-07-29 21:21:27 --> Could not find the language line "number"
ERROR - 2021-07-29 21:21:27 --> Could not find the language line "year"
ERROR - 2021-07-29 21:21:40 --> Could not find the language line "method"
ERROR - 2021-07-29 21:22:29 --> Could not find the language line "method"
ERROR - 2021-07-29 21:22:29 --> Could not find the language line "method"
ERROR - 2021-07-29 21:22:29 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:22:29 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:22:29 --> Could not find the language line "number"
ERROR - 2021-07-29 21:22:29 --> Could not find the language line "number"
ERROR - 2021-07-29 21:22:29 --> Could not find the language line "number"
ERROR - 2021-07-29 21:22:29 --> Could not find the language line "number"
ERROR - 2021-07-29 21:22:29 --> Could not find the language line "year"
ERROR - 2021-07-29 21:22:39 --> Could not find the language line "method"
ERROR - 2021-07-29 21:22:39 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:22:39 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:22:39 --> Could not find the language line "number"
ERROR - 2021-07-29 21:22:39 --> Could not find the language line "number"
ERROR - 2021-07-29 21:22:39 --> Could not find the language line "number"
ERROR - 2021-07-29 21:22:39 --> Could not find the language line "number"
ERROR - 2021-07-29 21:22:39 --> Could not find the language line "year"
ERROR - 2021-07-29 21:23:58 --> Could not find the language line "method"
ERROR - 2021-07-29 21:23:58 --> Could not find the language line "method"
ERROR - 2021-07-29 21:23:58 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:23:58 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:23:58 --> Could not find the language line "number"
ERROR - 2021-07-29 21:23:58 --> Could not find the language line "number"
ERROR - 2021-07-29 21:23:58 --> Could not find the language line "number"
ERROR - 2021-07-29 21:23:58 --> Could not find the language line "number"
ERROR - 2021-07-29 21:23:58 --> Could not find the language line "year"
ERROR - 2021-07-29 21:24:27 --> Could not find the language line "method"
ERROR - 2021-07-29 21:24:27 --> Could not find the language line "method"
ERROR - 2021-07-29 21:24:27 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:24:27 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:24:27 --> Could not find the language line "number"
ERROR - 2021-07-29 21:24:27 --> Could not find the language line "number"
ERROR - 2021-07-29 21:24:27 --> Could not find the language line "number"
ERROR - 2021-07-29 21:24:27 --> Could not find the language line "number"
ERROR - 2021-07-29 21:24:27 --> Could not find the language line "year"
ERROR - 2021-07-29 21:25:12 --> Could not find the language line "method"
ERROR - 2021-07-29 21:25:12 --> Could not find the language line "method"
ERROR - 2021-07-29 21:25:12 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:25:12 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:25:12 --> Could not find the language line "number"
ERROR - 2021-07-29 21:25:12 --> Could not find the language line "number"
ERROR - 2021-07-29 21:25:12 --> Could not find the language line "number"
ERROR - 2021-07-29 21:25:12 --> Could not find the language line "number"
ERROR - 2021-07-29 21:25:12 --> Could not find the language line "year"
ERROR - 2021-07-29 21:25:30 --> Could not find the language line "method"
ERROR - 2021-07-29 21:26:32 --> Could not find the language line "method"
ERROR - 2021-07-29 21:28:05 --> Could not find the language line "method"
ERROR - 2021-07-29 21:28:05 --> Query error: Unknown column 'debit_ledger_id' in 'field list' - Invalid query: INSERT INTO `transactions` (`school_id`, `amount`, `invoice_id`, `payment_method`, `note`, `debit_ledger_id`, `status`, `academic_year_id`, `payment_date`, `created_at`, `created_by`) VALUES ('71', '13400.00', '15684', 'cash', '', '3330', 1, '82', '2021-07-29', '2021-07-29 21:28:05', '44689')
ERROR - 2021-07-29 21:28:05 --> Query error: Column 'amount' cannot be null - Invalid query: INSERT INTO `account_transaction_details` (`transaction_id`, `ledger_id`, `amount`, `created`) VALUES (13281, '3330', NULL, '2021-07-29 21:28:05')
ERROR - 2021-07-29 21:29:32 --> Could not find the language line "number"
ERROR - 2021-07-29 21:29:32 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 21:29:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 21:29:32 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:29:32 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:29:32 --> Could not find the language line "number"
ERROR - 2021-07-29 21:29:32 --> Could not find the language line "number"
ERROR - 2021-07-29 21:29:38 --> Could not find the language line "number"
ERROR - 2021-07-29 21:30:06 --> Could not find the language line "method"
ERROR - 2021-07-29 21:30:06 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:30:06 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:30:06 --> Could not find the language line "number"
ERROR - 2021-07-29 21:30:06 --> Could not find the language line "number"
ERROR - 2021-07-29 21:30:06 --> Could not find the language line "number"
ERROR - 2021-07-29 21:30:06 --> Could not find the language line "number"
ERROR - 2021-07-29 21:30:06 --> Could not find the language line "year"
ERROR - 2021-07-29 21:30:22 --> Could not find the language line "method"
ERROR - 2021-07-29 21:30:22 --> Query error: Unknown column 'debit_ledger_id' in 'field list' - Invalid query: INSERT INTO `transactions` (`school_id`, `amount`, `invoice_id`, `payment_method`, `note`, `debit_ledger_id`, `status`, `academic_year_id`, `payment_date`, `created_at`, `created_by`) VALUES ('71', '10600.00', '28173', 'cash', '', '3209', 1, '82', '2021-07-29', '2021-07-29 21:30:22', '44689')
ERROR - 2021-07-29 21:36:26 --> Could not find the language line "method"
ERROR - 2021-07-29 21:36:26 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:36:26 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:36:26 --> Could not find the language line "number"
ERROR - 2021-07-29 21:36:26 --> Could not find the language line "number"
ERROR - 2021-07-29 21:36:26 --> Could not find the language line "number"
ERROR - 2021-07-29 21:36:26 --> Could not find the language line "number"
ERROR - 2021-07-29 21:36:26 --> Could not find the language line "year"
ERROR - 2021-07-29 21:38:43 --> Could not find the language line "number"
ERROR - 2021-07-29 21:39:08 --> Could not find the language line "number"
ERROR - 2021-07-29 21:44:18 --> Could not find the language line "number"
ERROR - 2021-07-29 21:46:00 --> Could not find the language line "number"
ERROR - 2021-07-29 21:51:43 --> Query error: Unknown column 'b.modified_at' in 'order clause' - Invalid query: SELECT `I`.*, `SC`.`school_name`, `IH`.`title` AS `head`, `EF`.`emi_name`, `S`.`name` AS `student_name`, `S`.`father_name` AS `father_name`, `AY`.`session_year`, `C`.`name` AS `class_name`
FROM `invoices` AS `I`
LEFT JOIN `classes` AS `C` ON `C`.`id` = `I`.`class_id`
LEFT JOIN `students` AS `S` ON `S`.`id` = `I`.`student_id`
LEFT JOIN `income_heads` AS `IH` ON `IH`.`id` = `I`.`income_head_id`
LEFT JOIN `emi_fee` AS `EF` ON `IH`.`id` = `EF`.`income_heads_id` and `I`.`emi_type`=`EF`.`id`
LEFT JOIN `academic_years` AS `AY` ON `AY`.`id` = `I`.`academic_year_id`
LEFT JOIN `schools` AS `SC` ON `SC`.`id` = `I`.`school_id`
WHERE `I`.`invoice_type` != 'income'
AND `I`.`school_id` = '71'
ORDER BY `b`.`modified_at`, `I`.`id` DESC
ERROR - 2021-07-29 21:51:43 --> Severity: error --> Exception: Call to a member function result() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\models\Invoice_Model.php 115
ERROR - 2021-07-29 21:51:44 --> Query error: Unknown column 'b.modified_at' in 'order clause' - Invalid query: SELECT `I`.*, `SC`.`school_name`, `IH`.`title` AS `head`, `EF`.`emi_name`, `S`.`name` AS `student_name`, `S`.`father_name` AS `father_name`, `AY`.`session_year`, `C`.`name` AS `class_name`
FROM `invoices` AS `I`
LEFT JOIN `classes` AS `C` ON `C`.`id` = `I`.`class_id`
LEFT JOIN `students` AS `S` ON `S`.`id` = `I`.`student_id`
LEFT JOIN `income_heads` AS `IH` ON `IH`.`id` = `I`.`income_head_id`
LEFT JOIN `emi_fee` AS `EF` ON `IH`.`id` = `EF`.`income_heads_id` and `I`.`emi_type`=`EF`.`id`
LEFT JOIN `academic_years` AS `AY` ON `AY`.`id` = `I`.`academic_year_id`
LEFT JOIN `schools` AS `SC` ON `SC`.`id` = `I`.`school_id`
WHERE `I`.`invoice_type` != 'income'
AND `I`.`school_id` = '71'
ORDER BY `b`.`modified_at`, `I`.`id` DESC
ERROR - 2021-07-29 21:51:44 --> Severity: error --> Exception: Call to a member function result() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\models\Invoice_Model.php 115
ERROR - 2021-07-29 21:51:45 --> Query error: Unknown column 'b.modified_at' in 'order clause' - Invalid query: SELECT `I`.*, `SC`.`school_name`, `IH`.`title` AS `head`, `EF`.`emi_name`, `S`.`name` AS `student_name`, `S`.`father_name` AS `father_name`, `AY`.`session_year`, `C`.`name` AS `class_name`
FROM `invoices` AS `I`
LEFT JOIN `classes` AS `C` ON `C`.`id` = `I`.`class_id`
LEFT JOIN `students` AS `S` ON `S`.`id` = `I`.`student_id`
LEFT JOIN `income_heads` AS `IH` ON `IH`.`id` = `I`.`income_head_id`
LEFT JOIN `emi_fee` AS `EF` ON `IH`.`id` = `EF`.`income_heads_id` and `I`.`emi_type`=`EF`.`id`
LEFT JOIN `academic_years` AS `AY` ON `AY`.`id` = `I`.`academic_year_id`
LEFT JOIN `schools` AS `SC` ON `SC`.`id` = `I`.`school_id`
WHERE `I`.`invoice_type` != 'income'
AND `I`.`school_id` = '71'
ORDER BY `b`.`modified_at`, `I`.`id` DESC
ERROR - 2021-07-29 21:51:45 --> Severity: error --> Exception: Call to a member function result() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\models\Invoice_Model.php 115
ERROR - 2021-07-29 21:51:46 --> Query error: Unknown column 'b.modified_at' in 'order clause' - Invalid query: SELECT `I`.*, `SC`.`school_name`, `IH`.`title` AS `head`, `EF`.`emi_name`, `S`.`name` AS `student_name`, `S`.`father_name` AS `father_name`, `AY`.`session_year`, `C`.`name` AS `class_name`
FROM `invoices` AS `I`
LEFT JOIN `classes` AS `C` ON `C`.`id` = `I`.`class_id`
LEFT JOIN `students` AS `S` ON `S`.`id` = `I`.`student_id`
LEFT JOIN `income_heads` AS `IH` ON `IH`.`id` = `I`.`income_head_id`
LEFT JOIN `emi_fee` AS `EF` ON `IH`.`id` = `EF`.`income_heads_id` and `I`.`emi_type`=`EF`.`id`
LEFT JOIN `academic_years` AS `AY` ON `AY`.`id` = `I`.`academic_year_id`
LEFT JOIN `schools` AS `SC` ON `SC`.`id` = `I`.`school_id`
WHERE `I`.`invoice_type` != 'income'
AND `I`.`school_id` = '71'
ORDER BY `b`.`modified_at`, `I`.`id` DESC
ERROR - 2021-07-29 21:51:46 --> Severity: error --> Exception: Call to a member function result() on bool C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\models\Invoice_Model.php 115
ERROR - 2021-07-29 21:51:59 --> Could not find the language line "number"
ERROR - 2021-07-29 21:52:10 --> Could not find the language line "number"
ERROR - 2021-07-29 21:52:19 --> Could not find the language line "method"
ERROR - 2021-07-29 21:52:19 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:52:19 --> Could not find the language line "bank"
ERROR - 2021-07-29 21:52:19 --> Could not find the language line "number"
ERROR - 2021-07-29 21:52:19 --> Could not find the language line "number"
ERROR - 2021-07-29 21:52:19 --> Could not find the language line "number"
ERROR - 2021-07-29 21:52:19 --> Could not find the language line "number"
ERROR - 2021-07-29 21:52:19 --> Could not find the language line "year"
ERROR - 2021-07-29 16:25:06 --> 404 Page Not Found: /index
ERROR - 2021-07-29 21:56:32 --> Could not find the language line "number"
ERROR - 2021-07-29 16:27:10 --> 404 Page Not Found: /index
ERROR - 2021-07-29 16:27:38 --> 404 Page Not Found: /index
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:45 --> Could not find the language line "visit"
ERROR - 2021-07-29 16:27:47 --> 404 Page Not Found: /index
ERROR - 2021-07-29 16:27:49 --> 404 Page Not Found: /index
ERROR - 2021-07-29 16:28:50 --> 404 Page Not Found: /index
ERROR - 2021-07-29 22:00:01 --> Could not find the language line "number"
ERROR - 2021-07-29 22:00:01 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 22:00:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 22:00:01 --> Could not find the language line "bank"
ERROR - 2021-07-29 22:00:01 --> Could not find the language line "bank"
ERROR - 2021-07-29 22:00:02 --> Could not find the language line "number"
ERROR - 2021-07-29 22:00:02 --> Could not find the language line "number"
ERROR - 2021-07-29 22:00:07 --> Could not find the language line "number"
ERROR - 2021-07-29 22:03:12 --> Could not find the language line "allowance"
ERROR - 2021-07-29 22:03:12 --> Could not find the language line "deduction"
ERROR - 2021-07-29 22:05:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 309
ERROR - 2021-07-29 22:05:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 322
ERROR - 2021-07-29 22:05:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 362
ERROR - 2021-07-29 22:05:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\student\views\index.php 514
ERROR - 2021-07-29 16:35:56 --> 404 Page Not Found: /index
ERROR - 2021-07-29 16:35:56 --> 404 Page Not Found: /index
ERROR - 2021-07-29 16:35:56 --> 404 Page Not Found: /index
ERROR - 2021-07-29 22:08:38 --> Could not find the language line "number"
ERROR - 2021-07-29 22:08:57 --> Could not find the language line "number"
ERROR - 2021-07-29 22:09:07 --> Could not find the language line "number"
ERROR - 2021-07-29 22:09:07 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 22:09:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 22:09:07 --> Could not find the language line "bank"
ERROR - 2021-07-29 22:09:07 --> Could not find the language line "bank"
ERROR - 2021-07-29 22:09:07 --> Could not find the language line "number"
ERROR - 2021-07-29 22:09:07 --> Could not find the language line "number"
ERROR - 2021-07-29 22:09:15 --> Could not find the language line "number"
ERROR - 2021-07-29 22:12:25 --> Could not find the language line "method"
ERROR - 2021-07-29 22:12:25 --> Could not find the language line "bank"
ERROR - 2021-07-29 22:12:25 --> Could not find the language line "bank"
ERROR - 2021-07-29 22:12:25 --> Could not find the language line "number"
ERROR - 2021-07-29 22:12:25 --> Could not find the language line "number"
ERROR - 2021-07-29 22:12:25 --> Could not find the language line "number"
ERROR - 2021-07-29 22:12:25 --> Could not find the language line "number"
ERROR - 2021-07-29 22:12:25 --> Could not find the language line "year"
ERROR - 2021-07-29 22:12:44 --> Could not find the language line "method"
ERROR - 2021-07-29 22:12:44 --> Query error: Unknown column 'debit_ledger_id' in 'field list' - Invalid query: INSERT INTO `transactions` (`school_id`, `amount`, `invoice_id`, `payment_method`, `note`, `debit_ledger_id`, `status`, `academic_year_id`, `payment_date`, `created_at`, `modified_at`, `created_by`) VALUES ('71', '10600.00', '28175', 'cash', '', '3209', 1, '82', '2021-07-29', '2021-07-29 22:12:44', '2021-07-29 22:12:44', '44689')
ERROR - 2021-07-29 22:12:55 --> Could not find the language line "number"
ERROR - 2021-07-29 22:16:04 --> Could not find the language line "number"
ERROR - 2021-07-29 22:16:23 --> Could not find the language line "number"
ERROR - 2021-07-29 22:18:21 --> Could not find the language line "number"
ERROR - 2021-07-29 22:18:54 --> Severity: Warning --> include_once(C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\models\Invoice_Model.php): failed to open stream: Resource temporarily unavailable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\third_party\MX\Modules.php 157
ERROR - 2021-07-29 22:18:54 --> Severity: Warning --> include_once(): Failed opening 'C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\models\Invoice_Model.php' for inclusion (include_path='.;.\includes;.\pear') C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\third_party\MX\Modules.php 157
ERROR - 2021-07-29 22:18:54 --> Severity: error --> Exception: Class 'Invoice_model' not found C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\third_party\MX\Loader.php 228
ERROR - 2021-07-29 22:18:57 --> Could not find the language line "number"
ERROR - 2021-07-29 22:19:27 --> Could not find the language line "number"
ERROR - 2021-07-29 22:19:49 --> Could not find the language line "number"
ERROR - 2021-07-29 22:21:12 --> Could not find the language line "number"
ERROR - 2021-07-29 22:21:17 --> Could not find the language line "number"
ERROR - 2021-07-29 22:22:02 --> Could not find the language line "number"
ERROR - 2021-07-29 22:23:00 --> Could not find the language line "number"
ERROR - 2021-07-29 22:23:05 --> Could not find the language line "number"
ERROR - 2021-07-29 22:29:53 --> Could not find the language line "due"
ERROR - 2021-07-29 22:29:53 --> Could not find the language line "due"
ERROR - 2021-07-29 22:30:32 --> Could not find the language line "due"
ERROR - 2021-07-29 22:30:32 --> Could not find the language line "due"
ERROR - 2021-07-29 23:18:10 --> Severity: error --> Exception: Call to undefined function get_paid_fee_amount_year() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Invoice.php 137
ERROR - 2021-07-29 23:18:13 --> Severity: error --> Exception: Call to undefined function get_paid_fee_amount_year() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Invoice.php 137
ERROR - 2021-07-29 23:18:44 --> Severity: Notice --> Undefined property: stdClass::$enable_rtl C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\core\MY_Controller.php 91
ERROR - 2021-07-29 23:18:44 --> Severity: error --> Exception: Call to undefined function get_paid_fee_amount_year() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Invoice.php 140
ERROR - 2021-07-29 17:49:53 --> Severity: Warning --> require_once(C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Invoice.php): failed to open stream: Resource temporarily unavailable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\system\core\CodeIgniter.php 412
ERROR - 2021-07-29 17:49:53 --> Severity: Compile Error --> require_once(): Failed opening required 'C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\controllers\Invoice.php' (include_path='.;.\includes;.\pear') C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\system\core\CodeIgniter.php 412
ERROR - 2021-07-29 23:23:07 --> Could not find the language line "number"
ERROR - 2021-07-29 23:24:48 --> Could not find the language line "method"
ERROR - 2021-07-29 23:24:48 --> Could not find the language line "bank"
ERROR - 2021-07-29 23:24:48 --> Could not find the language line "bank"
ERROR - 2021-07-29 23:24:48 --> Could not find the language line "number"
ERROR - 2021-07-29 23:24:48 --> Could not find the language line "number"
ERROR - 2021-07-29 23:24:48 --> Could not find the language line "number"
ERROR - 2021-07-29 23:24:48 --> Could not find the language line "number"
ERROR - 2021-07-29 23:24:48 --> Could not find the language line "year"
ERROR - 2021-07-29 23:24:58 --> Could not find the language line "method"
ERROR - 2021-07-29 23:24:58 --> Query error: Unknown column 'debit_ledger_id' in 'field list' - Invalid query: INSERT INTO `transactions` (`school_id`, `amount`, `invoice_id`, `payment_method`, `note`, `debit_ledger_id`, `status`, `academic_year_id`, `payment_date`, `created_at`, `modified_at`, `created_by`) VALUES ('71', '10600.00', '28169', 'cash', '', '3209', 1, '82', '2021-07-29', '2021-07-29 23:24:58', '2021-07-29 23:24:58', '44689')
ERROR - 2021-07-29 23:25:11 --> Could not find the language line "number"
ERROR - 2021-07-29 23:25:11 --> Could not find the language line "show_discount"
ERROR - 2021-07-29 23:25:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\index.php 300
ERROR - 2021-07-29 23:25:11 --> Could not find the language line "bank"
ERROR - 2021-07-29 23:25:11 --> Could not find the language line "bank"
ERROR - 2021-07-29 23:25:11 --> Could not find the language line "number"
ERROR - 2021-07-29 23:25:11 --> Could not find the language line "number"
ERROR - 2021-07-29 23:31:49 --> Could not find the language line "number"
ERROR - 2021-07-29 18:04:32 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:04:32 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:04:32 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:04:32 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:04:32 --> 404 Page Not Found: /index
ERROR - 2021-07-29 23:34:36 --> Severity: Warning --> include(C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules\accounting\views\invoice\view.php): failed to open stream: Resource temporarily unavailable C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\third_party\MX\Loader.php 358
ERROR - 2021-07-29 23:34:36 --> Severity: Warning --> include(): Failed opening 'C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\modules/accounting/views/invoice/view.php' for inclusion (include_path='.;.\includes;.\pear') C:\Inetpub\vhosts\vivaindia.com\school.vivaindia.com\application\third_party\MX\Loader.php 358
ERROR - 2021-07-29 23:36:26 --> Could not find the language line "number"
ERROR - 2021-07-29 18:30:34 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:30:34 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:30:35 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:35:54 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:40:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:40:13 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:40:14 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:47:17 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:47:17 --> 404 Page Not Found: /index
ERROR - 2021-07-29 18:47:17 --> 404 Page Not Found: /index
ERROR - 2021-07-29 20:52:02 --> Could not find the language line "now"
ERROR - 2021-07-29 20:52:02 --> Could not find the language line "now"
ERROR - 2021-07-29 20:52:02 --> Could not find the language line "now"
ERROR - 2021-07-29 20:52:02 --> Could not find the language line "now"
ERROR - 2021-07-29 20:52:02 --> Could not find the language line "apply"
ERROR - 2021-07-29 20:52:02 --> Could not find the language line "now"
ERROR - 2021-07-29 20:53:20 --> Could not find the language line "now"
ERROR - 2021-07-29 20:53:20 --> Could not find the language line "now"
ERROR - 2021-07-29 20:53:20 --> Could not find the language line "now"
ERROR - 2021-07-29 20:53:20 --> Could not find the language line "now"
ERROR - 2021-07-29 20:53:20 --> Could not find the language line "apply"
ERROR - 2021-07-29 20:53:20 --> Could not find the language line "now"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:25 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:29 --> 404 Page Not Found: /index
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:39 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:55:46 --> Could not find the language line "now"
ERROR - 2021-07-29 20:55:46 --> Could not find the language line "now"
ERROR - 2021-07-29 20:55:46 --> Could not find the language line "now"
ERROR - 2021-07-29 20:55:46 --> Could not find the language line "now"
ERROR - 2021-07-29 20:55:46 --> Could not find the language line "apply"
ERROR - 2021-07-29 20:55:46 --> Could not find the language line "now"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:40 --> Could not find the language line "visit"
ERROR - 2021-07-29 20:58:45 --> 404 Page Not Found: /index
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:26 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:00:29 --> 404 Page Not Found: /index
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
ERROR - 2021-07-29 21:05:57 --> Could not find the language line "visit"
