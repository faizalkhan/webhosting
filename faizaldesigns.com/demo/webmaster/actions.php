<?php
if($_REQUEST['mode']=='log'){
$login=$obj->login($_REQUEST['user'],$_REQUEST['pass']);
}

if($_GET['mode']=='delete')
{

$del=$obj->del($_GET['table'],$_GET['id']);

header('location:'.$_GET['re'].'');
die();

}

if($_GET['mode']=='deleteallvalues')
{
  
  foreach ($_POST['myid'] as $id) {
  
 $del=$obj->del('gallery_images',$id);

  }

  header('location:gallery_images.php');
die();

}

if($_REQUEST['change']=='pass'){


	$msg=$obj->change($_POST['opass'],$_POST['npass']);
	header('location:change.php?res='.$msg);
	die();

}

if($_REQUEST['mode']=='productimages')
{

	
if($_POST['txthid']==''){

if ($_FILES['p_image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['p_image']['name'], $_FILES['p_image']['tmp_name'],"files");	

	
		$_POST["p_image"]='files/'.$imgName;

	}

	$obj->insertdata('productimages',$_POST);	
}

else
{


if ($_FILES['p_image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['p_image']['name'], $_FILES['p_image']['tmp_name'],"files");	
		
		

		$_POST["p_image"]='files/'.$imgName;

	}

	$obj->updatedata('productimages',$_POST,$_REQUEST['txthid'],'id');		

  

}

$_SESSION['msg']="Products Details Successfully Updated";
header('location:productimages.php');
die();


}

if($_REQUEST['mode']=='statusact')
{

$_POST['status']=$_GET['status'];

$obj->updatedata('tbl_contact',$_POST,$_GET['id'],'id');		
header('location:contact.php');
die();

}


if($_REQUEST['mode']=='clients')
{

	
if($_POST['txthid']==''){

if ($_FILES['image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['image']['name'], $_FILES['image']['tmp_name'],"files");	
		
		
		$_POST["image"]='files/'.$imgName;

	}

	$obj->insertdata('clients',$_POST);	
}

else
{


if ($_FILES['image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['image']['name'], $_FILES['image']['tmp_name'],"files");	
		
		

		$_POST["image"]='files/'.$imgName;

	}

	$obj->updatedata('clients',$_POST,$_REQUEST['txthid'],'id');		

  

}

$_SESSION['msg']="Clients Details Successfully Updated";
header('location:clients.php');
die();


}


if($_REQUEST['mode']=='videos')
{

	
if($_POST['txthid']==''){


	$obj->insertdata('tbl_videos',$_POST);	
}

else
{

$obj->updatedata('tbl_videos',$_POST,$_REQUEST['txthid'],'id');		

 }

$_SESSION['msg']="Videos Details Successfully Updated";
header('location:videos.php');
die();


}




if($_REQUEST['mode']=='product')
{

	$_POST['p_content']=nl2br($_POST['p_content']);

if($_POST['txthid']==''){

if ($_FILES['p_image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['p_image']['name'], $_FILES['p_image']['tmp_name'],"files");	
		
		
		$_POST["p_image"]='files/'.$imgName;

	}

	$obj->insertdata('products',$_POST);	
}

else
{


if ($_FILES['p_image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['p_image']['name'], $_FILES['p_image']['tmp_name'],"files");	
		
		

		$_POST["p_image"]='files/'.$imgName;

	}

	$obj->updatedata('products',$_POST,$_REQUEST['txthid'],'id');		

  

}

$_SESSION['msg']="Products Details Successfully Updated";
header('location:product.php');
die();


}

if($_REQUEST['mode']=='gallery_title')
{

if($_POST['txthid']==''){

if ($_FILES['image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['image']['name'], $_FILES['image']['tmp_name'],"files");	
		
		$thumb_name1 = "files";
		
		$obj->image_resize("files",$thumb_name1,$imgName,700,500,"Y",100);

		$_POST["image"]='files/'.$imgName;

	}

	$obj->insertdata('gallery_title',$_POST);	
}

else
{


if ($_FILES['image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['image']['name'], $_FILES['image']['tmp_name'],"files");	
		
		$thumb_name1 = "files";
		
		$obj->image_resize("files",$thumb_name1,$imgName,700,500,"Y",100);

		$_POST["image"]='files/'.$imgName;

	}

	$obj->updatedata('gallery_title',$_POST,$_REQUEST['txthid'],'id');		

  

}
$_SESSION['msg']="Gallery Details Successfully Updated";
header('location:gallery_title.php');
die();


}


if($_REQUEST['mode']=='blog')
{

if($_POST['txthid']==''){

if ($_FILES['b_image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['b_image']['name'], $_FILES['b_image']['tmp_name'],"files");	
		
		$thumb_name1 = "files";
		
		$obj->image_resize("files",$thumb_name1,$imgName,900,486,"Y",100);

		$_POST["b_image"]='files/'.$imgName;

	}

	$obj->insertdata('tbl_blog',$_POST);	
}

else
{


if ($_FILES['b_image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['b_image']['name'], $_FILES['b_image']['tmp_name'],"files");	
		
		$thumb_name1 = "files";
		
		$obj->image_resize("files",$thumb_name1,$imgName,900,486,"Y",100);

		$_POST["b_image"]='files/'.$imgName;

	}

	$obj->updatedata('tbl_blog',$_POST,$_REQUEST['txthid'],'id');		

  

}
$_SESSION['msg']="Blog Details Successfully Updated";
header('location:blog.php');
die();


}



if($_REQUEST['mode']=='gallery_images')
{

if($_POST['txthid']==''){

if ($_FILES['image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['image']['name'], $_FILES['image']['tmp_name'],"files");	
		
		$thumb_name1 = "files";
		
		$obj->image_resize("files",$thumb_name1,$imgName,700,500,"Y",100);

		$_POST["image"]='files/'.$imgName;

	}

	$obj->insertdata('gallery_images',$_POST);	
}

else
{


if ($_FILES['image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['image']['name'], $_FILES['image']['tmp_name'],"files");	
		
		$thumb_name1 = "files";
		
		$obj->image_resize("files",$thumb_name1,$imgName,700,500,"Y",100);

		$_POST["image"]='files/'.$imgName;

	}

	$obj->updatedata('gallery_images',$_POST,$_REQUEST['txthid'],'id');		

  

}
$_SESSION['msg']="Gallery Details Successfully Updated";
header('location:gallery_images.php');
die();


}


if($_REQUEST['mode']=='testimonials')
{

if($_POST['txthid']==''){

if ($_FILES['image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['image']['name'], $_FILES['image']['tmp_name'],"files");	
		
		$thumb_name1 = "files";
		
		$obj->image_resize("files",$thumb_name1,$imgName,76,76,"Y",100);

		$_POST["image"]='files/'.$imgName;

	}

	$obj->insertdata('testimonials',$_POST);	
}

else
{


if ($_FILES['image']['name']!="")

	{  
		$imgName = $obj->post_img($_FILES['image']['name'], $_FILES['image']['tmp_name'],"files");	
		
		$thumb_name1 = "files";
		
		$obj->image_resize("files",$thumb_name1,$imgName,76,76,"Y",100);

		$_POST["image"]='files/'.$imgName;

	}

	$obj->updatedata('testimonials',$_POST,$_REQUEST['txthid'],'id');		

  

}

$_SESSION['msg']="Testimonials Details Successfully Updated";
header('location:testimonials.php');
die();


}









?>