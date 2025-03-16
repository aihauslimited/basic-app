<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Application;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\widgets\ActiveForm;

class ApplicationController extends Controller
{   
    public function actionCreate()
    {
        $model = new Application();

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($model->validate()) {
                return ['success' => true];
            } else {
                return ActiveForm::validate($model);
            }
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    
    public function actionUpdate($id)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $application = Application::findOne($id);

        if (!$application) {
            throw new BadRequestHttpException("Application with ID $id not found.");
        }

        $data = Yii::$app->request->post();
        $application->load($data, '');

        if ($application->validate()) {
            if ($application->save()) {
                return ['status' => 'success', 'message' => 'Application updated successfully.', 'data' => $application];
            } else {
                return ['status' => 'error', 'message' => 'Failed to update the application.'];
            }
        } else {
            return ['status' => 'error', 'message' => 'Validation failed.', 'errors' => $application->errors];
        }
    }




    // THis is for create and view. it is not in document thats why i write this code below for cheking.
    public function actionIndex()
    {
        $applications = Application::find()->all(); 
        return $this->render('index', [
            'applications' => $applications,
        ]);
    }
    
    public function actionView($id)
    {
        $model = $this->findModel($id); 

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Application::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
