<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UniversityIdController extends CI_Controller {

function __construct()
{parent::__construct();
	
	$this->load->model('UniversityIdModel');
	
}

function GetAllUniversityId()
{
	$result=$this->UniversityIdModel->GetAllUniversityId();
	
	echo json_encode($result);
}