<?php
/**
 */

namespace docflow\statuses;

use yii\base\Model;
use yii\helpers\ArrayHelper;

use docflow\Docflow;

abstract class Statuses extends Model
{
    /**
     * This method returns the array of objects for all statuses stored in this class
     * ```php
     * static $list;
     * if(! isset($list)) {
     *     $list = [
     *         new Status([
     *             'id' => 10,
     *             'tag' => 'active',
     *             'name' => 'Active',
     *             'description' => 'Item is active and allows operation',
     *         ]),
     *     ];
     * }
     * return $list;
     * ```
     * @return docflow\statuses\Status[] array of statuses
     */
    abstract public function all();

    /**
     * Return the status object with the specified $id
     *
     * @return docflow\statuses\Status Statuses object
     */
    public function findById($id)
    {
//        echo "<pre>";var_dump(ArrayHelper::index($this->all(), 'id'),$id);die();
        return @ArrayHelper::index($this->all(), 'id')[$id];
    }

    /**
     * Return the status object with the specified $tag
     *
     * @return docflow\statuses\Status Statuses object
     */
    public function findByTag($tag)
    {
        return ArrayHelper::index($this->all(), 'tag')[$tag];
    }

}
