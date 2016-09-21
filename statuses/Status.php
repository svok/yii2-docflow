<?php
/**
 */

namespace docflow\statuses;

use yii\base\Model
use docflow\Docflow;

class Status extends Model
{
    public $id;
    public $tag;
    public $name;
    public $description;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tag'], 'string', 'max' => 32],
            [['name'], 'string', 'max' => 128],
            [['description'], 'string', 'max' => 256],
        ];
    }

}
