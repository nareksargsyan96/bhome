<?php
if(isset($postItem))
{
	$postItems = array (
		'postItem'=>$postItem
	);

}else{
	$postItems = array ();
}
 
$this->load->view('items/carusel',array('topItems' => $topItems));
$this->load->view('items/side-bar',$postItems);
$this->load->view('items/statement', array('statements'=>$statements));