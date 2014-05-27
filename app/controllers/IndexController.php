<?php

use Phalcon\Forms\Element;

class IndexController extends ControllerBase {

    public function indexAction() {

        $form = new \Phalcon\Forms\Form();

        $group1 = new Element\Radio('r1', array(
            'name' => 'group[]',
            'value' => 1
        ));
        $form->add($group1);

        $group2 = new Element\Radio('r2', array(
            'name' => 'group[]',
            'value' => 2
        ));
        $form->add($group2);

        $save = new Element\Submit('save');
        $form->add($save);

        $this->view->form = $form;

        if (!$this->request->isPost() || !$form->isValid($this->request->getPost())) {
            return;
        }
    }

}
