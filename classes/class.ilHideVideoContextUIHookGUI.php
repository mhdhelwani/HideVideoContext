<?php
include_once("./Services/UIComponent/classes/class.ilUIHookPluginGUI.php");
include_once('class.ilHideVideoContextPlugin.php');

class ilHideVideoContextUIHookGUI extends ilUIHookPluginGUI
{
    /**
     * Get html for a user interface area
     *
     * @param
     * @param
     * @param array
     * @return array
     */
    function getHTML($a_comp, $a_part, $a_par = array())
    {
        if (!in_array($a_part, array("template_add", "template_load", "template_show", "template_get"))) {
            global $tpl;
            $pl = $this->getPluginObject();
            if ($tpl) {
                if (is_array($tpl->on_load_code)) {
                    if (!in_array("$('#hidevideocontext').hidevideocontextfn();", $tpl->on_load_code[2])) {
                        $tpl->addJavascript($pl->getDirectory() . "/js/hidevideocontext.js");
                        $tpl->addOnLoadCode("$('#hidevideocontext').hidevideocontextfn();");
                    }
                }
            }
        }
        return array("mode" => ilUIHookPluginGUI::APPEND, "html" => "");
    }
}

?>
