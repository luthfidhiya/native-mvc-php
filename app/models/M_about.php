<?php
class M_about
{

   public function __construct()
   {
      $this->db = new Database;
   }

   public function getUser($id = 1)
   {
      $this->db->query('SELECT * FROM List_Product WHERE CATEGORY_ID=:id');
      $this->db->bind('id', $id);
      return $this->db->resultSet();
      // return $this->db->rowCount();
   }
}
