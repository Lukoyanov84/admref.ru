<?php
	
    $this->setPageTitle(LANG_DOCUMENTS_REGLAMENTS);
    $this->addBreadcrumb(LANG_DOCUMENTS_CONTROLLER);
	
    $this->addToolButton(array(
        'class' => 'add',
        'title' => LANG_DOCUMENTS_ADD_REGLAMENT,
        'href' => $this->href_to('add_reglament')
    ));

?>

<h1><?php echo LANG_DOCUMENTS_REGLAMENTS; ?></h1>

<?php if (!$reglaments) { ?>
	<p><?php echo LANG_DOCUMENTS_REGLAMENTS_NONE; ?></p>
	<?php return; ?>
<?php } ?>

<div id="documents-reglaments-list">
    <?php foreach($reglaments as $reglament) { ?>
        <div class="documents-reglament item">
			<div class=""><?php echo $reglament['']; ?></div>
        </div>
    <?php } ?>
</div>
	
<?php if($total > $perpage) { ?>
    <?php echo html_pagebar($page, $perpage, $total); ?>	
<?php } ?>
