<?php
/**
 * Class Admin_Model
 * @property CI_DB_query_builder db
 */
class Admin_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('security', 'date');
        $this->load->database();

    }

    public function get_drug($limit, $start, $id=0){
        if(empty($id)){
			$this->db->limit($limit, $start);
			$query = $this->db->get('drug');
            if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $row;
			}
			return false;
        } else {
			$query = $this->db->get_where('drug', array('id' => $id));
			return $query->row_array();
		}
    }
    public function list_drugs()
    {
        $this->db->order_by("id", "ASC");
        $this->db->distinct();
        $query = $this->db->get("drug");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function create_drug($id = 0)
    {

            $data = array(
                'drug_code' => $_POST['drug_code'],
                'drug_name' => $_POST['drug_name'],
                'strength' => $_POST['strength'],
                'category' => $_POST['category'],
                'unit_pack' => $_POST['unit_pack'],
                'id' => $id,
            );
            
            if ($id == 0) {
                return $this->db->insert('drug', $data);
            } else {
                $this->db->where('id', $id);
                return $this->db->update('drug', $data);
            }


        
    }

    public function delete_drug($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('drug');
    }

    public function get_inventories($limit, $start, $id=0){
        if(empty($id)){
			$this->db->limit($limit, $start);
			$query = $this->db->get('drug');
            if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $row;
			}
			return false;
        } else {
			$query = $this->db->get_where('drug', array('id' => $id));
			return $query->row_array();
		}
    }

    public function get_inventory($limit, $start, $id=0){
        if(empty($id)){
			$this->db->limit($limit, $start);
			$query = $this->db->get('drug');
            if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $row;
			}
			return false;
        } else {
			$query = $this->db->get_where('drug', array('id' => $id));
			return $query->row_array();
		}
    }
    public function list_inventory($id)
    {
        $this->db->where('inventory_id', $id);
        $query = $this->db->get("inventory");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        } 
    }
    public function list_inventories()
    {
        $this->db->order_by("inventory_id", "ASC");
        $this->db->distinct();
        $query = $this->db->get("inventories");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function get_quantity($id)
    {
        $this->db->where('inventory_id', $id);
        $this->db->select_sum('quantity');
        $result = $this->db->get('inventories');
        $data[] = array(
            'inventory_id' => $id,
            'quantity' => $result,
        );
    $this->db->set($data);
    return $this->db->insert('inventory');
    }
    public function create_inventories()
    {

            $data = array(
                'inventory_id' => $_POST['inventory_id'],
                'transaction_date' => $_POST['transaction_date'],
                'source' => $_POST['source'],
                'created_by' => $_POST['created_by'],
                
            );
                return $this->db->insert('inventories', $data);
    }
    public function create_inventory( $id, $drug_code, $drug_name, $quantity, $current_quantity, $expiry_date)
    {
        $drug_codearr = $_POST['drug_code'];
        if(!empty($drug_codearr)){
            echo 3;
            for($i=0; $i< count($drug_codearr); $i++){
                $data = array(
                    'drug_code' => $_POST['drug_code'],
                    'drug_name' => $_POST['drug_name'],
                    'quantity' => $_POST['quantity'],
                    'current_quantity' => $_POST['quantity'],
                    'expiry_date' => $_POST['expiry_date'],
                );
                return $this->db->insert('inventory', $data);
            }
        }			
    
                
                      
    }
    public function edit_inventory($id)
    {

            $data = array(
                'transaction_date' => $_POST['transaction_date'],
                'quantity' => $_POST['quantity'],
                'expiry_date' => $_POST['expiry_date'],
                'source' => $_POST['source'],
            );
                $this->db->where('inventory_id', $id);
                return $this->db->update('inventories', $data);  
    }
    public function quantity()
    {
        $this->db->select_sum('current_quantity');
        $result = $this->db->get('inventory')->row();  
        return $result->current_quantity;
    }
    public function delete_inventory($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('drug');
    }

    //orders
    public function get_order($limit, $start, $id=0){
        if(empty($id)){
			$this->db->limit($limit, $start);
			$query = $this->db->get('drug');
            if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $row;
			}
			return false;
        } else {
			$query = $this->db->get_where('drug', array('id' => $id));
			return $query->row_array();
		}
    }

    public function list_order($id)
    {
        $this->db->where('order_id', $id);
        $query = $this->db->get("order");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        } 
    }
    public function list_orders()
    {
        $this->db->order_by("order_id", "ASC");
        $this->db->distinct();
        $query = $this->db->get("orders");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function rejected_orders(){
        $this->db->where('order_status', 'Rejected');
        $query = $this->db->get("orders");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        } 
    }
    
    public function create_orders()
    {

            $data = array(
                'order_id' => $_POST['order_id'],
                'order_date' => $_POST['order_date'],
                'sender' => $_POST['sender'],
                'supplier' => $_POST['supplier'],
                'order_status' => 'New order',
            );
                return $this->db->insert('orders', $data);
    }
    public function update_order_status($order_status)
    {

            $data = array(
                'order_status' => $order_status
            );
                return $this->db->update('orders', $data);
    }
    public function create_order($id)
    {

            $data = array(
                'order_id' => $id,
                'drug_code' => $_POST['drug_code'],
                'drug_name' => $_POST['drug_name'],
                'quantity' => $_POST['quantity']
            );
                return $this->db->insert('order', $data);
    }
    public function get_number()
    {
            $this->db->where('order_status', 'Pending Approval');
            $query = $this->db->get('orders');

			return $query->num_rows();
		

    }
    public function get_date()
    {
        $this->db->where("DATEDIFF(expiry_date, NOW()) <= 30");         

        $query = $this->db->get('inventories');

        return $query;

    }
    public function edit_orders($id)
    {

            $data = array(
                'transaction_date' => $_POST['transaction_date'],
                'quantity' => $_POST['quantity'],
                'expiry_date' => $_POST['expiry_date'],
                'source' => $_POST['source'],
            );
                $this->db->where('inventory_id', $id);
                return $this->db->update('inventories', $data);
           


        
    }
    public function delete_order($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('order');
    }

    public function list_centers()
    {
        $this->db->order_by("center_code", "ASC");
        $this->db->distinct();
        $query = $this->db->get("center");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function create_center($id = 0)
    {

            $data = array(
                'center_code' => $_POST['center_code'],
                'center_name' => $_POST['center_name'],
                'district' => $_POST['district'],
                'level' => $_POST['level'],
            );
            
            if ($id == 0) {
                return $this->db->insert('center', $data);
            } else {
                $this->db->where('center_code', $id);
                return $this->db->update('center', $data);
            }    
    }
    
    public function get_center($limit, $start, $center_code='')
    {
        if(empty($center_code)){
			$this->db->limit($limit, $start);
			$query = $this->db->get('center');
            if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $row;
			}
			return false;
        } else {
			$query = $this->db->get_where('center', array('center_code' => $center_code));
			return $query->row_array();
		}
    }
    public function approve_order($id)
    {
        $data = array(
            'order_status' => 'Approved',
        );
            $this->db->where('order_id', $id);
            return $this->db->update('orders', $data);
    }
    public function reject_order($id)
    {
        $data =array(
            'order_status' => 'Rejected',
        );
        $this->db->where('order_id', $id);
        return $this->db->update('orders', $data);
    }

}