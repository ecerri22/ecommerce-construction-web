<?php

use Pages\ChangeContentsView;

$changeContentsView = new ChangeContentsView("Change Contents");
$changeContentsView->render($homepagecontents, $aboutuscontents, $footercontents);

