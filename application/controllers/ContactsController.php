<?php
namespace contact\controllers;
use contact\models\Session;

if(!defined("PROJECT_ACCESS"))exit("ACCESS DENIED");

class ContactsController extends Controller{

    private $contactsInformation;
    private $view;

    function __construct()
    {
        parent::__construct();
        $this->contactsInformation = $this->loadModel("ContactsModel");
        $this->view = new View();
    }

    public function showContacts(){
        $this->view->data = $this->contactsInformation->showContactsModel();
        if($this->view->data != false) {
            $this->view->render("contacts");
        }else{
            header("location:../../UsersController/toLogin/");
        }
    }

    public function addContact(){
        if (isset($_POST['add'])) {
            $this->view->data = $this->contactsInformation->addContactModel();
            header("location:../../ContactsController/showContacts/");
        }
        $this->view->render("add");
    }

    public function viewContact($params){
        $this->view->data = $this->contactsInformation->viewContactModel($params);
        $this->view->render("view");
    }
    
    public function editContact($params){
        if(isset($_POST['edit'])) {
            $this->contactsInformation->editContactModel($params);
            header("location:../../../ContactsController/showContacts/");
        }
        $this->view->data = $this->contactsInformation->viewContactModel($params);
        $this->view->render("edit");
    }
        
    public function deleteContact($params){
        if (isset($_POST['delete'])) {
            $this->contactsInformation->deleteContactModel($params);
            header("location:../../../ContactsController/showContacts/");
        }elseif (isset($_POST['cancel'])){
            header("location:../../../ContactsController/showContacts/");
        }
        $this->view->render("delete");
    }
}

?>