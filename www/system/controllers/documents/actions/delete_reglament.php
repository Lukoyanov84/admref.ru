<?php

class actionDocumentsDeleteReglament extends cmsAction {
	
    public function run($id=false){

        if (!$id) { cmsCore::error404(); }

        $reglament = $this->model->getReglament($id);

        if (!$reglament) { cmsCore::error404(); }

        $user = cmsUser::getInstance();

        $is_can_delete = true;

        if (!$is_can_delete) { cmsCore::error404(); }

        $this->model->deleteReglament($id);

        $this->redirectToAction('reglaments');

    }

}