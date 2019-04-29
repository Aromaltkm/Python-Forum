<?php 

/**
* 
*/
class ForumController extends CI_Controller
{
	
	public function home()
	{
		if($this->session->userdata('loggedin')){
			$this->load->library('pagination');
			$this->load->model('Forummodel');
			$page =$this->uri->segment(3);
			if(empty($page)){
				$page=0;
			}   
			$data['total_rows']=$this->Forummodel->countQuestions();
			$config['base_url'] = base_url()."index.php/forum/home";
			$config['per_page'] = 5;
			$config['uri_segment'] = 3;
			$config['total_rows']  = $data['total_rows'];
			$config["num_links"]   = 2;
			
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open'] = "<li>";
			$config['next_tagl_close'] = "</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] = "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";
			
			$this->pagination->initialize($config);

			$data['links']=$this->pagination->create_links();
			$data['results']=$this->Forummodel->listquestions($config['per_page'],$page);
			
			$this->load->view('home',$data);
		}
		else{
			redirect(base_url().'index.php/forum');
		}
	}

	public function login()
	{
		if($this->session->userdata('loggedin')){
			redirect(base_url().'index.php/forum/home');
		}else{
			if($this->input->post()  && $this->input->is_ajax_request()){
				
				$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
				$this->form_validation->set_rules('password', 'Password', 'required|max_length[100]|min_length[5]|trim');
				
				if($this->form_validation->run()==false){
					$result['status']="error";
					$result['message']=validation_errors();
				}else{
					$email=$this->input->post('email');
					$password=$this->input->post('password');
					$credentials=array(
							'email'=>$email,
							'password'=>$password,
						);

					$this->load->model('Forummodel');
					$details=$this->Forummodel->verifyCredential($credentials);
					// var_dump($details);die;
					if($details){

						if($this->registersession($details)){
							
							$result['status']="success";
							$result['redirect_url']=base_url()."index.php/forum/home";
						}
						else{
							
							$result['status']="error";
							$result['message']="Session cannot be created";
						}

					}else{
						$result['status']="error";
						$result['message']="Invalid username or password !!!";
					}
				}
				echo json_encode($result);
			}else{
				$this->load->library('pagination');
				$this->load->model('Forummodel');
				$page =$this->uri->segment(2);
				if(empty($page)){
					$page=0;
				}   
				$data['total_rows']=$this->Forummodel->countQuestions();
				$config['base_url'] = base_url()."index.php/forum";
				$config['per_page'] = 5;
				$config['uri_segment'] = 2;
				$config['total_rows']  = $data['total_rows'];
				$config["num_links"]   = 2;
				
				$config['full_tag_open'] = "<ul class='pagination'>";
				$config['full_tag_close'] ="</ul>";
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";
				
				$this->pagination->initialize($config);

				$data['links']=$this->pagination->create_links();
				$data['results']=$this->Forummodel->listquestions($config['per_page'],$page);
				
				$this->load->view('forum',$data);
			}
		}
	}



	public function registersession($credentials)
	{
		$session_data=array(
			'email'=>$credentials[0]->email,
			'uname'=>$credentials[0]->username,
			'user_id'=>$credentials[0]->id,
			'loggedin'=>true
		);
		$this->session->set_userdata($session_data);
		return true;
	}

		
	
	public function register()
	{
		
		if($this->input->post() && $this->input->is_ajax_request()){
			$this->form_validation->set_rules('username', 'Username', 'required|max_length[100]|min_length[5]|trim');
			$this->form_validation->set_rules('password', 'Password', 'required|max_length[100]|min_length[5]|trim');
			$this->form_validation->set_rules('conf_password','Confirm Password','required|matches[password]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			if($this->form_validation->run()==false){
				$result['status']="error";
				$result['message']=validation_errors();
			}else{
				$login_name=$this->input->post("username");
				$password=$this->input->post("password");
				$email=$this->input->post("email");
				$credentials=array(
					'username'=>$login_name,
					'email'=>$email,
					'password'=>$password,
					'creation_date'=>date('Y-m-d H:i:s')
				);
				$this->load->model('Forummodel');
				$email_credential=array(
						'email' => $credentials['email']
					);
				if(!$this->Forummodel->verifyCredential($email_credential)){
					if($this->Forummodel->registeruser($credentials)){
						$result['status']="success";
						$result['message']="Successfully created your account!";
					}else{
						$result['status']="error";
						$result['message']="Something went wrong!!!";
					}
				}else{
					$result['status']="error";
					$result['message']="Email already in use";
				}
			}
			echo json_encode($result);
		}else{
			$this->load->view('forum');
		}
	}
	public function logout(){
		$this->session->unset_userdata('loggedin');
		$this->session->unset_userdata('uname');
		$this->session->sess_destroy();
		redirect(base_url().'index.php/forum');
	} 

	public function postquestion()
	{
		if($this->input->post()  && $this->input->is_ajax_request()){
			$title=$this->input->post('title');
			$description=$this->input->post('description');
			$question_data=array(
				'title'=>$title,
				'question'=>$description,
				'submission_date'=>date('d-m-y H:i:S'),
				'user_id'=>$this->session->userdata('user_id')
			);
			$this->load->model('Forummodel');
			if($this->Forummodel->submitQuestion($question_data)){
				$result['status']="success";
			}else{
				$result['status']="error";
			}
			echo json_encode($result);
		}else{
			$this->load->view('home');
		}
	}
	public function answer(){
		if($this->session->userdata('loggedin')){
			$id=$this->uri->segment(3);
			$this->load->model('Forummodel');
			$this->Forummodel->incrementView($id);
			$data['results']=$this->Forummodel->listAnswers($id);
			$data['question']=$this->Forummodel->viewQuestion($id);			
			$this->load->view('answer',$data);
		}else{
			redirect(base_url().'index.php/forum');			
		}
	}
	
	public function findanswer()
	{
		if($this->input->is_ajax_request()){
			$id=$this->input->post('id');
			$this->load->model('Forummodel');
			$data['question']=$this->Forummodel->viewQuestion($id);
			$data['results']=$this->Forummodel->listanswer($id);
			$data['redirect_url']=base_url()."index.php/forum/answer";
			echo json_encode($data);
		}else{
			$this->load->view('home');
		}
	}
	public function postanswer()
	{
		if($this->input->post()  && $this->input->is_ajax_request()){
			$question_id=$this->input->post('question_id');
			$description=$this->input->post('description');
			$answer_data=array(
				'answer'=>$description,
				'question_id'=>$question_id,
				'submission_date'=>date('d-m-y H:i:S'),
				'user_id'=>$this->session->userdata('user_id'),
				'username'=>$this->session->userdata('uname'),
			);
			$this->load->model('Forummodel');
			if($this->Forummodel->submitAnswer($answer_data)){
				$result['status']="success";
			}else{
				$result['status']="error";
			}
			echo json_encode($result);
		}else{
			$this->load->view('home');
		}
	}
	public function incrementQuestionlike(){
		if($this->input->post()  && $this->input->is_ajax_request()){
			$user_id=$this->session->userdata('user_id');
			$question_id=$this->input->post('question_id');	
			$credentials=array(
				'user_id'=>$user_id,
				'question_id'=>$question_id,
				'isanswer'=>0,
				'like_date'=>date('Y-m-d')
			);
			$this->load->model('Forummodel');
			if($this->Forummodel->QuestionLike($credentials)){
				$data['status']="success";
			}else{
				$data['status']="fail";
			}
			echo json_encode($data);
		}else{
			$this->load->view('home');
		}

	}
	public function incrementAnswerlike(){
		if($this->input->post()  && $this->input->is_ajax_request()){
			$user_id=$this->session->userdata('user_id');
			$answer_id=$this->input->post('id');	
			$credentials=array(
				'user_id'=>$user_id,
				'answer_id'=>$answer_id,
				'isanswer'=>1,
				'like_date'=>date('Y-m-d')
			);
			$this->load->model('Forummodel');
			if($this->Forummodel->AnswerLike($credentials)){
				$data['status']="success";
			}else{
				$data['status']="fail";
			}
			echo json_encode($data);
		}else{
			$this->load->view('home');
		}

	}
	public function fullTextSearchAction()
	{
		$keyword=$this->input->post('keyword');
		$credentials['keyword']=$keyword;
		$this->load->model('Forummodel');
		$data['results']=$this->Forummodel->fullTextSearch($credentials);
		if($data['results']){
			$data['status']="success";
			
		}else{
			$data['status']="fail";			
		}
		echo json_encode($data);
	}
}


?>