<?php

class backendDocuments extends cmsBackend {
   
    public $useDefaultOptionsAction = true;

    public function actionIndex(){
        $this->redirectToAction('options');
    }

    public function getBackendMenu(){
        return array(
            array(
                'title' => LANG_DOCUMENTS_BACKEND_TAB_OPTIONS,
                'url' => href_to($this->root_url, 'options')
            ),
            /*{comgen-backend-menu}*/

            array(
                'title' => LANG_DOCUMENTS_REGLAMENTS,
                'url' => href_to($this->root_url, 'reglaments')
            ),

            array(
                'title' => LANG_DOCUMENTS_REGLAMENTS,
                'url' => href_to($this->root_url, 'reglaments')
            ),

            array(
                'title' => LANG_DOCUMENTS_REGLAMENTS,
                'url' => href_to($this->root_url, 'reglaments')
            ),

            array(
                'title' => LANG_DOCUMENTS_REGLAMENTS,
                'url' => href_to($this->root_url, 'reglaments')
            ),

            array(
                'title' => LANG_DOCUMENTS_REGLAMENTS,
                'url' => href_to($this->root_url, 'reglaments')
            ),

            array(
                'title' => LANG_DOCUMENTS_REGLAMENTS,
                'url' => href_to($this->root_url, 'reglaments')
            ),

            array(
                'title' => LANG_DOCUMENTS_REGLAMENTS,
                'url' => href_to($this->root_url, 'reglaments')
            ),
        );
    }

}
