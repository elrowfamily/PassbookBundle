<?php

/*
 * This file is part of the Passbookbundle package.
 *
 * (c) Eymen Gunay <eymen@egunay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$loader = require_once __DIR__ . "/../vendor/autoload.php";
$loader->add('Eo\\PassbookBundle\\', './');

function registerContainerConfiguration($loader) {
	$loader->load(__DIR__ . "/config.yml");
}

function registerBundles() {
	return array(
		new Eo\PassbookBundle\EoPassbookBundle(),
	);
}