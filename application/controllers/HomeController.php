
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
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
	public function index()
	{
		$data['slider'] = $this->db->get("slider", 5)->result();
		$data['about'] = $this->db->get("about")->result();
		$this->load->view('frontend/index', $data);
	}
	public function mission()
	{
		$this->load->view('frontend/mission');
	}
	public function director_message()
	{
		$this->load->view('frontend/director-message');
	}
	public function chairman_message()
	{
		$this->load->view('frontend/chairman_message');
	}
	public function courses()
	{
		$this->load->view('frontend/courses');
	}
	public function course_table()
	{
		$this->load->view('frontend/5th-6th-course');
	}
	public function study()
	{
		$this->load->view('frontend/study');
	}

	public function contact_data()
	{
		$this->load->view('frontend/contact');
		if (isset($_POST['submit'])) {
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'subject' => $this->input->post('subject'),
				'message' => $this->input->post('message')
			);
			$check = $this->AdminModel->insert_contact($data);
			print_r($check);
			if ($check > 0) {
				$this->session->set_flashdata('contact_success', 'Successfully Contact Added...');
				redirect(base_url('frontend/contact'));
			} else {
				$this->session->set_flashdata('contact_success', 'Error in Contact fill Data...');
				redirect(base_url('frontend/contact'));
			}
		}
	}
	// public function registration()
	// {
	// 	$this->db->order_by('id', 'desc');
	// 	$data['sign'] = $this->AdminModel->registerdata();
	// 	$this->load->view('frontend/signup', $data);
	// }
	public function registration_form()
	{

		$this->load->view('frontend/signup');

		if (isset($_POST['submit'])) {
			$data = array(
				'name' => $this->input->post('name'),
				'father_name' => $this->input->post('father_name'),
				'mobile' => $this->input->post('mobile'),
				'parent_mobile' => $this->input->post('parent_mobile'),
				'student_class' => $this->input->post('student_class'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'dob' => $this->input->post('dob'),
				'course' => $this->input->post('course'),
				'address' => $this->input->post('address')
			);

			// print_r($data);exit();
			$response = $this->db->insert('registration', $data);
			
			if ($response) {
				
				$this->session->set_flashdata('register','Successfully Registered...');
				redirect(base_url('registration'));
			} else {
				$this->session->set_flashdata('register','Error in Register fill Data...');
				redirect(base_url('registration'));
			}
		}
	}
	public function login()
	{
		$this->load->view('frontend/login');
	}
	public function career()
	{
		$this->load->view('frontend/career');
	}
	public function syllabus()
	{
		$this->load->view('frontend/syllabus');
	}
	public function scholarship_form()
	{
		$this->load->view('frontend/scholarship');
	}
	public function hostel_facilities()
	{
		$this->load->view('frontend/facilities');
	}
	public function fees()
	{
		$this->load->view('frontend/fees');
	}
}
