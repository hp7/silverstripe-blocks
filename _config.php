<?php

use SilverStripe\Core\Config\Config;

//define global path to Components' root folder
if (!defined('BLOCKS_DIR')) {
    define('BLOCKS_DIR', rtrim(basename(dirname(__FILE__))));
}

Config::modify()->update('LeftAndMain', 'extra_requirements_javascript', array(BLOCKS_DIR.'/javascript/blocks-cms.js'));
Config::modify()->update('BlockAdmin', 'menu_icon', BLOCKS_DIR.'/images/blocks.png');
