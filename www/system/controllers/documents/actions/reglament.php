<?php

class actionDocumentsReglament extends cmsAction {
	
    public function run($id = false){

        if (!$id) { cmsCore::error404(); }

        $reglament = $this->model->getReglament($id);

        if (!$reglament) { cmsCore::error404(); }

        $user = cmsUser::getInstance();

        $template = cmsTemplate::getInstance();

        return $template->render('reglament', array(
            'reglament' => $reglament,
        ));

    }
	
}