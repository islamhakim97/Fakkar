<?php
    class database
   
    {
         
        function __construct()
        {
            
            $this->pdo=new PDO("mysql:host=localhost;charset=utf8","root","");
              $this->pdo->exec("create database if not exists fakar");
			  $this->pdo->exec("use fakar");
        }
        public function disconnect()
        {
            $this->pdo=null;
        }
        public function getRow($q,$p)
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->fetch();
        }
        public function getCount($q,$p=array())
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->rowCount();
        }
        public function getRows($q,$p=array())
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->fetchAll();
        }
        public function getObject($q,$p=array())
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function insertRow($q,$p)
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->rowCount();
        }
        public function update($q,$p)
        {
            return $this->insertRow($q,$p);
        }
        public function delete($q,$p)
        {
            return $this->insertRow($q,$p);
        }
        public function Execute($q)
        {
            return $this->pdo->exec($q);
        }
            
        }
             
    
    
    $db=new database();
  
    

	

	



       
        	


	














?>