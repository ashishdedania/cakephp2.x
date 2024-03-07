<?php
// app/Model/Behavior/SoftDelete.php

class SoftDeleteBehavior extends ModelBehavior {
    public function beforeFind(Model $model, $query) {
        $query['conditions']["{$model->alias}.deleted"] = null;
        return $query;
    }

    public function softDelete(Model $model, $id = null) {
        if ($id) {
            return $model->updateAll(array('deleted' => "'" . date('Y-m-d H:i:s') . "'"), array($model->primaryKey => $id));
        }
        return false;
    }
}
?>