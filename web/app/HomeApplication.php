<?php

/**
 * Bicubic PHP Framework
 *
 * @author     Juan Rodríguez-Covili <juan@bicubic.cl>
 * @copyright  2011-2014 Bicubic Technology - http://www.bicubic.cl
 * @license    MIT
 * @version 3.0.0
 */
class HomeApplication extends Application {

    function __construct($config, $lang, Data $data = null, $name = "home") {
        if (!$data) {
            $data = new PostgreSQLData($config);
        }
        parent::__construct($config, $lang, $data, $name);
    }

    public function execute() {
        parent::execute();
        $this->navigation = $this->getUrlParam($this->config('param_navigation'), PropertyTypes::$_LETTERS, false);
        switch ($this->navigation) {
            case "hello" : {
                    require_once('nav/HelloNavigation.php');
                    $navigation = new HelloNavigation($this);
                    $navigation->hello();
                    break;
                }
            default : {
                    $this->redirect("home", "hello");
                    break;
                }
        }
    }

    public function setMainTemplate($navigationFolder, $navigationFile, $title = "") {
        parent::setMainTemplate($navigationFolder, $navigationFile, $title);
        $this->setHTMLVariableTemplate('LINK-LOGIN', $this->getAppUrl("login", "login"));
    }

}

?>