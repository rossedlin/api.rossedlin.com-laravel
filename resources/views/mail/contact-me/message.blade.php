<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 13/02/2018
 * Time: 15:49
 *
 * @var string $title
 * @var string $name
 * @var string $email
 * @var string $content
 */
?>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
<div>
    <p>Contact Name: <?= $name ?></p>
    <p>Contact Email: <?= $email ?></p>
    <p><?= $content ?></p>
</div>
</body>
</html>