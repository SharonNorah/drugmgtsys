<?php
if ($this->uri->segment(2) == '') {

	$this->load->view('pages/home');

} else {
	show_404();
}

?>
</div>
