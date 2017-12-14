<?php
include_once("./Services/UIComponent/classes/class.ilUserInterfaceHookPlugin.php");

class ilHideVideoContextPlugin extends ilUserInterfaceHookPlugin
{
	function getPluginName()
	{
		return "HideVideoContext";
	}
}
?>
