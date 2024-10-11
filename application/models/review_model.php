<?php

class review_model extends CI_Model
{
    public function insert_review($data){

        $this->db->insert('review',$data);
        return $this->db->insert_id();
        

    }

    public function showrreview_data(){
        $query = $this->db->get('review');
        return $query->result();

    }

    public function review_data($id){
        $querry = $this ->db->get_where('review',array('review_id_pk'=>$id));
        return $querry->row();
    }

    public function product_review_data($id){
        $this->db->select('r.*,u.u_name');
        $this->db->from('review r');
        $this->db->where(array('p_id_fk'=>$id));
        $this->db->join('user_master u','u.u_id_pk=r.u_id_fk');
        $querry = $this->db->get();
        return $querry->result();
    }

    public function product_review_count($id){
        $this->db->select_avg('rating');
        $result = $this->db->get('review')->row();  
        return $result->rating;
    }

    public function update_review($id,$data){
         $this ->db->where('review_id_pk',$id);
         $this->db->update('review',$data);

        }
        public function delete_review($id){
            $this ->db->where('review_id_pk',$id);
            $this->db->delete('review');
        }
    }
