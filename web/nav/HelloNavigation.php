<?php

/*
 * The MIT License
 *
 * Copyright 2015 Juan Francisco Rodríguez.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
require_once("nav/AccountNavigation.php");

class HelloNavigation extends AccountNavigation {

    function __construct(Application $application) {
	parent::__construct($application);
    }

    public function hello() {
	$this->checkSignedInUser("private", "home");
	$this->application->setMainTemplate("hello", "hello");
	$this->application->setVariableTemplate("SIGNUP-FORM", $this->makeSignUpForm());
	$this->application->render();
    }

    public function helloJson() {
	$json = new ObjectJson();
	$json->myhello = $this->lang('text_helloworld');
	$this->application->renderToJson($json);
    }

    public function helloPrivate() {
	$this->application->setMainTemplate("hello", "helloprivate");
	$this->application->setHtmlVariableTemplate("USER", $this->application->user->getName());
	$this->application->render();
    }

}
