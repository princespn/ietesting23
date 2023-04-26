<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h3 class="head-title"><i class="fa fa-file-text-o"></i><small> <?php echo $this->lang->line('manage'); ?> <?php echo $this->lang->line('exam_term'); ?> <?php echo $this->lang->line('result'); ?></small></h3>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                    
                </ul>
                <div class="clearfix"></div>
            </div>
            
              
            <div class="x_content quick-link">
                 <span><?php echo $this->lang->line('quick_link'); ?>:</span>
                <?php if(has_permission(VIEW, 'exam', 'mark')){ ?>
                    <a href="<?php echo site_url('exam/mark/index'); ?>"><?php echo $this->lang->line('manage_mark'); ?></a>
                <?php } ?>
                <?php if(has_permission(VIEW, 'exam', 'examresult')){ ?>
                   | <a href="<?php echo site_url('exam/examresult/index'); ?>"><?php echo $this->lang->line('exam_term'); ?> <?php echo $this->lang->line('result'); ?></a>                 
                <?php } ?>
                <?php if(has_permission(VIEW, 'exam', 'finalresult')){ ?>
                   | <a href="<?php echo site_url('exam/finalresult/index'); ?>"><?php echo $this->lang->line('exam_final_result'); ?></a>                 
                <?php } ?>
                <?php if(has_permission(VIEW, 'exam', 'meritlist')){ ?>
                   | <a href="<?php echo site_url('exam/meritlist/index'); ?>"><?php echo $this->lang->line('merit_list'); ?></a>                 
                <?php } ?>   
                <?php if(has_permission(VIEW, 'exam', 'marksheet')){ ?>
                   | <a href="<?php echo site_url('exam/marksheet/index'); ?>"><?php echo $this->lang->line('mark_sheet'); ?></a>
                <?php } ?>
                 <?php if(has_permission(VIEW, 'exam', 'resultcard')){ ?>
                   | <a href="<?php echo site_url('exam/resultcard/index'); ?>"><?php echo $this->lang->line('result_card'); ?></a>
                <?php } ?>   
                <?php if(has_permission(VIEW, 'exam', 'resultcard')){ ?>
                   | <a href="<?php echo site_url('exam/resultcard/all'); ?>"><?php echo $this->lang->line('all'); ?> <?php echo $this->lang->line('result_card'); ?></a>
                <?php } ?>     
                <?php if(has_permission(VIEW, 'exam', 'mail')){ ?>
                   | <a href="<?php echo site_url('exam/mail/index'); ?>"><?php echo $this->lang->line('mark_send_by_email'); ?></a>                    
                <?php } ?>
                <?php if(has_permission(VIEW, 'exam', 'text')){ ?>
                   | <a href="<?php echo site_url('exam/text/index'); ?>"><?php echo $this->lang->line('mark_send_by_sms'); ?></a>                  
                <?php } ?>
                <?php if(has_permission(VIEW, 'exam', 'resultemail')){ ?>
                   | <a href="<?php echo site_url('exam/resultemail/index'); ?>"> <?php echo $this->lang->line('result'); ?> <?php echo $this->lang->line('email'); ?></a>                    
                <?php } ?>
                <?php if(has_permission(VIEW, 'exam', 'resultsms')){ ?>
                   | <a href="<?php echo site_url('exam/resultsms/index'); ?>"> <?php echo $this->lang->line('result'); ?> <?php echo $this->lang->line('sms'); ?></a>                  
                <?php } ?>
            </div>      
            
            <div class="x_content"> 
                <?php echo form_open_multipart(site_url('exam/examresult/index'), array('name' => 'result', 'id' => 'result', 'class' => 'form-horizontal form-label-left'), ''); ?>
                <div class="row"> 
                    
                    <div class="col-md-10 col-sm-10 col-xs-12">
                    
                    <?php $this->load->view('layout/school_list_filter'); ?> 
                    
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="item form-group"> 
                            <div><?php echo $this->lang->line('exam'); ?>  <span class="required">*</span></div>
                            <select  class="form-control col-md-7 col-xs-12" name="exam_id" id="exam_id"  required="required">
                                <option value="">--<?php echo $this->lang->line('select'); ?>--</option>
                                <?php foreach ($exams as $obj) { ?>
                                <option value="<?php echo $obj->id; ?>" <?php if(isset($exam_id) && $exam_id == $obj->id){ echo 'selected="selected"';} ?>><?php echo $obj->title; ?></option>
                                <?php } ?>
                            </select>
                            <div class="help-block"><?php echo form_error('exam_id'); ?></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="item form-group"> 
                            <div><?php echo $this->lang->line('class'); ?>  <span class="required">*</span></div>
                            <select  class="form-control col-md-7 col-xs-12" name="class_id" id="class_id"  required="required" onchange="get_section_by_class(this.value,'');">
                                <option value="">--<?php echo $this->lang->line('select'); ?>--</option>
                                <?php foreach ($classes as $obj) { ?>
                                <option value="<?php echo $obj->id; ?>" <?php if(isset($class_id) && $class_id == $obj->id){ echo 'selected="selected"';} ?>><?php echo $obj->name; ?></option>
                                <?php } ?>
                            </select>
                            <div class="help-block"><?php echo form_error('class_id'); ?></div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="item form-group"> 
                            <div><?php echo $this->lang->line('section'); ?></div>
                            <select  class="form-control col-md-7 col-xs-12" name="section_id" id="section_id">                                
                                <option value="">--<?php echo $this->lang->line('select'); ?>--</option>
                            </select>
                            <div class="help-block"><?php echo form_error('section_id'); ?></div>
                        </div>
                    </div>                    
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="form-group"><br/>
                            <button id="send" type="submit" class="btn btn-success"><?php echo $this->lang->line('find'); ?></button>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>

           <?php  if (isset($students) && !empty($students)) { ?>
            <div class="x_content">             
                <div class="row">
                    <div class="col-sm-4  col-sm-offset-4 layout-box">
                        <p>
                            <h4><?php echo $this->lang->line('exam_term'); ?> <?php echo $this->lang->line('result'); ?></h4>                            
                            <?php echo $this->lang->line('exam'); ?> <?php echo $this->lang->line('title'); ?>: <?php echo $exam->title; ?>
                        </p>
                    </div>
                </div>            
            </div>
             <?php } ?>
             <?php echo form_open(site_url('exam/examresult/add'), array('name' => 'add', 'id' => 'add', 'class'=>'form-horizontal form-label-left'), ''); ?>

            <div class="x_content"  style="overflow-x:scroll">
                
                <table id="datatable-responsive"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th rowspan="3"><?php echo $this->lang->line('roll_no'); ?></th>
                            <th  rowspan="3">SR No.</th>
                            <th  rowspan="3"><?php echo $this->lang->line('name'); ?></th>
                            <th  rowspan="3"><?php echo $this->lang->line('father_name'); ?></th>
                            <th  rowspan="3"><?php echo $this->lang->line('mother_name'); ?></th>
                            <?php 
                            if(isset($subjects))
                            {
                                foreach ($subjects as $iSubjectID => $subject) { 
                                    $iColSpan = 2;
                                     if(isset($subject_exams[$iSubjectID]))
                                     {
                                        $iColSpan = 0;
                                        if (isset($subject_exams[$iSubjectID]['written']))   $iColSpan=  $iColSpan +2;
                                        if ( isset($subject_exams[$iSubjectID]['practical']))   $iColSpan=  $iColSpan +2;
                                        if ( isset($subject_exams[$iSubjectID]['viva']))   $iColSpan=  $iColSpan +2;
                                     }
                                    ?>
                                    <th colspan="<?php echo $iColSpan; ?>"> <?php echo $subject ?></th>                                           
                                <?php } 
                            }
                           ?>
                            <th  rowspan="3">Max <?php echo $this->lang->line('mark'); ?></th>                                            
                            <th  rowspan="3"><?php echo $this->lang->line('obtain'); ?> <?php echo $this->lang->line('mark'); ?></th>    
                            <th  rowspan="3">Mark %</th>                                                                                    
                        </tr>
                        <tr>
                            <?php 
                               if(isset($subjects))
                               {
                                $iNoExam = 0;

                            foreach ($subjects as $iSubjectID => $subject) 
                            { 
                                if(isset($subject_exams[$iSubjectID]) && isset($subject_exams[$iSubjectID]['written']))
                                {
                                    $iNoExam++
                                    ?>
                                <th colspan="2"> Written Exam</th>                                           
                                <?php  }
                                if(isset($subject_exams[$iSubjectID]) && isset($subject_exams[$iSubjectID]['practical']))
                                {
                                    $iNoExam++
                                    ?>
                                    <th colspan="2"> Practical Exam</th>                                           
     
                                    <?php  }
                                if(isset($subject_exams[$iSubjectID]) && isset($subject_exams[$iSubjectID]['viva']))
                                {
                                    $iNoExam++
                                    ?>
                                    <th colspan="2"> Viva Exam</th>                                           
 
                                    <?php  }
                                if (!$iNoExam)
                                { ?>
                                    <th colspan="2"> Written Exam</th>                                              
                                <?php } 

                            
                            } 
                            }?>                                                                         
                        </tr>
                        <tr>
                            
                            <?php 
                            if(isset($subjects))
                            {
                                $iNoExam = 0;
                                foreach ($subjects as $iSubjectID => $subject) 
                                { 
                                    if(isset($subject_exams[$iSubjectID]) && isset($subject_exams[$iSubjectID]['written']))
                                    {
                                        $iNoExam++;
                                        ?>
                                    <th> Max Mark</th>                                           
                                    <th> Obtain Mark</th>     
                                    <?php  }
                                    if(isset($subject_exams[$iSubjectID]) && isset($subject_exams[$iSubjectID]['practical']))
                                    {
                                        $iNoExam++;
                                        ?>
                                        <th> Max Mark</th>                                           
                                        <th> Obtain Mark</th>     
                                        <?php  }
                                    if(isset($subject_exams[$iSubjectID]) && isset($subject_exams[$iSubjectID]['viva']))
                                    {
                                        $iNoExam++;
                                        ?>
                                        <th> Max Mark</th>                                           
                                        <th> Obtain Mark</th>     
                                        <?php  }
                                     if (!$iNoExam)
                                     { ?>
                                        <th> Max Mark</th>                                           
                                        <th> Obtain Mark</th>     
                                     <?php } 
                                 }
                            } ?>                                                                         
                        </tr>
                    </thead>
                    <tbody id="fn_result">   
                        <?php
                        $count = 1;
                        if (isset($students) && !empty($students)) {
                            ?>
                            <?php foreach ($students as $obj) { ?>                           
                            <?php  
                           
                            ?>
                                <tr>
                                    <td><?php echo $obj->roll_no; ?></td>
                                    <td><?php echo $obj->admission_no; ?></td>
                                    <td><?php echo ucfirst($obj->name); ?></td>
                                    <td><?php echo ucfirst($obj->father_name); ?></td>  
                                    <td><?php echo ucfirst($obj->mother_name); ?></td>  
                                    <?php 
                                    $iTotalMax = 0;
                                    $iTotalObtain = 0;
                                    $iSubjectCount = count($subjects);
                                    $iSubjectsIterated =1;
                                    foreach ($obj->subjects as $subject) { 
                                        $iNoExam = 0;
                                        $iSubjectID = $subject->subject_id;
                                        if(isset($subject_exams[$iSubjectID]) && isset($subject_exams[$iSubjectID]['written']))
                                        {
                                            $iSubjectsIterated++;
                                            $max_mark = $subject_exams[$iSubjectID]['written'];
                                            ?>
                                        <td>
                                            <?php 
                                            $iTotalMax = $iTotalMax+ $max_mark;
                                            echo $max_mark; ?>
                                        </td>                                    
                                        <td>
                                            <?php 
                                            $iTotalObtain = $iTotalObtain+ $subject->written_obtain;
                                            echo $subject->written_obtain; ?>
                                        </td>   
                                        <?php } 
                                       
                                        if(isset($subject_exams[$iSubjectID]) &&  isset($subject_exams[$iSubjectID]['practical']))
                                        {
                                            $iSubjectsIterated++;
                                            $max_mark = $subject_exams[$iSubjectID]['practical'];
                                            ?>
                                            <td>
                                                <?php 
                                                $iTotalMax = $iTotalMax+  $max_mark;
                                                echo  $max_mark; ?>
                                            </td>                                    
                                            <td>
                                                <?php 
                                                $iTotalObtain = $iTotalObtain+ $subject->practical_obtain;
                                                echo $subject->practical_obtain; ?>
                                            </td>            
                                            <?php  }
                                        if(isset($subject_exams[$iSubjectID]) && isset($subject_exams[$iSubjectID]['viva']))
                                        {
                                            $iSubjectsIterated++;
                                            $max_mark = $subject_exams[$iSubjectID]['viva'];

                                            ?>
                                           <td>
                                                <?php 
                                                $iTotalMax = $iTotalMax+ $max_mark;
                                                echo $max_mark; ?>
                                            </td>                                    
                                            <td>
                                                <?php 
                                                $iTotalObtain = $iTotalObtain+ $subject->viva_obtain;
                                                echo $subject->viva_obtain; ?>
                                            </td>      
                                            <?php  }
                                    ?>
                                     <?php }  
                                      while($iSubjectsIterated <=$iSubjectCount)     
                                      {

                                        $iSubjectsIterated++;
                                        ?>
                                        <td>0</td>
                                        <td>0</td>
                                  <?php 
                                      } ?>                              
                                                
                                    <td>
                                        <?php echo $iTotalMax ?>
                                    </td>   
                                    <td>
                                        <?php echo $iTotalObtain ?>
                                    </td>   
                                    <td>
                                        <?php echo  $iTotalMax >0 ? number_format(($iTotalObtain/$iTotalMax)*100,2) : 0 ?>
                                    </td>                                 
                                </tr>
                            <?php } ?>
                        <?php }else{ ?>
                                <tr>
                                    <td colspan="8" align="center"><?php echo $this->lang->line('no_data_found'); ?></td>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="ln_solid"></div>
                <!-- <div class="form-group">
                    <div class="col-md-6 col-md-offset-5">
                        <input type="hidden" value="<?php echo isset($school_id) ? $school_id : ''; ?>"  name="school_id" />
                        <input type="hidden" value="<?php echo isset($exam_id) ? $exam_id : ''; ?>"  name="exam_id" />
                        <input type="hidden" value="<?php echo isset($class_id) ? $class_id : ''; ?>"  name="class_id" />
                        <input type="hidden" value="<?php echo isset($section_id) ? $section_id : ''; ?>"  name="section_id" />
                        <?php  if (isset($students) && !empty($students)) { ?>
                         <a href="<?php echo site_url('exam/examresult'); ?>" class="btn btn-primary"><?php echo $this->lang->line('cancel'); ?></a>
                         <button id="send" type="submit" class="btn btn-success"><?php echo $this->lang->line('submit'); ?></button>
                        <?php } ?>
                    </div>
                </div> -->
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="instructions"><strong><?php echo $this->lang->line('instruction'); ?>: </strong> <?php echo $this->lang->line('exam_result_instruction'); ?></div>
                </div>
                
            </div> 
            <?php echo form_close(); ?>

            
        </div>
    </div>
</div>


<!-- Super admin js START  -->
 <script type="text/javascript">
        
    $("document").ready(function() {
         <?php if(isset($school_id) && !empty($school_id)){ ?>               
            $(".fn_school_id").trigger('change');
         <?php } ?>
    });
    
    $('.fn_school_id').on('change', function(){
      
        var school_id = $(this).val();
        var exam_id = '';
        var class_id = '';
        
        <?php if(isset($school_id) && !empty($school_id)){ ?>
            exam_id =  '<?php echo $exam_id; ?>';           
            class_id =  '<?php echo $class_id; ?>';           
         <?php } ?> 
           
        if(!school_id){
           toastr.error('<?php echo $this->lang->line('select'); ?> <?php echo $this->lang->line('school'); ?>');
           return false;
        }
       
       $.ajax({       
            type   : "POST",
            url    : "<?php echo site_url('ajax/get_exam_by_school'); ?>",
            data   : { school_id:school_id, exam_id:exam_id},               
            async  : false,
            success: function(response){                                                   
               if(response)
               { 
                    $('#exam_id').html(response);  
                   get_class_by_school(school_id,class_id); 
               }
            }
        });
    }); 

   function get_class_by_school(school_id, class_id){       
         
        $.ajax({       
            type   : "POST",
            url    : "<?php echo site_url('ajax/get_class_by_school'); ?>",
            data   : { school_id:school_id, class_id:class_id},               
            async  : false,
            success: function(response){                                                   
               if(response)
               {
                    $('#class_id').html(response); 
               }
            }
        }); 
   }  
   function doit(type, fn, dl) {
	var elt = document.getElementById('datatable-responsive');
	var wb = XLSX.utils.table_to_book(elt, {sheet:"Sheet JS"});
	return dl ?
		XLSX.write(wb, {bookType:type, bookSST:true, type: 'base64'}) :
		XLSX.writeFile(wb, fn || ('exam_result.' + (type || 'xlsx')));
}
  </script>
<!-- Super admin js end -->


 <script type="text/javascript">     
  $(document).ready(function() {
            
            $('#datatable-responsive').DataTable({
                dom: 'Bfrtip',
                "ordering": false,
                "searching": false,
                "paging" : false,
                responsive: true,
                buttons: [
                    {
                        text: 'Export',
                        action: function ( ) {
                            doit('xlsx')
                        }
                    }
                ],
            });          
          });
    <?php if(isset($class_id) && isset($section_id)){ ?>
        get_section_by_class('<?php echo $class_id; ?>', '<?php echo $section_id; ?>');
    <?php } ?>
    
    function get_section_by_class(class_id, section_id){       
       
        var school_id = $('.fn_school_id').val();     
             
        if(!school_id){
           toastr.error('<?php echo $this->lang->line('select'); ?> <?php echo $this->lang->line('school'); ?>');
           return false;
        } 
        
        $.ajax({       
            type   : "POST",
            url    : "<?php echo site_url('ajax/get_section_by_class'); ?>",
            data   : {school_id:school_id, class_id : class_id , section_id: section_id},               
            async  : false,
            success: function(response){                                                   
               if(response)
               {
                  $('#section_id').html(response);
               }
            }
        });         
    } 
 $("#result").validate(); 
 $("#add").validate(); 
 
</script>
<style>
#datatable-responsive label.error{display: none !important;}
</style>


