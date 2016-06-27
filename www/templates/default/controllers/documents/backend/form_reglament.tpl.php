<?php

    $this->addBreadcrumb(LANG_DOCUMENTS_REGLAMENTS, $this->href_to('reglaments'));

    if ($do == 'add') { 
        $page_title = LANG_DOCUMENTS_ADD_REGLAMENT; 
    }

    if ($do == 'edit') { 
        $page_title = LANG_DOCUMENTS_EDIT_REGLAMENT; 
    }

    $this->setPageTitle($page_title);
    $this->addBreadcrumb($page_title);

    $this->renderForm($form, $reglament, array(
            'action' => '',
            'method' => 'post',
            'toolbar' => false
    ), $errors);
