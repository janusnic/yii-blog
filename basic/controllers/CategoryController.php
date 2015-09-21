<?php

namespace app\controllers;

use Yii;
use app\models\Category;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
{


    /**
     * Displays a single Category model.
     * @param integer $id
     * @return mixed
     */
   public function actionView($id)
    {
        $categoryModel = new Category();
        $category = $categoryModel->getCategory($id);

        return $this->render('index', [
            'category' => $category,
            'posts' => $category->getPosts(),
            'categories' => $categoryModel->getCategories()
        ]);
    }

}
