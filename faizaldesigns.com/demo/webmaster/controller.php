<?php
error_reporting(0);
session_start();
include('db.php');

class control extends db
{
	
 public function login($user,$pass) {
	 
	
	$this->sql=mysqli_query($this->link,"SELECT * FROM tbl_admin WHERE username='$user' AND password='$pass'");
	if(mysqli_num_rows($this->sql)>0)
	{
	$this->data=mysqli_fetch_assoc($this->sql);	
	$_SESSION['admin']=$this->data['id'];	
	header("location:dashboard.php");	
		
	}
	else
	{
    $_SESSION['msg']='Invalid Credentials !!!';		
	header("location:index.php");
	die();
	
	}
 
 }
 public function logout(){
	if($_SESSION['admin']=='')
	{
	 $_SESSION['msg']='Session expired please login';		
	header("location:index.php");
	die();	
		
	}
	 
 }

 


 public function contact($table,$orderby,$order,$where,$whervalue)
{
$value=array();

$sql2="SELECT * FROM $table WHERE 1=1";

if($_GET['f_date']!='')
{

	$sql2 .=" AND date >='".$_GET['f_date']."' AND date <= '".$_GET['t_date']."' ";
}

if($_GET['status']!='')
{

	$sql2 .=" AND status='".$_GET['status']."'";
}

$sql2 .=" ORDER BY id DESC";

$this->sql=mysqli_query($this->link,$sql2);
while($this->data=mysqli_fetch_assoc($this->sql))
{

$value[]=$this->data;

}
return $value;


}

 
 public function post_img($fileName,$tempFile,$targetFolder)

{	

 	if ($fileName!="")

	{

		if(!(is_dir($targetFolder)))

		mkdir($targetFolder);

		$counter=0;

		$NewFileName=$fileName;

		if(file_exists($targetFolder."/".$NewFileName))

			{

				do

				{ 

					$counter=$counter+1;

					$NewFileName=$counter."".$fileName;

				}

				while(file_exists($targetFolder."/".$NewFileName));

			}

		$NewFileName=str_replace(",","-",$NewFileName);

		$NewFileName=str_replace(" ","_",$NewFileName);	

		copy($tempFile, $targetFolder."/".$NewFileName);	

		return $NewFileName;

	}

}


public function image_resize($fn_orginal,$fn_resize,$imageName,$w,$h,$fixed,$quality)
{
			  if(!(is_dir($fn_resize)))
				mkdir($fn_resize,0777);
 
			  $save = $fn_resize. "/" . $imageName; //This is the new file you saving
              $file = $fn_orginal. "/" . $imageName; //This is the original file

              list($width, $height) = getimagesize($file) ; 
			  $modwidth = $width; 
			  $modheight = $height;
                                                         
              if($fixed=="Y"){
			  		$modwidth = $w; 
			  		$modheight = $h;
			   }else{
					if($width > $w){			  
			  			$modwidth = $w; 
			  			$diff = $width / $modwidth;
              			$modheight = $height / $diff; 
					}	
			   }
				
              $tn = imagecreatetruecolor($modwidth, $modheight) ; 
              $image = imagecreatefromjpeg($file) ; 
              imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
                                                        
              imagejpeg($tn, $save, $quality) ; 
			  
//			 echo "<img src='".$fn_resize."/".$imageName."'><br>"; 

}


public function insertdata($table_name, $values = array())
{
	
         if (array_key_exists('mode', $values)) {
                unset($values['mode']);
            }
			
			 if (array_key_exists('txthid', $values)) { 
                unset($values['txthid']);
            }
			
			if (array_key_exists('g-recaptcha-response', $values)) {
                unset($values['g-recaptcha-response']);
            }
			
			
			
            $fields = array_keys($values);
            $insert_values = '';
            $x = 1;
            foreach ($values as $value) {
                $value=  strip_tags($value);
                $insert_values .= '"' . $value . '"';
                if ($x < count($values)) {
                    $insert_values .= ',';
                }
                $x++;
            }
         $query = "INSERT INTO $table_name (" . implode(',', $fields) . ") VALUES ($insert_values)";

         // exit();

            if (mysqli_query($this->link,$query)) {
                return mysqli_insert_id($this->link);
            }	
		
}

  public function updatedata($table_name, $values = array(), $where_value, $where) {
	  
            if (array_key_exists('txthid', $values)) { 
                unset($values['txthid']);
            }
			
			if (array_key_exists('remove', $values)) {
                unset($values['remove']);
            }
			
			if (array_key_exists('mode', $values)) {
                unset($values['mode']);
            }
			
		

            $x = 1;
            $set = ' SET ';
            foreach ($values as $key => $value) {
                $value=  strip_tags($value);
                $set .= $key . ' = ' . '"'. $value . '"';
                if ($x < count($values)) {
                    $set .= ' , ';
                }

                $x++;
            }
            

        $query = "UPDATE $table_name $set WHERE $where='$where_value'";

            if (mysqli_query($this->link,$query)) 
            {
                return true;
            }
        }
		


public function change($opass,$npass)
{
$this->sql=mysqli_query($this->link,"SELECT * FROM tbl_admin WHERE password='$opass'");	
if(mysqli_num_rows($this->sql)>0)
{
$this->sql=mysqli_query($this->link,"UPDATE tbl_admin SET password='$npass'");
$msg='Password successfully changed';

return $msg;	
}
else
{
$msg='You have entered incorrect old password';

return $msg;	
}
}

public function allvalues($table,$orderby,$order,$where,$whervalue)
{
$value=array();

$this->sql=mysqli_query($this->link,"SELECT * FROM $table WHERE $where='$whervalue' ORDER BY $orderby $order ");
while($this->data=mysqli_fetch_assoc($this->sql))
{

$value[]=$this->data;

}
return $value;


}

public function forms($table,$where,$whervalue){

$this->sql=mysqli_query($this->link,"SELECT * FROM $table WHERE $where='$whervalue'");

return mysqli_fetch_assoc($this->sql);

}

public function del($table,$id)
{

mysqli_query($this->link,"DELETE FROM $table WHERE id='$id'");

}

public function tablewith($table,$orderby,$order,$start,$end)
{

$value=array();

$this->sql=mysqli_query($this->link,"SELECT * FROM $table ORDER BY $orderby $order LIMIT $start,$end");
while($this->data=mysqli_fetch_assoc($this->sql))
{

$value[]=$this->data;

}
return $value;


}

public function pagenation($table){

$this->sql=mysqli_query($this->link,"SELECT * FROM $table ");

return mysqli_num_rows($this->sql);

}



	
}


$obj = new control;
$obj->connect();



include('actions.php');

 
?>