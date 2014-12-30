<?php

require_once dirname(__FILE__) . '/plugins/sqlite-integration/db.php';

if (empty($wpdb)) {
    global $wpdb;
    $wpdb = new PDODB();
}
