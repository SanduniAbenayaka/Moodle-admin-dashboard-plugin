<?php
$settings->add(new admin_setting_heading(
    'headerconfig',
    get_string('headerconfig','block_admincourseview'),
    get_string('descconfig','block_admincourseview')
));

$settings->add(new admin_setting_configcheckbox(
    'myblock/Allow_HTML',
    get_string('labelallowhtml','block_admincourseview'),
    get_string('descallowhtml','block_admincourseview'),
    '0'
));
