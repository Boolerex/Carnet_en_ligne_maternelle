<?php

namespace app\controllers;

use Yii;
use app\models\EleveAvoirParent;
use app\models\eleve_avoir_parentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Eleve_avoir_parentController implements the CRUD actions for EleveAvoirParent model.
 */
class Eleve_avoir_parentController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all EleveAvoirParent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new eleve_avoir_parentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EleveAvoirParent model.
     * @param string $id_parent
     * @param string $id_eleve
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_parent, $id_eleve)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_parent, $id_eleve),
        ]);
    }

    /**
     * Creates a new EleveAvoirParent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EleveAvoirParent();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_parent' => $model->id_parent, 'id_eleve' => $model->id_eleve]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EleveAvoirParent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_parent
     * @param string $id_eleve
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_parent, $id_eleve)
    {
        $model = $this->findModel($id_parent, $id_eleve);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_parent' => $model->id_parent, 'id_eleve' => $model->id_eleve]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EleveAvoirParent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_parent
     * @param string $id_eleve
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_parent, $id_eleve)
    {
        $this->findModel($id_parent, $id_eleve)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EleveAvoirParent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_parent
     * @param string $id_eleve
     * @return EleveAvoirParent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_parent, $id_eleve)
    {
        if (($model = EleveAvoirParent::findOne(['id_parent' => $id_parent, 'id_eleve' => $id_eleve])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
