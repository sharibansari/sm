<?php
  class Employee {
    public function all() {
      $list = array();
      $db = Db::getInstance();
      $req = $db->query('
        SELECT user_id, first_name, last_name, email, role, department
          FROM user;
      ');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = array(
          $post['first_name'],
          $post['last_name'],
          $post['email'],
          $post['role'],
          $post['department'],
          '<a class="fancybox.ajax employee_link" href="/~sharibco/?controller=employee&action=getUserDetails&user_id='
           . $post['user_id'] . '">More</a>'
        );
      }

      return $list;
    }

    public function id($id) {
      $db = Db::getInstance();
      $req = $db->query('
        SELECT user_id, first_name, last_name, email, role, department, dob,
               street_address_1, street_address_2, suburb, state, postcode,
               country
          FROM user
         WHERE user_id = ' . $id
      );
      $employeeData = $req->fetchAll()[0];
      $employeeData['age'] = $this->calculateAge($employeeData['dob']);
      return $employeeData;
    }

    private function calculateAge($birthDate) {
      date_default_timezone_set('Asia/Kolkata');
      $birthDateObj = new DateTime ($birthDate);
      $currentDateObj = new DateTime ('now');
      $dateDiff = $birthDateObj->diff($currentDateObj);
      $age = $dateDiff->format('%y');
      return $age;
    }
  }
