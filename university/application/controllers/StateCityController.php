<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StateCityController extends CI_Controller {

function __construct()
{parent::__construct();
	
	$this->load->model('StateCityModel');
	
}

function GetAllState()
{
	$result=$this->StateCityModel->GetAllState();
	
	echo json_encode($result);
}

function GetAllCity()
{
	$state=$_GET['state'];
	
	$result=$this->StateCityModel->GetAllCity($state);
	
	echo json_encode($result);
}
}