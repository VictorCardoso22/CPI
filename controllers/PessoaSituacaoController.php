<?php

namespace app\controllers;

use Yii;
use app\models\PessoaSituacao;
use app\models\PessoaSituacaoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Situacao;
use app\models\Pessoas;
use app\models\Opm;
use app\models\PessoaSituacaoRelatorio;
use yii\data\ActiveDataProvider;

/**
 * PessoaSituacaoController implements the CRUD actions for PessoaSituacao model.
 */
class PessoaSituacaoController extends Controller
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
     * Lists all PessoaSituacao models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PessoaSituacaoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PessoaSituacao model.
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
     * Creates a new PessoaSituacao model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PessoaSituacao();

        $situacaoList = Situacao::getList();
        $pessoaList = Pessoas::getList();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'situacaoList' => $situacaoList,
            'pessoaList' => $pessoaList,
        ]);
    }

    /**
     * Updates an existing PessoaSituacao model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $situacaoList = Situacao::getList();
        $pessoaList = Pessoas::getList();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'situacaoList' => $situacaoList,
            'pessoaList' => $pessoaList,
        ]);
    }

    public function actionRelatorio()
    {
        $model = new PessoaSituacaoRelatorio();
        $situacaoList = Situacao::getList();
        $opmList = Opm::getList();
        // $pessoaSituacao = PessoaSituacao::getSituacaoList();

        if ($model->load(Yii::$app->request->post()) ) {
            $pessoaSituacao = $this->findModel($model->situacaoId);
 
        }

        $query = PessoaSituacao::find()
                ->where(['situacao_id' => $model->situacaoId ]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                    'pageSize' => 3
            ],
        ]);

        return $this->render('relatorio',
        [
            'model'=>$model,
            'situacao_id' => $model->situacaoId,
            'opmList' => $opmList,
            'situacaoList' => $situacaoList,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Deletes an existing PessoaSituacao model.
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

    /**
     * Finds the PessoaSituacao model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PessoaSituacao the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PessoaSituacao::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
