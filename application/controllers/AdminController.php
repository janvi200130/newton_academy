<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function home()
	{
		$this->load->view('admin/index');
	}
	
	public function contact()
	{
		$this->db->order_by('id', 'desc');
		$data['contact'] = $this->db->get("contact")->result();
		$this->load->view('admin/contact', $data);
	}

	public function contact_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('contact');
		$this->session->set_flashdata("contact_deleted","successfully deleted");
		redirect(base_url('contact'));
	}

	public function add_slider()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
			$user_file_name = $_FILES['slider_image']['name'];
			$config['upload_path']          = 'assets/admin_assets/uploads/slider/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$destination="assets/admin_assets/uploads/slider/".$user_file_name;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
	
			if ( ! $this->upload->do_upload('slider_image'))
					{
							$error = array('error' => $this->upload->display_errors());
	
							echo $error['error'];
					}
					else
					{
				
				$data = array(
					'title' => $this->input->post('title'),
					'heading' => $this->input->post('heading'),
					'slider_image' => $user_file_name
				);
				$this->db->insert('slider', $data);
	
				$last_id = $this->db->insert_id();
				if ($last_id > 0) {
					$this->session->set_flashdata('slider_img','Successfully slider Image Added...');
					redirect(base_url('add-slider'));
				} else {
					$this->session->set_flashdata('error','Error in Slider Image Uploading...');
					redirect(base_url('add-slider'));
				}
			}
			
		}
		$this->load->view('admin/slider_add');
		}
	

	public function show_slider()
	{
		$this->db->order_by('id', 'desc');
		$data['slider'] = $this->db->get("slider")->result();
		$this->load->view('admin/slider_show', $data);
	}
	
	public function slider_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('slider');
		$this->session->set_flashdata("slider_deleted","successfully deleted");
		redirect(base_url('show-slider'));
	}

	public function edit_slider()
	{
		$id=$this->input->get('id');
        $data['slider']=$this->AdminModel->update_slider($id);
        $this->load->view('admin/final-edit-slider',$data);
	}

	public function final_edit_slider()
	{
		$id=$this->input->post('id');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
			$user_file_name = $_FILES['slider_image']['name'];
			$config['upload_path']          = 'assets/admin_assets/uploads/slider/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$destination="assets/admin_assets/uploads/slider/".$user_file_name;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
	
			if ( ! $this->upload->do_upload('slider_image'))
					{
							$error = array('error' => $this->upload->display_errors());
	
							echo $error['error'];
					}
					else
					{
					$data=array(
						'heading' =>$this->input->post('heading'),
						'title' =>$this->input->post('title'),
						'slider_image' => $user_file_name
					);
					$check=$this->AdminModel->slider_final_update($id,$data);
					if ($check>0) {
						$this->session->set_flashdata('edit_slider','Successfully Updated...');
						redirect(base_url('show-slider'));
					}else{
						$this->session->set_flashdata('edit_slider','Error in Updated...');
						redirect(base_url('show-slider'));
					}	
				}
			}
		}
	
	public function add_gallery()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
			$user_file_name = $_FILES['gallery_image']['name'];
			$config['upload_path']          = 'assets/admin_assets/uploads/gallery/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$destination="assets/admin_assets/uploads/gallery/".$user_file_name;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
	
			if ( ! $this->upload->do_upload('gallery_image'))
					{
							$error = array('error' => $this->upload->display_errors());
	
							echo $error['error'];
					}
					else
					{
				
				$data = array(
					'gallery_image' => $user_file_name
				);
				$this->db->insert('gallery', $data);
	
				$last_id = $this->db->insert_id();
				if ($last_id > 0) {
					$this->session->set_flashdata('success_image','Successfully Gallery Image Added...');
					redirect(base_url('add-gallery'));
				} else {
					$this->session->set_flashdata('success_image','Error in Slider Gallery Uploading...');
					redirect(base_url('add-gallery'));
				}
			}
			
		}
		$this->load->view('admin/add-gallery');
	}

	public function show_gallery()
	{
		$this->db->order_by('id', 'desc');
		$data['gallery'] = $this->db->get("gallery")->result();
		$this->load->view('admin/show-gallery', $data);
	}
	public function gallery_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('gallery');
		$this->session->set_flashdata("gallery_deleted","successfully deleted");
		redirect(base_url('show-gallery'));
	}

	public function show_about()
	{
		$this->db->order_by('id', 'desc');
		$data['about'] = $this->db->get("about")->result();
		$this->load->view('admin/show-about', $data);
	}
	public function edit_about()
	{
		$id=$this->input->get('id');
        $data['about']=$this->AdminModel->update_about($id);
        $this->load->view('admin/final-edit-about',$data);
	}

	public function final_edit_about()
	{
		$id=$this->input->post('id');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
			$user_file_name = $_FILES['about_image']['name'];
			$config['upload_path']          = 'assets/admin_assets/uploads/about/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$destination="assets/admin_assets/uploads/about/".$user_file_name;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
	
			if ( ! $this->upload->do_upload('about_image'))
					{
							$error = array('error' => $this->upload->display_errors());
	
							echo $error['error'];
					}
					else
					{
					$data=array(
						'content' =>$this->input->post('content'),
						'about_image' => $user_file_name
					);
					$check=$this->AdminModel->about_final_update($id,$data);
					if ($check>0) {
						$this->session->set_flashdata('edit_about','Successfully Updated...');
						redirect(base_url('show-about'));
					}else{
						$this->session->set_flashdata('edit_about','Error in Updated...');
						redirect(base_url('show-about'));
					}	
				}
			}
		}

}