<?php
/**
 */

namespace docflow\documents;

use docflow\base\MultipleActiveRecord;
use docflow\Docflow;

/**
 * Class [[Document]] is to be used for such essenses as User, Commodity, News and all things which is object of operations.
 * The operations must be performed in the class inhereted from [[docflow\documents\Operation]].
 *
 */
abstract class Operation extends DocFlowBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%operation}}';
    }

    /**
     * Return the class name for document which is handled by current operation
     *
     * @return string[]
     */
    abstract public static function getDocumentClass();

    /**
     * A relation which return an array of all documents, which are currently handled by the current operation
     *
     * @return yii\db\ActiveQuery
     */
    abstract public function getDocuments();
}
