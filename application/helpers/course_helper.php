<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function getAllCourse(){
    // Get a reference to the controller object
    $CI =& get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('news');
    
    $res = $CI->news->getAllCourse();
    return $res;
}
