<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Notes section";

$notes = $db->query('select * from notes where user_id = 2')->get();


require "views/notes.view.php";
