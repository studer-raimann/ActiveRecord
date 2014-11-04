<?php
require_once('./Customizing/global/plugins/Libraries/ActiveRecord/Views/Index/class.arIndexTableAction.php');
/**
 * GUI-Class arIndexTableActions
 *
 * @author  Timon Amstutz <timon.amstutz@ilub.unibe.ch>
 * @version 2.0.6
 *
 */
class arIndexTableActions
{
    /**
     * @var arIndexTableAction[]
     */
    protected $actions = array();

    /**
     * @param arIndexTableAction
     */
    public function addAction(arIndexTableAction $action)
    {
        $this->actions[$action->getId()] = $action;
    }

    /**
     * @return arIndexTableAction[]
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param arIndexTableGUI $translator
     * @return array
     */
    public function getActionsAsKeyTextArray(arIndexTableGUI $translator)
    {
        $actions = array();
        foreach($this->getActions() as $action){
            /**
             * arIndexTableAction $action
             */
            return array($action->getId()=>$translator->txt($action->getTitle()));
        }
        return $actions;
    }

    /**
     * @param $action_id
     * @return arIndexTableAction
     */
    public function getAction($action_id)
    {
        if(array_key_exists($action_id,$this->actions)){
            return $this->actions[$action_id];
        }
        return false;
    }

    /**
     * @return bool
     */
    public function hasActions(){
        return !empty($this->actions);
    }
}