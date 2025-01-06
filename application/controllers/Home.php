<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $page_data['page_title']='आळंदी-मुक्ता-वेबसाईट';
        $page_data['page']='home';
		$this->load->view('index',$page_data);
	}

    public function aboutus()
	{
        $page_data['page_title']='About Us';
        $page_data['page']='aboutus';
		$this->load->view('index',$page_data);
	}

    public function menu()
	{
        $page_data['page_title']='Menu';
        $page_data['page']='menu';
		$this->load->view('index',$page_data);
	}
    public function events()
	{
        $page_data['page_title']='Events';
        $page_data['page']='events';
		$this->load->view('index',$page_data);
	}
    public function commitee()
	{
        $page_data['page_title']='Commitee';
        $page_data['page']='commitee';
		$this->load->view('index',$page_data);
	}
    public function gallary()
	{
        $page_data['page_title']='Gallary';
        $page_data['page']='gallary';
		$this->load->view('index',$page_data);
	}
    public function contact()
	{
        $page_data['page_title']='Contact Us';
        $page_data['page']='contact';
		$this->load->view('index',$page_data);
	}

	public function contactForm()
{
    // Check if the request is POST
    if ($this->input->server('REQUEST_METHOD') === 'POST') {
        // Get form data using $this->input->post() in CI3
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        
        // Basic validation (you can add more)
        if (empty($name) || empty($email) || empty($message)) {
            $this->session->set_flashdata('error', 'All fields are required.');
            return redirect('home/contact');  // Redirect back to the contact form
        }

        // Load the email library with configuration
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',  // Gmail SMTP server
            'smtp_port' => 587,  // SMTP port for Gmail
            'smtp_user' => 'muktabhosale3@gmail.com',  // Your Gmail address
            'smtp_pass' => 'your-app-password',  // App password if 2FA is enabled
            'smtp_crypto' => 'tls',  // Encryption type
            'mailtype' => 'html',  // Email format
            'charset' => 'utf-8',  // Character set
            'wordwrap' => TRUE,  // Word wrap
        ];

        $this->load->library('email', $config);

        // Prepare email details
        $this->email->from($email, $name);  // Sender's email and name
        $this->email->to('muktabhosale3@gmail.com');  // Recipient email
        $this->email->subject('Contact Form Submission: ' . $subject);  // Email subject
        $this->email->message($message);  // Email message

        // Send email and check if successful
        if ($this->email->send()) {
            $this->session->set_flashdata('success', 'Thank you for contacting us!');
        } else {
            $this->session->set_flashdata('error', 'Unable to send the email. Please try again later.');
            log_message('error', 'Email sending failed: ' . $this->email->print_debugger());
        }

        // Redirect back to the contact page after processing the form
        return redirect('home/contact');
    } else {
        // If not a POST request, load the contact form page
        $page_data['page_title'] = 'Contact Form';
        $page_data['page'] = 'contact';
        $this->load->view('index', $page_data);
    }
}


    public function booktable()
	{
        $page_data['page_title']='Book Table';
        $page_data['page']='booktable';
		$this->load->view('index',$page_data);
	}


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

}
