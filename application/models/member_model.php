<?php
class Member_model extends CI_Model{

	public function addmember()
	{

		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password1 = $this->input->post('password1');
		$password2 = $this->input->post('password2');

		if($password1==$password2)
		{
			$sql = "INSERT INTO member(MEMBER_EMAIL,MEMBER_NAME,MEMBER_PASSWORD)VALUES(
        	".$this->db->escape($email).",
        	".$this->db->escape($username).",
        	".$this->db->escape(md5($password1))."
    		)";
    		//echo $sql;exit;
    		$this->db->query($sql);
		}
	}

	public function selectmember()
	{
		$query = $this->db->get('member');
		return $query->result();
	}

	public function read($member_id)
	{
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('MEMBER_ID',$member_id);
    	$query = $this->db->get();
    	if($query->num_rows() > 0)
    	{	
    		$data = $query->row();
    		return $data;
    	}else{
    		return FALSE;
    	}
	}

	public function editmember($member_id)
	{
		$email = $this->input->post('email');
		$username = $this->input->post('username');

		$sql = "UPDATE member SET MEMBER_EMAIL='$email' , MEMBER_NAME='$username' WHERE MEMBER_ID='$member_id' ";
    	//echo $sql;exit;
    	$this->db->query($sql);
	}

	public function delete($member_id)
	{
		$sql = "DELETE FROM member WHERE MEMBER_ID='$member_id' ";
    	//echo $sql;exit;
    	$this->db->query($sql);
	}

	public function addmember_img()
	{
		//echo '<pre>';print_r($_POST);echo '</pre>';
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = '2000';
		$config['max_width'] = '3000';
		$config['max_height'] = '3000';
		$config['encrypt_name'] = true;
		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload("fileToUpload"))
		{	
			echo $this->upload->display_errors();
		}
		else
		{
			$data = $this->upload->data();
			$filename = 'img/'.$data['file_name'];
			//echo $filename;exit;
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password1 = $this->input->post('password1');
			$password2 = $this->input->post('password2');

			if($password1==$password2)
			{
				$sql = "INSERT INTO member(MEMBER_EMAIL,MEMBER_NAME,MEMBER_PASSWORD,MEMBER_IMG)VALUES(
        		".$this->db->escape($email).",
        		".$this->db->escape($username).",
        		".$this->db->escape(md5($password1)).",
        		".$this->db->escape($filename)."
    			)";
    			//echo $sql;exit;
    			$this->db->query($sql);
			}
		}
	}
}
?>