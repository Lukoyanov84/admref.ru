<h1><?php echo LANG_CP_SECTION_SETTINGS; ?></h1>

<?php

    $this->setPageTitle(LANG_CP_SECTION_SETTINGS);

    $this->addBreadcrumb(LANG_CP_SECTION_SETTINGS);

    $this->addMenuItems('settings', $this->controller->getSettingsMenu());

	$this->addToolButton(array(
		'class' => 'help',
		'title' => LANG_HELP,
		'target' => '_blank',
		'href'  => LANG_HELP_URL_SETTINGS_GLOBAL
	));

?>

<div class="pills-menu">
    <?php $this->menu('settings'); ?>
</div>

<div id="site_settings"><?php
    $this->renderForm($form, $values, array(
        'action' => '',
        'method' => 'post',
    ), $errors);
?></div>

<script type="text/javascript">

    var templates_has_options = <?php echo json_encode($templates_has_options); ?>;

    $(function(){
        $('#template, #template_mobile, #template_tablet, #template_admin').each(function(){
            $(this).change(function(){
                setThemeConfigURL(this);
            }).trigger('change');
        });
    });

    function setThemeConfigURL(obj){
        var theme = $(obj).val();
        if($.inArray(theme, templates_has_options) === -1){
            theme = false;
        }
        var theme_config_link = $(obj).parent().find('.hint a');
        if(theme){
            theme_config_link.show().attr('href', theme_config_link.data('url')+'/'+theme);
        } else {
            theme_config_link.hide();
        }
    }

</script>