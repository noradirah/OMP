<?php
import('lib.pkp.classes.plugins.GenericPlugin');


class TutorialExamplePlugin extends GenericPlugin
{
    public function register($category, $path, $mainContextId = NULL)
	{
        // Register the plugin even when it is not enabled
        $success = parent::register($category, $path);

        if ($success && $this->getEnabled()) {
            // Do something when the plugin is enabled
			HookRegistry::register('Form::config::before', array($this, 'addToForm'));
			
        }

        return $success;
    }
	
	public function addtoForm($hookName, $form) {
		if (!defined('FORM_MASTHEAD') || $form->id !== FORM_MASTHEAD) {
			return;
		}

		$context = Application::getRequest()->getContext();

		if (!$context) {
			return;
		}

		$form->addField(new \PKP\components\forms\FieldText('institutionalHome', [
			'label' => __('plugins.generic.institutionalHome.label'),
			'groupId' => 'publishing',
			'value' => $context->getData('institutionalHome'),
		]));
	}

    /**
     * Provide a name for this plugin
     *
     * The name will appear in the Plugin Gallery where editors can
     * install, enable and disable plugins.
     */
    public function getDisplayName()
	{
        return 'Tutorial Example';
    }

    /**
     * Provide a description for this plugin
     *
     * The description will appear in the Plugin Gallery where editors can
     * install, enable and disable plugins.
     */
    public function getDescription()
	{
        return 'This plugin is an example created for a tutorial on how to create a plugin.';
    }
}