<?php
/**
 */

namespace docflow\documents;

use docflow\base\;
use docflow\Docflow;

abstract class DocFlowBase extends MultipleActiveRecord
{
    /**
     * This method returns the base information about the document type
     * @return array ['tag' => 'document_tag', 'name' => 'Document Name', 'description' => 'Document Description']
     */
    abstract public function getDoc();

    /**
     * This method returns the the [[docflow\statuses\Statuses]] object containing the list of all  available statuses 
     * within the current document class. You must implement caching in realization of the method.
     * @return docflow\statuses\Statuses Object with the list of statuses
     */
    abstract public function getStatuses();
}
