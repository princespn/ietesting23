<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* * *****************Marksheet.php**********************************
 * @product name    : Global Multi School Management System Express
 * @type            : Class
 * @class name      : Marksheet
 * @description     : Manage exam mark sheet.  
 * @author          : Codetroopers Team 	
 * @url             : https://themeforest.net/user/codetroopers      
 * @support         : yousuf361@gmail.com	
 * @copyright       : Codetroopers Team	 	
 * ********************************************************** */

class Marksheet extends MY_Controller {

    public $data = array();

    function __construct() {
        parent::__construct();
        $this->load->model('Marksheet_Model', 'mark', true);
    }

    
    /*****************Function index**********************************
    * @type            : Function
    * @function name   : index
    * @description     : Load "Mark sheet" user interface                 
    *                    with data filter option
    * @param           : null
    * @return          : null 
    * ********************************************************** */
    public function index() {

        check_permission(VIEW);

        if ($_POST) {
            error_on();
            if($this->session->userdata('role_id') == STUDENT){
                
                $student = get_user_by_role($this->session->userdata('role_id'), $this->session->userdata('id'));
                
                $school_id = $student->school_id;
                $class_id = $student->class_id;
                $section_id = $student->section_id;
                $student_id = $student->id;
                
            }else{
                
                $school_id = $this->input->post('school_id');
                $class_id = $this->input->post('class_id');
                $section_id = $this->input->post('section_id');
                $student_id = $this->input->post('student_id');
                
            }
            $sort_array = [];
            // debug_a($student_id);
            $exam_id = $this->input->post('exam_id');
            $school = $this->mark->get_school_by_id($school_id);
            $student = $this->mark->get_student_details($student_id,$school->academic_year_id,$class_id,$school_id);        
            $this->data['students'] = $this->mark->get_student_list_with_result($school_id, $class_id, null, $school->academic_year_id,$student_id,$exam_id);
            $reports = [];
            $exams = [];
            $subjects = [];
            $student_ids = [];
            if (count($this->data['students']) > 0) {
                foreach ($this->data['students'] as $obj) {
    
                    
                    if(!isset($reports[$obj->student_id]))
                    {
                        $reports[$obj->student_id] = $obj;
                        $reports[$obj->student_id]->subjects = [];
                        $sort_array[$obj->student_id]['total_obtain'] = 0;
                    }
                    $student_ids[] = $obj->student_id;
                    $reports[$obj->student_id]->subjects[$obj->subject_id][$obj->exam_id] = $obj;
                    $exams[$obj->exam_id] = $obj->exam_name;
                    $subjects[$obj->subject_id] = $obj->subject_name;
                    $sort_array[$obj->student_id]['total_obtain']  =  $sort_array[$obj->student_id]['total_obtain']  + $obj->written_obtain;
                }
            }
            if(in_array($student_id,$student_ids))
            {
                array_multisort($sort_array, SORT_DESC, $reports);
            }
            else
            {
                $reports= [];
            }

            $this->data['subjects'] = $subjects;
            $this->data['academic_year'] = $this->mark->get_single('academic_years', array('id'=>$school->academic_year_id));       ;
            $this->data['grades'] = $this->mark->get_list('grades', array('status' => 1, 'school_id'=>$school_id), '', '', '', 'id', 'ASC');

            $this->data['reports'] = $reports;
            $this->data['exams_n'] = $exams;
            $this->data['grades'] = $this->mark->get_list('grades', array('status' => 1, 'school_id'=>$school_id), '', '', '', 'id', 'ASC');

            $this->data['school'] = $school;
            $this->data['student'] = $student;
            $this->data['school_id'] = $school_id;
            $this->data['exam_id'] = $exam_id;
            $this->data['class_id'] = $class_id;
            $this->data['section_id'] = $section_id;
            $this->data['student_id'] = $student_id;
            $this->data['academic_year_id'] = $school->academic_year_id;
            
            $class = $this->mark->get_single('classes', array('id'=>$class_id));            
        }
        
       
        $condition = array();
        $condition['status'] = 1;        
        if($this->session->userdata('role_id') != SUPER_ADMIN){ 
            
            $condition['school_id'] = $this->session->userdata('school_id');
            $school = $this->mark->get_school_by_id($condition['school_id']);
            $this->data['academic_years'] = $this->mark->get_list('academic_years', $condition, '', '', '', 'id', 'ASC');
            
            $this->data['classes'] = $this->mark->get_list_new('classes', $condition, '','', '', 'id', 'ASC');
            
            $condition['academic_year_id'] = $school->academic_year_id;
            $this->data['exams'] = $this->mark->get_list('exams', $condition, '', '', '', 'id', 'ASC');
        }        

        $this->layout->title($this->lang->line('student') . ' ' . $this->lang->line('mark_sheet') . ' | ' . SMS);
        $this->layout->view('mark_sheet/index', $this->data);
    }

}