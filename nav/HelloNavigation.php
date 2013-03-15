<?php
/**
 * Bicubic PHP Framework
 *
 * @author     Juan Rodríguez-Covili <juan@bicubic.cl>
 * @copyright  2011 Bicubic Technology - http://www.bicubic.cl
 * @license    MIT
 * @framework  2.2
 */
class HelloNavigation extends Navigation{
    
    function __construct(Application $application) {
        parent::__construct($application);
    }
    
    
  
    public function hello(){
        $this->application->setMainTemplate("hello", "hello", $this->lang('text_helloworld'));
        $this->application->setHtmlVariableTemplate("HELLO", $this->lang('text_helloworld'));
        $this->application->render();
    }
    
    public function helloJson(){
        $json = new ObjectJson();
        $json->myhello = $this->lang('text_helloworld');
        $this->application->renderToJson($json);
    }
    
    public function helloPrivate(){
        $this->application->setMainTemplate("hello", "helloprivate", "", "json");
        $this->application->setHtmlVariableTemplate("USER", $this->application->user->getName());
        $this->application->setHtmlVariableTemplate("HELLO", $this->lang('text_helloworld'));
        $this->application->render();
    }
    
    
}

?>
