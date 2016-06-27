<?php

class actionDocumentsReglaments extends cmsAction {

    public function run(){

        $grid = $this->loadDataGrid('reglaments');

        return cmsTemplate::getInstance()->render('backend/reglaments', array(
            'grid' => $grid
        ));

    }

}
