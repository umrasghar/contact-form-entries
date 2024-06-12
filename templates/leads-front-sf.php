<?php
include_once(plugin_dir_path(__FILE__) . 'templates/view.php');


echo "<div> HELLO WORLD </div>";

?><style type="text/css">
  label span.howto { cursor: default; }
  
  .vx_required{color:red;}
  .vx_wrap *{
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  }
  .vx_file_single{
      width: 100%;
      padding: 2px 2px 8px 2px;
      margin: 0 0 8px 0;
      border-bottom: 1px dashed #ccc;
  }
    .vx_div{
  padding: 10px 0px 0px 0px;
  }
  .vx_head{
  font-size: 14px;
  background: #eee;
  font-weight: bold;
  border: 1px solid #d9d9d9;
    -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  }
    .vx_group{
      border: 1px dashed #d0d0d0;
      border-top-width: 0px ;
      padding: 14px;
      background: #fff;
  }
.vx_detail .vx_group{
  padding: 12px 14px;  
}  
  .vx_row{
      padding: 6px 0px;
     /*  background: #6a99c7;*/
  }
    .crm_input_inline{
  float: left; height: 28px; margin-right:5px; 
  }
  .vx_col1{float:left; width: 25%; padding-right: 20px; font-weight: bold; word-wrap: break-word;}
  .vx_col2{float:left; width: 75%; padding-right: 20px; word-wrap: break-word;}
  .vx_col3{float:left; width: 30%; font-weight: bold; word-wrap: break-word;}
  .vx_col4{float:left; width: 70%; padding-left: 6px; word-wrap: break-word;}
  @media screen and (max-width: 782px) {
  .vx_col1{float:none; width: 100%;}
  .vx_col2{float:none; width: 100%; background-color: #f2f2f2;
    padding: 10px;}    
  }
  
  .alert_danger {
  background: #ca5952;
  padding: 5px;
  font-size: 14px;
  color: #fff;
  text-align: center;
  margin-top: 10px;
  }
  .crm_sel{
  min-width: 220px;
  }

  .vx_wrap{
  margin-right: 300px;

  }
  
  .vx_contents{
  float: left;
width: 100%;
  }
  .vx_detail{
      float: right;
      width: 280px;
      margin-right: -300px;
  }
  .vx_heading{
  font-size: 18px;
  padding: 10px 20px;
  border-bottom: 1px dashed #ccc;
  }


.crm_head_div{
 float: left;
 width: 80%;  padding: 8px 20px;   
}

.crm_btn_div{
 float: right;
 width:20%;  padding: 8px 20px; 
 text-align: right;
}
.vx_action_btn:hover{
    color: #333;
}
 .vx_action_btn{
     color: #777; cursor: pointer;
     vertical-align: middle;
     font-size: 16px;
     text-decoration: none;
 }
 .vx_remove_btn{
   margin-right: 7px;  
 }
.vx_input_100{
width: 100%;
}
.crm_clear{
    clear: both;
}
.vx_entry_table{
    display: table; width: 100%; border-collapse: collapse;
    table-layout: fixed;
}
.vx_group .entry_row:first-child {
 border-top: 1px solid #ddd;   
}
.vx_group .entry_row {
border-bottom: 1px solid #ddd;
border-left: 1px solid #ddd;
border-right: 1px solid #ddd;
margin: 0px;
display: table-row;
}
.entry_col1 {
    width: 25%;
    padding: 7px;
    text-align: left;
font-weight: bold;
background-color: #fff;
display: table-cell;
vertical-align: middle;
}
 .entry_col2 {
    width: 75%;
    padding: 7px;
 min-height: 36px;
     border-left: 2px solid #ddd;
background-color: #f1f8ff;
display: table-cell;
word-wrap: break-word;
vertical-align: middle;
 }
 .entry_col2 .vx_value{
     padding-top: 2px;
 }
.vx_margin{
margin-top: 10px;
}
.vx_red{
color: #E31230;
}
.vx_label{
    font-weight: bold;
}
.vx_error{
    background: #ca5952;
    padding: 10px;
    font-size: 14px;
    margin: 1% 2%;
    color: #fff;
}
.crm_panel .vx_error{
    margin: 0;
}
.vx_check{
    margin-bottom: 2px;
}
.vx_edit{
    display: none;
}
.vx_check_label{
font-weight: bold;
}
.vx_del_link , .vx_del_link a{
    color: #a00;
    text-decoration: none;
}
.vx_del_link:hover , .vx_del_link a:hover{
    color: #D54E21;
    
}
.vx_float_right{
  float: right;  
}

/************notes***************/

.vx_wrap .crm_note_text_area{
    height: 60px; margin-bottom: 6px;
}

.vx_wrap .post_time{
 margin-left: 5%;   
}
.vx_wrap .del_note{
float: right;
}

.vx_wrap .crm_note{
    margin: 3px 0 16px 0;
}
.vx_wrap .crm_check{
  width: 30px; padding: 10px 0 4px 2px;  
}
.vx_wrap .crm_note_img img{
    width: 100%; height: 100%;
}
.vx_wrap .crm_note_img {
 float: left;
 max-width: 60px; max-height: 60px;  
 border: 1px solid #ddd; padding: 1px;  
}
.vx_wrap .crm_arrow_left {
    position: relative;
    background: #fff9de;
    border-left: 3px solid #fab41a;
    padding: 10px;
    margin:5px 0px 5px 75px;
color: #666;
}
.vx_wrap .crm_arrow_left:after, .vx_wrap .crm_arrow_left:before {
    right: 100%;
    top: 20px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
}

.vx_wrap .crm_arrow_left:after {
    border-color: rgba(255, 255, 255, 0);
    border-right-color: #fff9de;
    border-width: 8px;
    margin-top: -8px;
}
.vx_wrap .crm_arrow_left:before {
    border-color: rgba(204, 204, 204, 0);
    border-right-color: #fab41a;
    border-width: 12px;
    margin-top: -12px;
}
.vx_wrap .vx_note_red .crm_arrow_left{
  background-color: #ffede8;  
  border-color: #FF5722;
}
.vx_wrap .vx_note_red .crm_arrow_left:before{
  border-right-color: #FF5722;
}
.vx_wrap .vx_note_red .crm_arrow_left:after{
  border-right-color: #ffede8;
}

.vx_wrap .vx_note_red .key_info{
  border-color: #FF5722;
}
.vx_wrap .vx_note_green .crm_arrow_left{
  background-color: #e9ffea;  
  border-color: #28b42d;
}
.vx_wrap .vx_note_green .crm_arrow_left:before{
  border-right-color: #28b42d;
}
.vx_wrap .vx_note_green .crm_arrow_left:after{
  border-right-color: #e9ffea;
}
.vx_wrap .vx_note_green .key_info{
  border-color: #28b42d;
}
.vx_edit_note_btn{
    position: absolute;
    top: 5px;
    right: 10px;
    padding: 6px;
    color: #999;
    display: none;
     text-decoration: none;
}
.vx_edit_note_btn:hover{
  color: #333;  
}
.crm_note:hover .vx_edit_note_btn{
  display: block;  
}
.crm_note.crm_note_edit .vx_edit_note_btn{
  display: none;  
}
.vx_cancel_note_btn{
    position: absolute;
    top: 5px;
    right: 10px;
    padding: 6px;
    color: #999;
    text-decoration: none;
}
.vx_cancel_note_btn:hover{
  color: #333;  
}
.crm_note_edit .crm_note_text{
   display: none;    
}
.crm_note_edit .crm_add_note{
    margin-top: 20px;
}

.crm_note_text{
    padding-right: 16px;
}
.vx_wrap .crm_img_div img{
    width: 100%; height: 100%;
  
}
.crm_note .key_info{
    border-top: 1px solid #fab41a;
    margin-top: 12px;
    padding-top: 7px;
}

.pic_wrap{
    width: 130px; height: 130px;
    border: 1px solid #ddd; padding: 5px;
}
.vx_wrap a.page-title-action{
    top: -1px;
}
.vx_wrap .vx_req_bg .vx_input{
 border-color: #e36551;
    -webkit-box-shadow: 0 0 2px rgba(255, 50, 4, 0.8);
    box-shadow: 0 0 2px rgba(255, 50, 4, 0.8);   
}
.entry_row a{
    text-decoration: none;
}
.vx_error_white{
    border: 1px solid #ddd;
    border-left-width: 4px;
}
.vx_wrap label{ cursor: text; }
.vx_wrap.vx_edit_entry label{ cursor: pointer; }
/*******crm box *************/
.vx_msg_div a{
    color: #fff;
}
.vx_msg_div{
    word-wrap: break-word;
    padding: 10px; color: #fff;
    margin-bottom: 12px;
}
.vx_msg_div a:hover{
    color: #eee;
    text-decoration: none;
}
.icon_s {
    width: 20px;
    height: 20px;
    margin-left: 5px;
}

@media screen and (max-width: 850px) {
    .vx_wrap{
        margin-right: 0;
    }
    .vx_detail{
        float: none;
    width: 100%;
     margin-right:0; 
    }
 
}
  </style>
  
    <div class="vx_wrap"> 
    <h2  class="vx_img_head">
    <?php  //echo esc_html($this->entry_title); 
    //if(!empty($forms)){}
    ?> 
    </h2>
    </div>
  
