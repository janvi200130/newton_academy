<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

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
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}

		$this->load->view('admin/index');
	}
	public function login()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$email = $this->input->post("email");
			$password = $this->input->post("password");


			$login_data = $this->AdminModel->login_db($email, $password);

			if ($login_data > 0) {
				foreach ($login_data as $key) {
					$_SESSION['email'] = $key->email;
					$_SESSION['password'] = $key->password;
				}
				redirect("dashboard?success");
			} else {
				redirect("admin?direct_Access");
			}
		}

		$this->load->view("admin/login");
	}

	public function logout()
	{
		session_destroy();
		redirect("admin?logout");
	}

	public function sign_up()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['regist'] = $this->db->get("registration")->result();
		$this->load->view('admin/registration', $data);
	}
	public function sign_delete($id)
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->where('id', $id);
		$this->db->delete('registration');
		$this->session->set_flashdata("delete_regist", "successfully deleted");
		redirect(base_url('sign-up'));
	}
	public function enquiry()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['enquiry'] = $this->db->get("enquiry")->result();
		$this->load->view('admin/enquiry', $data);
	}
	public function enquiry_delete($id)
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->where('id', $id);
		$this->db->delete('enquiry');
		$this->session->set_flashdata("delete_enquiry", "successfully deleted");
		redirect(base_url('enquiries'));
	}

	public function address1()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['address1'] = $this->db->get("address1")->result();
		$this->load->view('admin/address1', $data);
	}

	public function edit_address1()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->get('id');
		$data['address1'] = $this->AdminModel->update_address1($id);
		$this->load->view('admin/final-edit-address1', $data);
	}

	public function final_edit_address1()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}

		$id = $this->input->post('id');
		$data = array(
			'office_name' => $this->input->post('office_name'),
			'address' => $this->input->post('address'),
			'email' => $this->input->post('email'),
			'mobile_no' => $this->input->post('mobile_no')
		);
		$check = $this->AdminModel->address1_final_update($id, $data);
		if ($check > 0) {
			$this->session->set_flashdata('edit_address1', 'Successfully Updated...');
			redirect(base_url('address1'));
		} else {
			$this->session->set_flashdata('edit_address1', 'Error in Updated...');
			redirect(base_url('address1'));
		}
	}

	public function address2()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['address2'] = $this->db->get("address2")->result();
		$this->load->view('admin/address2', $data);
	}

	public function edit_address2()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->get('id');
		$data['address2'] = $this->AdminModel->update_address2($id);
		$this->load->view('admin/final-edit-address2', $data);
	}

	public function final_edit_address2()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->post('id');

		$data = array(
			'office_name' => $this->input->post('office_name'),
			'address' => $this->input->post('address'),
			'email' => $this->input->post('email'),
			'mobile_no' => $this->input->post('mobile_no')
		);
		$check = $this->AdminModel->address2_final_update($id, $data);
		if ($check > 0) {
			$this->session->set_flashdata('edit_address2', 'Successfully Updated...');
			redirect(base_url('address2'));
		} else {
			$this->session->set_flashdata('edit_address2', 'Error in Updated...');
			redirect(base_url('address2'));
		}
	}


	public function contact()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['contact'] = $this->db->get("contact")->result();
		$this->load->view('admin/contact', $data);
	}

	public function contact_delete($id)
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->where('id', $id);
		$this->db->delete('contact');
		$this->session->set_flashdata("contact_deleted", "successfully deleted");
		redirect(base_url('contact'));
	}

	public function add_slider()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$user_file_name = $_FILES['slider_image']['name'];
			$config['upload_path']          = 'assets/admin_assets/uploads/slider/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$destination = "assets/admin_assets/uploads/slider/" . $user_file_name;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('slider_image')) {
				$error = array('error' => $this->upload->display_errors());

				echo $error['error'];
			} else {

				$data = array(
					'title' => $this->input->post('title'),
					'heading' => $this->input->post('heading'),
					'slider_image' => $user_file_name
				);
				$this->db->insert('slider', $data);

				$last_id = $this->db->insert_id();
				if ($last_id > 0) {
					$this->session->set_flashdata('slider_img', 'Successfully slider Image Added...');
					redirect(base_url('add-slider'));
				} else {
					$this->session->set_flashdata('error', 'Error in Slider Image Uploading...');
					redirect(base_url('add-slider'));
				}
			}
		}
		$this->load->view('admin/slider_add');
	}


	public function show_slider()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['slider'] = $this->db->get("slider")->result();
		$this->load->view('admin/slider_show', $data);
	}

	public function slider_delete($id)
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->where('id', $id);
		$this->db->delete('slider');
		$this->session->set_flashdata("slider_deleted", "successfully deleted");
		redirect(base_url('show-slider'));
	}

	public function edit_slider()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->get('id');
		$data['slider'] = $this->AdminModel->update_slider($id);
		$this->load->view('admin/final-edit-slider', $data);
	}

	public function final_edit_slider()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->post('id');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$user_file_name = $_FILES['slider_image']['name'];
			$config['upload_path']          = 'assets/admin_assets/uploads/slider/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$destination = "assets/admin_assets/uploads/slider/" . $user_file_name;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('slider_image')) {
				$error = array('error' => $this->upload->display_errors());

				echo $error['error'];
			} else {
				$data = array(
					'heading' => $this->input->post('heading'),
					'title' => $this->input->post('title'),
					'slider_image' => $user_file_name
				);
				$check = $this->AdminModel->slider_final_update($id, $data);
				if ($check > 0) {
					$this->session->set_flashdata('edit_slider', 'Successfully Updated...');
					redirect(base_url('show-slider'));
				} else {
					$this->session->set_flashdata('edit_slider', 'Error in Updated...');
					redirect(base_url('show-slider'));
				}
			}
		}
	}

	public function add_gallery()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$user_file_name = $_FILES['gallery_image']['name'];
			$config['upload_path']          = 'assets/admin_assets/uploads/gallery/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$destination = "assets/admin_assets/uploads/gallery/" . $user_file_name;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('gallery_image')) {
				$error = array('error' => $this->upload->display_errors());

				echo $error['error'];
			} else {

				$data = array(
					'gallery_image' => $user_file_name
				);
				$this->db->insert('gallery', $data);

				$last_id = $this->db->insert_id();
				if ($last_id > 0) {
					$this->session->set_flashdata('success_image', 'Successfully Gallery Image Added...');
					redirect(base_url('add-gallery'));
				} else {
					$this->session->set_flashdata('success_image', 'Error in Slider Gallery Uploading...');
					redirect(base_url('add-gallery'));
				}
			}
		}
		$this->load->view('admin/add-gallery');
	}

	public function show_gallery()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['gallery'] = $this->db->get("gallery")->result();
		$this->load->view('admin/show-gallery', $data);
	}
	public function gallery_delete($id)
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->where('id', $id);
		$this->db->delete('gallery');
		$this->session->set_flashdata("gallery_deleted", "successfully deleted");
		redirect(base_url('show-gallery'));
	}

	public function show_about()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['about'] = $this->db->get("about")->result();
		$this->load->view('admin/show-about', $data);
	}
	public function edit_about()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->get('id');
		$data['about'] = $this->AdminModel->update_about($id);
		$this->load->view('admin/final-edit-about', $data);
	}

	public function final_edit_about()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->post('id');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$user_file_name = $_FILES['about_image']['name'];
			$config['upload_path']          = 'assets/admin_assets/uploads/about/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$destination = "assets/admin_assets/uploads/about/" . $user_file_name;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('about_image')) {
				$error = array('error' => $this->upload->display_errors());

				echo $error['error'];
			} else {
				$data = array(
					'content' => $this->input->post('content'),
					'about_image' => $user_file_name
				);
				$check = $this->AdminModel->about_final_update($id, $data);
				if ($check > 0) {
					$this->session->set_flashdata('edit_about', 'Successfully Updated...');
					redirect(base_url('show-about'));
				} else {
					$this->session->set_flashdata('edit_about', 'Error in Updated...');
					redirect(base_url('show-about'));
				}
			}
		}
	}


	public function show_counter()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['count'] = $this->db->get("counter")->result();
		$this->load->view('admin/show-counter', $data);
	}

	public function edit_counter()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->get('id');
		$data['count'] = $this->AdminModel->update_counter($id);
		$this->load->view('admin/final-edit-counter', $data);
	}

	public function final_edit_counter()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->post('id');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$user_file_name = $_FILES['counter_image']['name'];
			$config['upload_path']          = 'assets/admin_assets/uploads/counter/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$destination = "assets/admin_assets/uploads/counter/" . $user_file_name;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('counter_image')) {
				$error = array('error' => $this->upload->display_errors());

				echo $error['error'];
			} else {
				$data = array(
					'counter_image' => $user_file_name,
					'counter' => $this->input->post('counter'),
					'heading' => $this->input->post('heading')
				);
				$check = $this->AdminModel->counter_final_update($id, $data);
				if ($check > 0) {
					$this->session->set_flashdata('edit_counter', 'Successfully Updated...');
					redirect(base_url('show-counter'));
				} else {
					$this->session->set_flashdata('error', 'Error in Updated...');
					redirect(base_url('show-counter'));
				}
			}
		}
	}

	public function director_msg()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$data['message'] = $this->db->get("director")->result();
		$this->load->view('admin/director-message', $data);
	}

	public function edit_director()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->get('id');
		$data['message'] = $this->AdminModel->update_director($id);
		$this->load->view('admin/final-edit-director', $data);
	}

	public function final_edit_director()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->post('id');
		$data = array(
			'd_message' => $this->input->post('d_message'),
			'd_name' => $this->input->post('d_name')
		);
		$check = $this->AdminModel->director_final_update($id, $data);
		if ($check > 0) {
			$this->session->set_flashdata('edit_director', 'Successfully Updated...');
			redirect(base_url('director-msg'));
		} else {
			$this->session->set_flashdata('error', 'Error in Updated...');
			redirect(base_url('director-msg'));
		}
	}


	public function chairman_msg()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['message'] = $this->db->get("chairman")->result();
		$this->load->view('admin/chairman-message', $data);
	}

	public function edit_chairman()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->get('id');
		$data['message'] = $this->AdminModel->update_chairman($id);
		$this->load->view('admin/final-edit-chairman', $data);
	}

	public function final_edit_chairman()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->post('id');
		$data = array(
			'c_message' => $this->input->post('c_message'),
			'c_name' => $this->input->post('c_name')
		);
		$check = $this->AdminModel->chairman_final_update($id, $data);
		if ($check > 0) {
			$this->session->set_flashdata('edit_chairman', 'Successfully Updated...');
			redirect(base_url('chairman-msg'));
		} else {
			$this->session->set_flashdata('error', 'Error in Updated...');
			redirect(base_url('chairman-msg'));
		}
	}

	public function add_vission()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->load->view('admin/add-vission');

		if (isset($_POST['submit'])) {
			$data = array(
				'title' => $this->input->post('title')
			);
			$this->db->insert('vission', $data);

			$last_id = $this->db->insert_id();
			if ($last_id > 0) {
				$this->session->set_flashdata('success_vission', 'Successfully Vission Added...');
				redirect(base_url('add-vission'));
			} else {
				$this->session->set_flashdata('error', 'Error In Vission Uploading...');
				redirect(base_url('add-vission'));
			}
		}
	}
	public function show_vission()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['vission'] = $this->db->get("vission")->result();
		$this->load->view('admin/show-vission', $data);
	}

	public function edit_vission()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->get('id');
		$data['vission'] = $this->AdminModel->update_vission($id);
		$this->load->view('admin/final-edit-vission', $data);
	}

	public function final_edit_vission()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->post('id');
		$data = array(
			'title' => $this->input->post('title')
		);
		$check = $this->AdminModel->vission_final_update($id, $data);
		if ($check > 0) {
			$this->session->set_flashdata('edit_vission', 'Successfully Updated...');
			redirect(base_url('show-vission'));
		} else {
			$this->session->set_flashdata('error', 'Error in Updated...');
			redirect(base_url('show-vission'));
		}
	}
	public function add_mission()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->load->view('admin/add-mission');

		if (isset($_POST['submit'])) {
			$data = array(
				'title' => $this->input->post('title')
			);
			$this->db->insert('mission', $data);

			$last_id = $this->db->insert_id();
			if ($last_id > 0) {
				$this->session->set_flashdata('success_mission', 'Successfully Mission Added...');
				redirect(base_url('add-mission'));
			} else {
				$this->session->set_flashdata('error', 'Error In Mission Uploading...');
				redirect(base_url('add-mission'));
			}
		}
	}
	public function show_mission()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->order_by('id', 'desc');
		$data['mission'] = $this->db->get("mission")->result();
		$this->load->view('admin/show-mission', $data);
	}

	public function edit_mission()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->get('id');
		$data['mission'] = $this->AdminModel->update_mission($id);
		$this->load->view('admin/final-edit-mission', $data);
	}

	public function final_edit_mission()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->post('id');
		$data = array(
			'title' => $this->input->post('title')
		);
		$check = $this->AdminModel->mission_final_update($id, $data);
		if ($check > 0) {
			$this->session->set_flashdata('edit_mission', 'Successfully Updated...');
			redirect(base_url('show-mission'));
		} else {
			$this->session->set_flashdata('error', 'Error in Updated...');
			redirect(base_url('show-mission'));
		}
	}

	public function add_testimonial()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->load->view('admin/add-testimonial');

		if (isset($_POST['submit'])) {
			$data = array(
				'name' => $this->input->post('name'),
				'designation' => $this->input->post('designation'),
				'comment' => $this->input->post('comment')
			);
			$this->db->insert('testimonial', $data);

			$last_id = $this->db->insert_id();
			if ($last_id > 0) {
				$this->session->set_flashdata('success_test', 'Successfully Testimonial Added...');
				redirect(base_url('add-testimonial'));
			} else {
				$this->session->set_flashdata('error', 'Error In Testimonial Uploading...');
				redirect(base_url('add-testimonial'));
			}
		}
	}

	public function show_testimonial()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$data['test'] = $this->db->get("testimonial")->result();
		$this->load->view('admin/show-testimonial', $data);
	}

	public function test_delete($id)
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->where('id', $id);
		$this->db->delete('testimonial');
		$this->session->set_flashdata("delete_test", "successfully deleted");
		redirect(base_url('show-testimonial'));
	}

	public function edit_test()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->get('id');
		$data['test'] = $this->AdminModel->update_testimonial($id);
		$this->load->view('admin/final-edit-test', $data);
	}

	public function final_edit_test()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$id = $this->input->post('id');

		$data = array(
			'name' => $this->input->post('name'),
			'designation' => $this->input->post('designation'),
			'comment' => $this->input->post('comment')
		);

		$check = $this->AdminModel->testimonial_final_update($id, $data);
		if ($check > 0) {
			$this->session->set_flashdata('edit_testi', 'Successfully Updated...');
			redirect(base_url('show-testimonial'));
		} else {
			$this->session->set_flashdata('edit_testi', 'Error in Updated...');
			redirect(base_url('show-testimonial'));
		}
	}

	public function facilities()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$user_file_name = $_FILES['facility_image']['name'];
			$config['upload_path']          = 'assets/admin_assets/uploads/facility/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$destination = "assets/admin_assets/uploads/facility/" . $user_file_name;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('facility_image')) {
				$error = array('error' => $this->upload->display_errors());

				echo $error['error'];
			} else {

				$data = array(
					'content' => $this->input->post('content'),
					'facility_image' => $user_file_name
				);
				$this->db->insert('facility', $data);

				$last_id = $this->db->insert_id();
				if ($last_id > 0) {
					$this->session->set_flashdata('facility', 'Successfully Added...');
					redirect(base_url('facility'));
				} else {
					$this->session->set_flashdata('error', 'Error in Uploading...');
					redirect(base_url('facility'));
				}
			}
		}
		$this->load->view('admin/facility');
	}
	public function show_facility()
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$data['fac'] = $this->db->get("facility")->result();
		$this->load->view('admin/show-facility', $data);
	}
	public function facility_delete($id)
	{
		if ($_SESSION['email'] == '') {
			return redirect('admin?redirect');
		}
		$this->db->where('id', $id);
		$this->db->delete('facility');
		$this->session->set_flashdata("delete_facility", "successfully deleted");
		redirect(base_url('show-facility'));
	}



	// exam portal functions
	public function add_course()
	{
		$this->load->view('admin/add_course');
	}


	public function all_course()
	{
		$this->load->view('admin/all_course');
	}


	public function add_exam()
	{
		$this->load->view('admin/add_course');
	}

	public function all_exam()
	{
		$this->load->view('admin/all_exam');
	}

	public function all_question(){
		$this->load->view('admin/all_question');
	}
	

}
