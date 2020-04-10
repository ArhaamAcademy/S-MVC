<?php

class fruit extends BaseController{

    public function __construct(){

        if(!$this->getSession("userId")){

            $this->redirect("account/signin");
        }

        $this->helper("link");
        $this->fruitModel = $this->model('fruitModel');
    }

    public function index(){

        $userId = $this->getSession("userId");
        $data = $this->fruitModel->showAll($userId);
        $this->view("addFruit", $data);

    }

    public function create(){        

        $fruitData = [

            'name'          => $this->input('name'),
            'price'         => $this->input('price'),
            'quality'       => $this->input('quality'),
            'nameError'     => '',
            'priceError'    => '',
            'qualityError'  => ''

        ];

        if(empty($fruitData['name'])){

            $fruitData['nameError'] = 'Name is required';
        }

        if(empty($fruitData['price'])){

            $fruitData['priceError'] = 'Price is required';
        }

        if(empty($fruitData['quality'])){

            $fruitData['qualityError'] = 'Quality is required';
        }

        if(empty($fruitData['nameError']) && empty($fruitData['priceError']) && empty($fruitData['qualityError'])){
            
            $data = [$fruitData['name'], $fruitData['price'], $fruitData['quality'], $this->getSession("userId")];

            if($this->fruitModel->create($data)){

                $this->setFlash("fruitCreated", "New fruit has been added successfully");
                $this->redirect("fruit");
         
            }
            
        }else{

            $this->view("addFruit", $fruitData);
        }

    } 

    public function edit($id){

        $userId = $this->getSession("userId");
        $fruitEdit= $this->fruitModel->editData($id, $userId);

        $data = [

            'data'          => $fruitEdit,
            'nameError'     => '',
            'priceError'    => '',
            'qualityError'  => ''
        ];
        $this->view("editFruit", $data);
    }

    public function update(){

        $id = $this->input('hiddenId');
        $userId = $this->getSession('userId');
        $fruitEdit= $this->fruitModel->editData($id, $userId);

        $fruitData = [

            'name'          => $this->input('name'),
            'price'         => $this->input('price'),
            'quality'       => $this->input('quality'),
            'data'          => $fruitEdit,
            'hiddenId'      => $this->input('hiddenId'),
            'nameError'     => '',
            'priceError'    => '',
            'qualityError'  => ''

        ];

        if(empty($fruitData['name'])){

            $fruitData['nameError'] = 'Name is required';
        }

        if(empty($fruitData['price'])){

            $fruitData['priceError'] = 'Price is required';
        }

        if(empty($fruitData['quality'])){

            $fruitData['qualityError'] = 'Quality is required';
        }

        if(empty($fruitData['nameError']) && empty($fruitData['priceError']) && empty($fruitData['qualityError'])){

            $updateData = [$fruitData['name'], $fruitData['price'], $fruitData['quality'], $fruitData['hiddenId'], $userId];
            
            if($this->fruitModel->updateData($updateData)){

                $this->setFlash("fruitUpdated", "Fruit has been updated successfully");
                $this->redirect('fruit');
            }

        }else{

            $this->view("editFruit", $fruitData);
        }
    }
    

    public function delete($id){

        $userId = $this->getSession('userId');

        if($this->fruitModel->deleteData($id, $userId)){

            $this->setFlash("deleted", "Fruit has been deleted successfully");
                $this->redirect('fruit');
        }
    }


}
?>