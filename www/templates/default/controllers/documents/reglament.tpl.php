<?php

    $this->setPageTitle($reglament['title']);
	
    $this->addBreadcrumb(LANG_DOCUMENTS_CONTROLLER, $this->href_to(''));
    $this->addBreadcrumb(LANG_DOCUMENTS_REGLAMENTS, $this->href_to('reglaments'));
    $this->addBreadcrumb($reglament['title']);

    $this->addToolButton(array(
        'class' => 'edit',
        'title' => LANG_DOCUMENTS_EDIT_REGLAMENT,
        'href' => $this->href_to('edit_reglament', $reglament['id'])
    ));

    $this->addToolButton(array(
        'class' => 'delete',
        'title' => LANG_DOCUMENTS_DELETE_REGLAMENT,
        'href' => $this->href_to('delete_reglament', $reglament['id'])
    ));

?>

<h1><?php html($reglament['title']); ?></h1>

<div id="documents-reglament">
	<div class=""><?php echo $reglament['']; ?></div>
</div>
