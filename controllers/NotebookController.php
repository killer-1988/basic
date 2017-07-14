<?php

namespace app\controllers;

use Yii;
use app\models\Notebook;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class NotebookController extends Controller {
    public function actionIndex() {
        $notebook = Notebook::find()->orderBy('id')->all();
        return $this->render('index', ['notebook' => $notebook]);
    }
    public function actionCreate() {
        $notebook = new Notebook();
        if ($notebook->load(Yii::$app->request->post()) && $notebook->save()) {
            $notebook = Notebook::find()->orderBy('id')->all();
            return $this->redirect(array('notebook/index'));
        } else {
            return $this->render('create', ['notebook' => $notebook]);
        }
    }
    public function actionUpdate($id) {
        $notebook = Notebook::findOne($id);
        if ($notebook->load(Yii::$app->request->post()) && $notebook->save()) {
            return $this->redirect('index', ['notebook' => $notebook]);
        } else {
            return $this->render('update', ['notebook' => $notebook]);
        }
    }
    public function actionDelete($id) {
        Notebook::findOne($id)->delete($id);
        return $this->redirect('index');
    }
}