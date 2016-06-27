<?php

class actionDocumentsDeleteReglament extends cmsAction {
	
    public function run($id=false){

        if (!$id) { cmsCore::error404(); }

        $model = cmsCore::getModel($this->name);

        $reglament = $model->getReglament($id);

        if (!$reglament) { cmsCore::error404(); }

        $model->deleteReglament($id);

        $this->redirectToAction('reglaments');

    }

}