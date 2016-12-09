<?php
/**
 *
 * jxtools. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, Javier Lopez (javiexin), http://www.exincastillos.es/jxmods
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace javiexin\jxtools\migrations;

class start_config_version extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('jxtools_version', '1.0.0')),
		);
	}
}
