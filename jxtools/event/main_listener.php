<?php
/**
 *
 * jxtools. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, Javier Lopez (javiexin), http://www.exincastillos.es/jxmods
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace javiexin\jxtools\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * jxtools Event listener.
 */
class main_listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/**
		* Constructor
		*
		* @param \phpbb\template\template			$template			Template object
		*
		* @access public
	*/
	public function __construct(
		\phpbb\template\template $template)
	{
		$this->template	=	$template;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header_after'	=>	'jxtools_template_switch',
		);
	}

	/**
	 * Assign the over-all template switch to be true already.
	 * Todo: add an ACP side where to set it on/off?
	 *
	 * We are done, jxtools are now available for any extension.
	 */
	public function jxtools_template_switch($event)
	{
		$this->template->assign_vars(array(
			'S_JXTOOLS'	=>	true,
		));
	}
}
