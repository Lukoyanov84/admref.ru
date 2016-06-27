<?php
class formDocumentsReglament extends cmsForm {

    public function init() {

        return array(

            array(
                'type' => 'fieldset',
                'childs' => array(

                    new fieldString('', array(
                        'title' => LANG_DOCUMENTS_REGLAMENT_,
						'rules' => array(
							array('required'),
						),
                    )),

                )
            )

        );

    }

}