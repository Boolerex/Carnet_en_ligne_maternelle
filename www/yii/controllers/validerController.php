<?php

namespace app\controllers;

use Yii;
use app\models\Valider;
use app\models\validerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ValiderController implements the CRUD actions for Valider model.
 */
class ValiderController extends Controller
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
     * Lists all Valider models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new validerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Valider model.
     * @param string $Id_eleve
     * @param string $id_com
     * @param string $id_personnel
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_eleve, $id_com, $id_personnel)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_eleve, $id_com, $id_personnel),
        ]);
    }

    /**
     * Creates a new Valider model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Valider();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_eleve' => $model->Id_eleve, 'id_com' => $model->id_com, 'id_personnel' => $model->id_personnel]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Valider model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Id_eleve
     * @param string $id_com
     * @param string $id_personnel
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_eleve, $id_com, $id_personnel)
    {
        $model = $this->findModel($Id_eleve, $id_com, $id_personnel);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_eleve' => $model->Id_eleve, 'id_com' => $model->id_com, 'id_personnel' => $model->id_personnel]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Valider model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Id_eleve
     * @param string $id_com
     * @param string $id_personnel
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_eleve, $id_com, $id_personnel)
    {
        $this->findModel($Id_eleve, $id_com, $id_personnel)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Valider model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Id_eleve
     * @param string $id_com
     * @param string $id_personnel
     * @return Valider the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_eleve, $id_com, $id_personnel)
    {
        if (($model = Valider::findOne(['Id_eleve' => $Id_eleve, 'id_com' => $id_com, 'id_personnel' => $id_personnel])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
