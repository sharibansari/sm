<?php

  class EmployeeController {

    private $employeeModel;

    function __construct() {
      $this->employeeModel = new Employee();
    }

    public function index() {
      require_once('views/employee/index.php');
    }

    public function getUsers() {
      $employees = $this->employeeModel->all();
      echo json_encode(
        array(
          'data' => $employees
        )
      );
    }

    public function getUserDetails() {
      $userId = $_GET['user_id'];
      if(is_numeric($userId)) {
        $employee = $this->employeeModel->id($userId);
        require_once('views/employee/employee_details.php');
      }
    }
  }
