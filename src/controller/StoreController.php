<?php
namespace App\controller;

use App\model\Store;
use App\model\StoreModel;

class StoreController
{
    protected $storeController;
    public function __construct()
    {
        $this->storeController = new StoreModel();
    }
    public function show(){
        $stores = $this->storeController->getAll();
        include_once "src/view/list.php";
    }

    public function add(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            include_once "src/view/add.php";
        }
        else{
            $Name = $_REQUEST['Name'];
            $Type = $_REQUEST['Type'];
            $Price = $_REQUEST['Price'];
            $Amount = $_REQUEST['Amount'];
            $Date = $_REQUEST['Date'];
            $Descirbe = $_REQUEST['Descirbe'];

            $store = new Store($Name,$Type,$Price,$Amount,$Date,$Descirbe);
            $this->storeController->addStore($store);

            header('location:index.php');
        }
    }

    public function edit(){
        if($_SERVER['REQUEST_METHOD']== 'GET'){
            $id = $_REQUEST['id'];
            $stores = $this->storeController->getStoreById($id);
            include_once "src/view/edit.php";
        }
        else{
            $Name = $_REQUEST['Name'];
            $Type = $_REQUEST['Type'];
            $Price = $_REQUEST['Price'];
            $Amount = $_REQUEST['Amount'];
            $Date = $_REQUEST['Date'];
            $Descirbe = $_REQUEST['Descirbe'];

            $store = new Store($Name,$Type,$Price,$Amount,$Date,$Descirbe);
            $this->storeController->editStore();

            header('location:index.php');
        }
    }


    public function delete(){

        $id= $_REQUEST['Id'];
        $this->storeController->delete($id);

        header('location:index.php');
    }


    public function search()
    {
        $search = '%'. $_REQUEST['search'] . '%';
        $store = $this->storeController->getSearch($search);
        include "src/view/search.php";
    }


}