<?php

namespace app\controllers;

use Yii;
use app\models\Remarque;
use app\models\RemarqueSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RemarqueController implements the CRUD actions for Remarque model.
 */
class RemarqueController extends Controller
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
     * Lists all Remarque models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RemarqueSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Remarque model.
     * @param string $IDCarnet
     * @param string $IntituleProgramme
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IDCarnet, $IntituleProgramme)
    {
        return $this->render('view', [
            'model' => $this->findModel($IDCarnet, $IntituleProgramme),
        ]);
    }

    /**
     * Creates a new Remarque model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Remarque();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IDCarnet' => $model->IDCarnet, 'IntituleProgramme' => $model->IntituleProgramme]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Remarque model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $IDCarnet
     * @param string $IntituleProgramme
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IDCarnet, $IntituleProgramme)
    {
        $model = $this->findModel($IDCarnet, $IntituleProgramme);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IDCarnet' => $model->IDCarnet, 'IntituleProgramme' => $model->IntituleProgramme]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Remarque model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $IDCarnet
     * @param string $IntituleProgramme
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IDCarnet, $IntituleProgramme)
    {
        $this->findModel($IDCarnet, $IntituleProgramme)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Remarque model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $IDCarnet
     * @param string $IntituleProgramme
     * @return Remarque the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IDCarnet, $IntituleProgramme)
    {
        if (($model = Remarque::findOne(['IDCarnet' => $IDCarnet, 'IntituleProgramme' => $IntituleProgramme])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
