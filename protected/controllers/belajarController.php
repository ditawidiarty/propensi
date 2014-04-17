<?php

class BelajarController extends Controller {

    public $layout = "null";

    public function actionIndex() {
        //menampilkan text/data melalui controller langsung
        echo "Sedang Belajar YII Framework";
    }

    public function actionTampil() {
        $this->render('tampil_view');
    }

    public function actionTampildata() {
        $data = array('mangga', 'manggis', 'anggur', 'jeruk', 'rambutan', 'durian');
        $this->render('data_view', array('data' => $data));
    }

    public function actionTampillink() {
        $this->render('link_view');
    }

}

?>
