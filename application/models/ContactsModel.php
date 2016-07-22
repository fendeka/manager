<?php
namespace contact\models;

use contact\helpers\Session;

class ContactsModel extends Model{

    public $response;
    private $query;
    private $table = "person";
    private $user_id;
    private $contact_id;
    private $contact_to_add;
    private $contact_to_edit;

    function __construct()
    {
        parent::__construct();
        $this->user_id = Session::get("user_id");
    }

//show contacts table
    public function showContactsModel(){
        $this->query = $this->queryBuilder->select("*")
                                        ->from($this->table)
                                        ->where(array("user_id" => $this->user_id))
                                        ->createQuery();
        $this->response = $this->runQuery($this->query);
        return $this->response;
    }

//add contact
    public function addContactModel(){
        $this->contact_to_add = $_POST;
        array_pop($this->contact_to_add);
        $this->contact_to_add['user_id'] = $this->user_id;
        $this->contact_to_add['best_phone'] = $this->setBestPhone();
        $this->query = $this->queryBuilder->insert($this->table, $this->contact_to_add)
                                        ->createQuery();
        $this->response = $this->runQuery($this->query);
        return true;
    }

    private function setBestPhone(){
        switch ($_POST['best_phone']) {
            case 'h':
                $best_phone = $_POST['home_phone'];
                break;
            case 'w':
                $best_phone = $_POST['work_phone'];
                break;
            case 'c':
                $best_phone = $_POST['cell_phone'];
                break;
        }
        return $best_phone;
    }

//deleting
    public function deleteContactModel($params){
        $this->contact_id = $params;
        $this->query = $this->queryBuilder->delete()
                                        ->from($this->table)
                                        ->where(array("id" => $this->contact_id))
                                        ->createQuery();
        $this->runQuery($this->query);
        return true;
    }


//edit contact
    public function viewContactModel($params)
    {
        $this->contact_id = $params;
        $this->query = $this->queryBuilder->select("*")
                                        ->from($this->table)
                                        ->where(array("id" => $this->contact_id))
                                        ->createQuery();
        $this->contact_to_edit = $this->runQuery($this->query);
        return $this->contact_to_edit;
    }

    public function editContactModel($params){
        $this->contact_id = $params;
        $this->contact_to_edit = $_POST;
        array_pop($this->contact_to_edit);
        $this->query = $this->queryBuilder->update($this->table, $this->contact_to_edit)
                                            ->where(array("id" => $this->contact_id))
                                            ->createQuery();
        $this->runQuery($this->query);
        return true;
    }

    


}