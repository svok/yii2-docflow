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

    /**
     * Set status for the document
     */
    public function setStatus($status)
    {
        if($status instanceOf Status) {
            $s = $status;
        } elseif(is_string($status)) {
            $s = static::getStatuses()->findByTag($status);
        } elseif(is_int($status)) {
            $s = static::getStatuses()->findById($status);
        }
        $this->status_id = $s->id;
    }

    /**
     * Set status for the document
     *
     * @return docflow\statuses\Status
     */
    public function getStatus()
    {
        return $this->getStatuses()->findById($this->status_id);
    }

}
