<?php
	
	class TokoModel extends  GLOBAL_Model {

        public function __construct()
        {
            parent::__construct();
        }
        public function initTable(){
            return "tbl_toko";
        }
        public function get_toko()
		{
			return parent::get_object_of_table($this->initTable());
		}
		public function post_toko($data){
            return parent::insert_data($this->initTable(),$data);
        }
        public function getOne($param){
            return parent::get_array_of_row($this->initTable(),$param);
        }
        public function editToko($id,$data){
            return parent::update_table($this->initTable(),"toko_id",$id,$data);
        }
        public function deleteToko($data){
            return parent::delete_row($this->initTable(),$data);
        }
        public function checkMail($data){
            return parent::get_object_of_row($this->initTable(),$data);
        }

    }