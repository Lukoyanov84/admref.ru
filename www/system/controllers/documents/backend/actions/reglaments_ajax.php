<?php

class actionDocumentsReglamentsAjax extends cmsAction {

    public function run(){

        if (!$this->request->isAjax()) { cmsCore::error404(); }

        $grid = $this->loadDataGrid('reglaments');

        $model = cmsCore::getModel($this->name);
 
        $model->setPerPage(admin::perpage);
 
        $filter = array(); 
        $filter_str = $this->request->get('filter', ''); 
        $filter_str = cmsUser::getUPSActual('documents.reglaments_list', $filter_str);
 
        if ($filter_str){
            parse_str($filter_str, $filter);
            $model->applyGridFilter($grid, $filter);
        }

        $total = $model->getReglamentsCount(); 
        $perpage = isset($filter['perpage']) ? $filter['perpage'] : admin::perpage; 
        $pages = ceil($total / $perpage);

        $reglaments = $model->getReglaments();

        cmsTemplate::getInstance()->renderGridRowsJSON($grid, $reglaments, $total, $pages);

        $this->halt();

    }

}
