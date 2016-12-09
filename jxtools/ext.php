<?php
/**
 *
 * jxtools. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, Javier Lopez (javiexin), http://www.exincastillos.es/jxmods
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace javiexin\jxtools;

/**
 * jxtools Extension base
 */
class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return phpbb_version_compare($config['version'], '3.1.4', '>=');
	}
}
