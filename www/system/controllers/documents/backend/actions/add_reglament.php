<?php

class actionDocumentsAddReglament extends cmsAction {
	
    public function run(){

        $errors = false;

        $model = cmsCore::getModel($this->name);

        $form = $this->getForm('reglament');

        $is_submitted = $this->request->has('submit');

        $reglament = $form->parse($this->request, $is_submitted);

        if ($is_submitted){

            $errors = $form->validate($this, $reglament);

            if (!$errors){
                $reglament_id = $model->addReglament($reglament);
                $this->redirectToAction('reglaments');
            }

            if ($errors){
                cmsUser::addSessionMessage(LANG_FORM_ERRORS, 'error');
            }

        }

        $template = cmsTemplate::getInstance();

        return $template->render('backend/form_reglament', array(
            'do' => 'add',
            'form' => $form,
            'errors' => $errors,
            'reglament' => $reglament
        ));

    }
	
}