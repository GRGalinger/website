<?php

require_once('includes/page.class.php');

$page = new Page();

$page->openHeader();

$page->route();

$page->closeHeader();