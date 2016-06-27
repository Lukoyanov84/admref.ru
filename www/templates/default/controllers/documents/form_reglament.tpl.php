<?php

    $this->addBreadcrumb(LANG_DOCUMENTS_CONTROLLER, $this->href_to(''));

    if ($do == 'add') { 
        $page_title = LANG_DOCUMENTS_ADD_REGLAMENT; 
    }

    if ($do == 'edit') { 
        $page_title = LANG_DOCUMENTS_EDIT_REGLAMENT; 
        $this->addBreadcrumb($reglament['title'], $this->href_to('reglament', $reglament['id']));
    }

    $this->setPageTitle($page_title);

    $this->addBreadcrumb($page_title);

?>

<h1><?php echo $page_title; ?></h1> 

<?php
    $this->renderForm($form, $reglament, array(
            'action' => '',
            'method' => 'post',
            'toolbar' => false
    ), $errors);
