<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Custom_model');
	}

	/**
	 * Custom template page, renders fields for user input
	 */
	public function custom()
	{
		$this->load->view('header');
		$this->load->view('template_body');
		$this->load->view('footer');
	}

	/**
	 * Publish method, handles user input, creates url, saves to db
	 */
	public function publish()
	{
		if($this->input->post()) 
		{
			$input_data = $this->input->post();
			if(!empty($input_data['to']) && !empty($input_data['from']) && !empty($input_data['message']))
			{
				var_dump($input_data);
			}
			else
			{
				echo 'missing';
			}
			
		}
		else
			redirect(base_url());
	}
}

/* End of file process.php */
/* Location: ./application/controllers/process.php */