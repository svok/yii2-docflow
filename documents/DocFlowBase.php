<?php
/**
 */

namespace docflow\documents;

use docflow\base\MultipleActiveRecord;
use docflow\Docflow;

abstract class DocFlowBase extends MultipleActiveRecord
{
    /**
     * This method returns the base information about the document type
     *
     * @return array ['tag' => 'document_tag', 'name' => 'Document Name', 'description' => 'Document Description']
     */
    abstract public static function getDoc();

    /**
     * This method returns the the [[docflow\statuses\Statuses]] object containing the list of all  available statuses 
     * within the current document class. You must implement caching in realization of the method.
     *
     * @return docflow\statuses\Statuses Object with the list of statuses
     */
    abstract public static function getStatuses();

    /**
     * Return current status of the document
     *
     * @return docflow\statuses\Status Status object
     */
    abstract public function getStatus();

    /**
     * Set current status of the document
     *
     * @param docflow\statuses\Status||string||integer Status object, tag or id
     */
    abstract public function setStatus($status);
}
