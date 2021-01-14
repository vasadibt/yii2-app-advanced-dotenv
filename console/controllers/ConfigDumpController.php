<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\db\Connection;
use yii\db\Exception;

/**
 * Class ConfigDumpController
 * @package console\controllers
 */
class ConfigDumpController extends Controller
{
    /**
     * Dump details
     */
    public function actionIndex()
    {
        $db = Yii::$app->db;
        $this->stdout('APP name: ' . Yii::$app->name . "\n");
        $this->stdout('APP env: ' . YII_ENV . "\n");
        $this->stdout('APP debug: ' . (YII_DEBUG ? 1 : 0) . "\n");
        $this->stdout('DB dsn: ' . $db->dsn . "\n");
        $this->stdout('DB username: ' . $db->username . "\n");
        $this->stdout('DB password: ' . $db->password . "\n");
        $this->stdout('DB can connect: ' . ($this->canConnect($db) ? 1 : 0) . "\n");
    }

    /**
     * @param Connection $db
     * @return bool
     */
    public function canConnect(Connection $db)
    {
        try {
            $db->open();
        } catch (Exception $e) {
            return false;
        }
        return true;
    }

}