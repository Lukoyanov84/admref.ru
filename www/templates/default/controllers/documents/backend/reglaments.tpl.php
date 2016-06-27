<?php

    $this->addBreadcrumb(LANG_DOCUMENTS_REGLAMENTS);

    $this->addToolButton(array(
        'class' => 'add',
        'title' => LANG_DOCUMENTS_ADD_REGLAMENT,
        'href'  => $this->href_to('add_reglament')
    ));

    $this->addToolButton(array(
        'class' => 'save',
        'title' => LANG_SAVE,
        'href'  => null,
        'onclick' => "icms.datagrid.submit('{$this->href_to('reglaments_reorder')}')"
    ));

?>

<?php $this->renderGrid($this->href_to('reglaments_ajax'), $grid); ?>

<div class="buttons">
    <?php echo html_button(LANG_SAVE_ORDER, 'save_button', "icms.datagrid.submit('{$this->href_to('reglaments_reorder')}')"); ?>
</div>
