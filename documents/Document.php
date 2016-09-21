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
abstract class Document extends DocFlowBase
{
    /**
     * Return an array of class names for the operations which are allowed to act to the current document class
     *
     * @return string[]
     */
    abstract public static function getAllOperations();

    /**
     * A relation which return an array of operation classes, which are currently operating on the current document
     *
     * @return yii\db\ActiveQuery
     */
    abstract public function getCurrentOperations();
}
