<?php

class wishlist_model extends CI_Model
{
    public function insert_wishlist($data){

        $this->db->insert('wishlist',$data);
        return $this->db->insert_id();
        

    }

    public function showwishlist_data(){
        $query = $this->db->get('wishlistt');
        return $query->result();

    }

    public function wishlist_data($id){
        $querry = $this ->db->get_where('wishlist',array('w_id_pk'=>$id));
        return $querry->row();
    }

    public function user_wishlist_data($id){
        $querry = $this ->db->get_where('wishlist',array('u_id_fk'=>$id));
        return $querry->result();
    }

    public function update_wishlist($id,$data){
         $this ->db->where('w_id_pk',$id);
         $this->db->update('wishlist',$data);

        }
        public function delete_wishlist($id){
            $this ->db->where('w_id_pk',$id);
            $this->db->delete('wishlist');
        }

        public function delete_product_wishlist($id){
            $this ->db->where(array('p_id_fk'=>$id,'u_id_fk'=>$_SESSION['u_id']));
            $this->db->delete('wishlist');
        }
    }
