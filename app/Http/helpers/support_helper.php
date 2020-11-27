<?php

function stripUnicode($str){
	if(!$str) return false;
	$unicode = array(
		'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
		'd'=>'đ|Đ',
		'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
		'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
		'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
		'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
		'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
	);
	foreach($unicode as $khongdau=>$codau) {
		$arr=explode("|",$codau);
		$str = str_replace($arr,$khongdau,$str);
	}
	return $str;
}
function changeTitle($str){
	$str=trim($str);
	if ($str=="") return "";
	$str =str_replace('"','',$str);
	$str =str_replace("'",'',$str);
	$str = stripUnicode($str);
	$str = mb_convert_case($str,MB_CASE_TITLE,'utf-8');
	// MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER
	$str = str_replace(' ','-',$str);
	$str = str_replace('--','-',$str);
	$str = str_replace('---','-',$str);
	$str = str_replace('----','-',$str);
	$str = str_replace('-----','-',$str);
	$str = strtolower($str);
	return $str;
}

function mail_utf8($to, $from_user, $from_email, $subject = '(No subject)', $message = '')
{
	$from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
	$subject = "=?UTF-8?B?".base64_encode($subject)."?=";
	$headers = "From: $from_user <$from_email>\r\n".
		"MIME-Version: 1.0" . "\r\n" .
		"Content-type: text/html; charset=UTF-8" . "\r\n";
	return mail($to, $subject, $message, $headers);
}
function menu_multilevel($data,$select=0,$parent = 0,$str=''){
        if (isset($data)){
            foreach ($data as $item){
                $id = $item['id'];
                $name = $item['name'];
                if ($item['parent']==$parent){
                    if ($select!=0&&$select==$id){
                        echo '<option value="'.$id.'" selected>'.$str.' '.$name.'</option>';
                    }
                    else{
                     echo '<option value="'.$id.'">'.$str.' '.$name.'</option>';
                    }
                    menu_multilevel($data,$select,$id,$str.'--');
                }
            }
        }
}
function get_menu_multilevel($data,$parent = 0){
    if (isset($data)){
        foreach ($data as $item){
            $id = $item['id'];
            $name = $item['name'];
            $url = $item['url'];
            if ($item['parent'] ==0){
                 echo '<li><a href="'.$url.'">'.$name.'</a></li>';
            }
            echo '<li><a href="'.$url.'">'.$name.'</a><ul class="submenu">';
            get_menu_multilevel($data,$id);
            echo'</ul></li>';
        }
    }
}
