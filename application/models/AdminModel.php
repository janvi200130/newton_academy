
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

   

class AdminModel extends CI_Model
{

    public function insert_contact($data)
	{
		$this->db->insert("contact", $data);
		$q = $this->db->insert_id();
		return $q;
	}
    public function contactdata()
	{
		$data = $this->db->query("select * from contact")->result();
		return $data;
	}
    
    public function insert_data($data)
	{
		$this->db->insert("registration", $data);
		$q = $this->db->insert_id();
		return $q;
	}
    public function registerdata()
	{
		$data = $this->db->query("select * from registration")->result();
		return $data;
	}

    public function update_about($id)
    {
        $q=$this->db->where("id",$id)->get("about")->result();
        return $q;
    }
    
    public function about_final_update($id,$data)
    {
        $con=$this->db->where("id",$id)->update("about",$data);
        return $con;
    }
    public function update_slider($id)
    {
        $q=$this->db->where("id",$id)->get("slider")->result();
        return $q;
    }
    
    public function slider_final_update($id,$data)
    {
        $con=$this->db->where("id",$id)->update("slider",$data);
        return $con;
    }

    public function update_counter($id)
    {
        $q=$this->db->where("id",$id)->get("counter")->result();
        return $q;
    }
    
    public function counter_final_update($id,$data)
    {
        $con=$this->db->where("id",$id)->update("counter",$data);
        return $con;
    }
    public function update_director($id)
    {
        $q=$this->db->where("id",$id)->get("director")->result();
        return $q;
    }
    
    public function director_final_update($id,$data)
    {
        $con=$this->db->where("id",$id)->update("director",$data);
        return $con;
    }
    public function update_chairman($id)
    {
        $q=$this->db->where("id",$id)->get("chairman")->result();
        return $q;
    }
    
    public function chairman_final_update($id,$data)
    {
        $con=$this->db->where("id",$id)->update("chairman",$data);
        return $con;
    }

    public function update_testimonial($id)
    {
        $q=$this->db->where("id",$id)->get("testimonial")->result();
        return $q;
    }
    
    public function testimonial_final_update($id,$data)
    {
        $con=$this->db->where("id",$id)->update("testimonial",$data);
        return $con;
    }



}