<?php defined( '_JEXEC' ) or die( 'Restricted access' );

class ModXMPPLiveChatHelper {

	function __construct(&$params,&$module) {

		$this->params =& $params;
		$this->module =& $module;
	}

	public function display() {
		
		require JModuleHelper::getLayoutPath('mod_xmpplivechat',$this->params->get('layout', 'default'));
	}
}
