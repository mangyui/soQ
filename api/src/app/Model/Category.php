<?php

/**
 * @author : goodtimp
 * @time : 2019-3-1
*/

namespace App\Model;

use PhalApi\Model\NotORMModel as NotORM;


class Category extends NotORM {

    protected function getTableName($id) {
        return 'category';
		}
		
    /**
     * 查找所有题目分类
     */
    public function getAllCategories() {
        return $this->getORM()
            ->select('*')
            ->fetchAll();
    }
}
