<?php

namespace app\controllers;

use Yii;
use app\models\etre_en_poste;
use app\models\etre_en_posteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Etre_en_posteController implements the CRUD actions for etre_en_poste model.
 */
class Etre_en_posteController extends Controller
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
     * Lists all etre_en_poste models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new etre_en_posteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single etre_en_poste model.
     * @param string $id_personnel
     * @param string $annee_scolaire
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_personnel, $annee_scolaire)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_personnel, $annee_scolaire),
        ]);
    }

    /**
     * Creates a new etre_en_poste model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new etre_en_poste();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_personnel' => $model->id_personnel, 'annee_scolaire' => $model->annee_scolaire]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing etre_en_poste model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_personnel
     * @param string $annee_scolaire
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_personnel, $annee_scolaire)
    {
        $model = $this->findModel($id_personnel, $annee_scolaire);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_personnel' => $model->id_personnel, 'annee_scolaire' => $model->annee_scolaire]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing etre_en_poste model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_personnel
     * @param string $annee_scolaire
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_personnel, $annee_scolaire)
    {
        $this->findModel($id_personnel, $annee_scolaire)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the etre_en_poste model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_personnel
     * @param string $annee_scolaire
     * @return etre_en_poste the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_personnel, $annee_scolaire)
    {
        if (($model = etre_en_poste::findOne(['id_personnel' => $id_personnel, 'annee_scolaire' => $annee_scolaire])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
