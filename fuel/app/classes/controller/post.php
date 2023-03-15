<?php


class Controller_Post extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index' => 'active');
		$this->template->title = 'Post &raquo; Index';
		$this->template->content = View::forge('post/index', $data);
	}

}