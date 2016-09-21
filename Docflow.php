<?php

namespace docflow;

use yii\base\Module;

/**
 * Main class for yii2-docflow module.
 */
class Docflow extends Module
{
    /** @var string $db Database component to use in the module */
    public $db = 'db';

    /**
     * @inherit
     */
    public function init()
    {
        parent::init();
        $this->registerTranslations();
    }

    /**
     * Initialization of the i18n translation module.
     *
     * @return void
     */
    public function registerTranslations()
    {
        \Yii::$app->i18n->translations['docflow'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en',
            'basePath' => '@docflow/messages',
            'fileMap' => ['docflow' => 'docflow.php'],
        ];
    }
}
