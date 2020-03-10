<?php

namespace app\controllers;

use Yii;
use app\models\Affectationenseignantclasse;
use app\models\AffectationenseignantclasseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AffectationenseignantclasseController implements the CRUD actions for Affectationenseignantclasse model.
 */
class AffectationenseignantclasseController extends Controller
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
     * Lists all Affectationenseignantclasse models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AffectationenseignantclasseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Affectationenseignantclasse model.
     * @param string $classe
     * @param string $IdentifiantEnseignant
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($classe, $IdentifiantEnseignant)
    {
        return $this->render('view', [
            'model' => $this->findModel($classe, $IdentifiantEnseignant),
        ]);
    }

    /**
     * Creates a new Affectationenseignantclasse model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Affectationenseignantclasse();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'classe' => $model->classe, 'IdentifiantEnseignant' => $model->IdentifiantEnseignant]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Affectationenseignantclasse model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $classe
     * @param string $IdentifiantEnseignant
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($classe, $IdentifiantEnseignant)
    {
        $model = $this->findModel($classe, $IdentifiantEnseignant);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'classe' => $model->classe, 'IdentifiantEnseignant' => $model->IdentifiantEnseignant]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Affectationenseignantclasse model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $classe
     * @param string $IdentifiantEnseignant
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($classe, $IdentifiantEnseignant)
    {
        $this->findModel($classe, $IdentifiantEnseignant)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Affectationenseignantclasse model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $classe
     * @param string $IdentifiantEnseignant
     * @return Affectationenseignantclasse the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($classe, $IdentifiantEnseignant)
    {
        if (($model = Affectationenseignantclasse::findOne(['classe' => $classe, 'IdentifiantEnseignant' => $IdentifiantEnseignant])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
