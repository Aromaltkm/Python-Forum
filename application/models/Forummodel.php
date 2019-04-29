 <?php 
/**
* 
*/
class Forummodel extends CI_model
{
	
	public function registeruser($credentials)
	{		
		if($this->db->insert('user',$credentials)){
			return true;
		}
		else{
			return false;
		}
	}
	public function verifyCredential($credentials)
	{
		$this->db->select('*');
		$this->db->where($credentials);
		$query=$this->db->get('user');
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}
	public function submitQuestion($question_data){
		if($this->db->insert('questions',$question_data)){
			return true;
		}else{
			return false;
		}
	}
	public function countQuestions()
	{
		$query=$this->db->get('questions');
		if(!empty($query->num_rows())){
			return $query->num_rows();
		}else{
			return 0;
		}
	}
	public function listQuestions($limit,$start)
	{
		// var_dump($limit);
		// var_dump($start);die;
		$this->db->select('*');
		$this->db->limit($limit,$start);
		$query=$this->db->get('questions');
		if(empty($query->result())){
			return false;
		}else{
			return $query->result();
		}
	}
	public function viewQuestion($id){
		$this->db->select('*');
		$this->db->where('id',$id);
		$query=$this->db->get('questions');
		return $query->result();
	}
	// public function listanswer($id){
	// 	$this->db->select('*');
	// 	$this->db->where('question_id',$id);
	// 	$query=$this->db->get('answers');
	// 	return $query->result();	
	// }
	// public function countAnswers($id)
	// {
	// 	$this->db->select('*');
	// 	$this->db->where('question_id',$id);
	// 	$query=$this->db->get('answers');
	// 	if(!empty($query->num_rows())){
	// 		return $query->num_rows();
	// 	}else{
	// 		return 0;
	// 	}
	// }
	public function listAnswers($id)
	{
		// var_dump($limit);
		// var_dump($start);die;
		$this->db->select('*');
		$this->db->where('question_id',$id);
		$query=$this->db->get('answers');
		if(empty($query->result())){
			return false;
		}else{
			return $query->result();
		}
	}
	public function submitAnswer($answer_data){
		if($this->db->insert('answers',$answer_data)){
			
			return true;
		}else{
			return false;
		}	
	}
	public function incrementView($id){
		$this->db->where('id', $id);
		$this->db->set('view_count','view_count + 1',FALSE);
		$this->db->update('questions');
	}
	public function QuestionLike($credentials){
		if($this->db->insert('likes',$credentials))	{
			
			$this->db->where('id', $credentials['question_id']);
			$this->db->set('like_count', 'like_count+1',FALSE);
			if($this->db->update('questions')){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	public function AnswerLike($credentials){
		if($this->db->insert('likes',$credentials))	{
			
			$this->db->where('id', $credentials['answer_id']);
			$this->db->set('like_count', 'like_count+1',FALSE);
			if($this->db->update('answers')){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	public function fullTextSearch($credentials){
		$this->db->select('*');
		$this->db->where('MATCH (title) AGAINST ("'.$credentials['keyword'].'")',NULL,FALSE);
		$query=$this->db->get('questions');
		if(!empty($query->result())){
			return $query->result();
		}else{
			return false;
		}
	}
}

 ?>