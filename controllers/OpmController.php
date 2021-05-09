<?php

namespace app\controllers;

use Yii;
use app\models\Opm;
use app\models\OpmSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Cpai;
use app\models\OpmRelatorio;
use app\models\Pessoas;

/**
 * OpmController implements the CRUD actions for Opm model.
 */
class OpmController extends Controller
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
     * Lists all Opm models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OpmSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Opm model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Opm model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Opm();
        $cpaiList = Cpai::getList();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'cpaiList' => $cpaiList,
        ]);
    }

    /**
     * Updates an existing Opm model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $cpaiList = Cpai::getList();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'cpaiList' => $cpaiList,
        ]);
    }

    public function actionListagem()
    {
        $searchModel = new OpmSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Deletes an existing Opm model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionRelatorio()
    {
        $model = new OpmRelatorio();
        $opmList = Opm::getList();

        if ($model->load(Yii::$app->request->post()) ) {
            $opm = $this->findModel($model->opmId);

            $model->qtdPrevista = ($opm->qtd_sd + $opm->qtd_cb + $opm->qtd_3sgt + $opm->qtd_2sgt + $opm->qtd_1sgt + $opm->qtd_st + $opm->qtd_2ten + $opm->qtd_1ten + $opm->qtd_cap + $opm->qtd_maj + $opm->qtd_tc + $opm->qtd_cel);     
            
            

            $model->qtdReal = Pessoas::find()->where([
                'opm_id' => $model->opmId,
            ])->count();

            $model->qtdInexistente = ($model->qtdPrevista - $model->qtdReal);

            // Porcentagens do efetivo
           
            $model->percPrevista = ($model->qtdPrevista*100) / $model->qtdPrevista;
            $model->percReal = ($model->qtdReal*100) / $model->qtdPrevista;
            $model->percInexistente = ($model->qtdInexistente*100) / $model->qtdPrevista;


            $model->qtdPrevista = $model->qtdPrevista . '  |  ' . $model->percPrevista.'%';    
            $model->qtdReal = $model->qtdReal . '  |  ' .  number_format($model->percReal, '2').'%';
            $model->qtdInexistente = $model->qtdInexistente . '  |  ' .  number_format($model->percInexistente, '2').'%';
        }
      

        return $this->render('relatorio',
        [
            'model'=>$model,
            'opmList'=>$opmList,
        ]);
    }

    /**
     * Finds the Opm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Opm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Opm::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
