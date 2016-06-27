<?php

class actionDocumentsReglaments extends cmsAction {
	
    public function run(){

        $page = $this->request->get('page', 1);		
        $perpage = 15;

        $template = cmsTemplate::getInstance();

        $total = $this->model->getReglamentsCount();

        $this->model->limitPage($page, $perpage);

        $this->model->orderBy('id', 'desc');

        $reglaments = $this->model->getReglaments();

        return $template->render('reglaments', array(
            'reglaments' => $reglaments,
            'total' => $total,
            'page' => $page,
            'perpage' => $perpage
        ));

    }
	
}