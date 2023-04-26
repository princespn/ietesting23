<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Itemstock_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        //$this->current_session = $this->setting_model->getCurrentSession();
    }

    public function get($id = null,$school_id = null) {

        $this->db->select('schools.school_name,`item_stock`.*, `item`.`name`, `item`.`item_category_id`, `item`.`description` as des, `item_category`.`item_category`, `item_supplier`.`item_supplier`, `item_store`.`item_store`
        ,(select name from account_ledgers where id=item_stock.debit_ledger_id) as debit_ledger
        ,(select name from account_ledgers where id=item_stock.credit_ledger_id) as credit_ledger
        ')->from('item_stock');
		$this->db->join('schools ', 'schools.id = item_stock.school_id');
        $this->db->join('item ', 'item.id = item_stock.item_id');
        $this->db->join('item_category', 'item.item_category_id = item_category.id');
        
        $this->db->join('item_supplier', 'item_stock.supplier_id = item_supplier.id');
        $this->db->join('item_store', 'item_store.id = item_stock.store_id', 'left outer');
		 if($this->session->userdata('role_id') != SUPER_ADMIN && $this->session->userdata('role_id') != DISTRICT_ADMIN){
            $this->db->where('item_stock.school_id', $this->session->userdata('school_id'));
        }
        
        if($this->session->userdata('role_id') == SUPER_ADMIN && $school_id){
            $this->db->where('item_stock.school_id', $school_id);
        }
		if($this->session->userdata('role_id') == DISTRICT_ADMIN && $school_id){
            $this->db->where('item_stock.school_id', $school_id);
        }
		else if($this->session->userdata('role_id') == DISTRICT_ADMIN && $school_id==null){
			$this->db->where('schools.district_id', $this->session->userdata('district_id'));
		}
        if ($id != null) {
            $this->db->where('item_stock.id', $id);
        } else {
            $this->db->order_by('item_stock.id', 'DESC');
        }
       
        $query = $this->db->get();
        
        if ($id != null) {
            return $query->row_array();
        } else {
            return $query->result_array();
        }
    }

    /**
     * This function will delete the record based on the id
     * @param $id
     */
    public function remove($id) {
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('id', $id);
        $this->db->delete('item_stock');
		$message      = DELETE_RECORD_CONSTANT." On item stock id ".$id;
        $action       = "Delete";
        $record_id    = $id;
        $this->log($message, $record_id, $action);
		//======================Code End==============================
        $this->db->trans_complete(); # Completing transaction
        /*Optional*/
        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;
        } else {
        //return $return_value;
        }
    }

    /**
     * This function will take the post data passed from the controller
     * If id is present, then it will do an update
     * else an insert. One function doing both add and edit.
     * @param $data
     */
    public function add($data) {
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('item_stock', $data);
			$message      = UPDATE_RECORD_CONSTANT." On  item stock id ".$data['id'];
			$action       = "Update";
			$record_id    = $insert_id = $data['id'];
			//$this->log($message, $record_id, $action);			
        } else {
            $this->db->insert('item_stock', $data);
			$insert_id = $this->db->insert_id();
			$message      = INSERT_RECORD_CONSTANT." On item stock id ".$insert_id;
			$action       = "Insert";
			$record_id    = $insert_id;
			//$this->log($message, $record_id, $action);			
        }
			//======================Code End==============================
			$this->db->trans_complete(); # Completing transaction
			/*Optional*/
			if ($this->db->trans_status() === false) {
				# Something went wrong.
				$this->db->trans_rollback();
				return false;
			} else {
				return $insert_id;
			}
			// return $insert_id;
    }

    public function get_currentstock(){
        $query="SELECT sum(`item_stock`.`quantity`) as available_stock, `item`.`name`, `item`.`item_category_id`, `item`.`description` as `des`, `item_category`.`item_category`, `item_supplier`.`item_supplier`, `item_store`.`item_store`,(SELECT sum(quantity) from item_issue where item.id=item_issue.item_id) as total_issued FROM `item_stock` JOIN `item` ON `item`.`id` = `item_stock`.`item_id` JOIN `item_category` ON `item`.`item_category_id` = `item_category`.`id` JOIN `item_supplier` ON `item_stock`.`supplier_id` = `item_supplier`.`id` LEFT OUTER JOIN `item_store` ON `item_store`.`id` = `item_stock`.`store_id`  group by `item`.`id`";
        $querydata=$this->db->query($query);
        return $querydata->result_array();
    }

    public function get_ItemByBetweenDate($start_date,$end_date){
        $condition=" and date_format(item_stock.date,'%Y-%m-%d') between '".$start_date."' and '".$end_date."'";
        $sql="SELECT `item_stock`.*, `item`.`name`, `item`.`item_category_id`, `item`.`description` as `des`, `item_category`.`item_category`, `item_supplier`.`item_supplier`, `item_store`.`item_store` FROM `item_stock` JOIN `item` ON `item`.`id` = `item_stock`.`item_id` JOIN `item_category` ON `item`.`item_category_id` = `item_category`.`id` JOIN `item_supplier` ON `item_stock`.`supplier_id` = `item_supplier`.`id` LEFT OUTER JOIN `item_store` ON `item_store`.`id` = `item_stock`.`store_id` where 1 ".$condition." ORDER BY `item_stock`.`id` DESC";
        $query=$this->db->query($sql);
        return $query->result();

    }	

}
