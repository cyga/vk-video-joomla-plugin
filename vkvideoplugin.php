<?php

// Assert file included in Joomla!
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

/**
* VK video Content Plugin
*
*/
class plgContentVKvideoPlugin extends JPlugin {
	/**
	* Ctor
	*
	* @param object $subject The object to observe
	* @param object $params The object that holds the plugin parameters
	*/
	function PluginVKvideo( &$subject, $params ) {
		parent::__construct( $subject, $params );
	}

	/**
	* Example prepare content method
	*
	* Method is called by the view
	*
	* @param object The article object. Note $article->text is also available
	* @param object The article params
	* @param int The 'page' number
	*/
	function onContentPrepare( $context, &$article, &$params, $page = 0) {
		global $mainframe;

		if ( JString::strpos( $article->text, '{vkvideo}' ) === false ) {
		    return true;
		}

		$article->text = preg_replace('|{vkvideo}(.*?){\/vkvideo}|e', '$this->embedVideo("\1")', $article->text);

		return true;
	}

	function embedVideo($vCode) {
	 	$params = $this->params;

		return '<iframe '.$vCode.'></iframe>';
	}
}
