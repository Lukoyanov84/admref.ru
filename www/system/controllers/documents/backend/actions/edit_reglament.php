<?php

class actionDocumentsEditReglament extends cmsAction {
	
    public function run($id=false){

        if (!$id) { cmsCore::error404(); }

        $model = cmsCore::getModel($this->name);

        $reglament = $this->model->getReglament($id);

        if (!$reglament) { cmsCore::error404(); }

        $errors = false;

        $form = $this->getForm('reglament');

        $is_submitted = $this->request->has('submit');				

        if ($is_submitted){

            $reglament = $form->parse($this->request, $is_submitted);

            $errors = $form->validate($this, $reglament);

            if (!$errors){
                $model->updateReglament($id, $reglament);
                $this->redirectToAction('reglaments');
            }

            if ($errors){
                cmsUser::addSessionMessage(LANG_FORM_ERRORS, 'error');
            }

        }

        $template = cmsTemplate::getInstance();

        return $template->render('backend/form_reglament', array(
            'do' => 'edit',
            'form' => $form,
            'errors' => $errors,
            'reglament' => $reglament
        ));

    }
	
}