// FUNCTION UPLOAD
public function upload()
{
foreach ($_FILES as $name => $fileInfo) {
$filename = $_FILES[$name]['name'];
$tmpname = $_FILES[$name]['tmp_name'];
$exp = explode('.', $filename);
$ext = end($exp);
$newname = 'about_' . time() . "." . $ext;
$config['upload_path'] = './modes/images/about/photo/';
$config['upload_url'] = base_url() . 'modes/images/about/photo/';
$config['allowed_types'] = "jpg|jpeg|png";
$config['max_size'] = '2000000';
$config['file_name'] = $newname;
$this->load->library('upload', $config);
move_uploaded_file($tmpname, "modes/images/about/photo/" . $newname);
return $newname;
}
}

// ADD ABOUT US
public function adding()
{
$pic = '';

foreach ($_FILES as $name => $fileInfo) {
if (!empty($_FILES[$name]['name'])) {
$newname = $this->upload();
$data[$name] = $newname;
$pic = $newname;
}
}

$upload = $input_data['photo'] = $pic;

$get_status = $this->Product_model->checking_status();
$check_status = $value['t_status'] = $get_status[0]->t_status;

if ($check_status == '0') {
$dataAbout = array(
'photo' => $upload,
'title' => $this->input->post('title'),
'detail' => $this->input->post('detail'),
'created_date' => $this->input->post('created_date'),
'created_by' => $this->input->post('created_by'),
'status' => '1'
);

$this->db->insert('tbl_about', $dataAbout);
$this->session->set_flashdata('success', "Data saved successfully!");
redirect('product');
} else {
$this->session->set_flashdata('any_data', "Data saved successfully!");
redirect('product');
}
}

// UPDATING ABOUT US
public function updating()
{
$ID = $this->input->post('id_about');

$dataAbout = array(
'title' => $this->input->post('title'),
'detail' => $this->input->post('detail'),
'created_date' => $this->input->post('created_date')
);

$this->Product_model->update_about('tbl_about', $dataAbout, $ID);
$this->session->set_flashdata('success', "Data saved successfully!");
redirect('product');
}

// UPDATE PHOTO ABOUT US
public function changephoto()
{
$pic = '';

foreach ($_FILES as $name => $fileInfo) {
if (!empty($_FILES[$name]['name'])) {
$newname = $this->upload();
$data[$name] = $newname;
$pic = $newname;
}
}

$upload = $input_data['photo'] = $pic;

$ID = $this->input->post('id_about');

$dataAbout = array(
'photo' => $upload
);

$this->Product_model->update_about('tbl_about', $dataAbout, $ID);
$this->session->set_flashdata('success', "Data saved successfully!");
redirect('product');
}

// DELETE DATA
public function delete()
{
$where = $this->input->post('id_about');

$this->Product_model->delete_about($where);
$this->session->set_flashdata('deletes', "Empty");
redirect('product');
}

// NON-ACTIVE ABOUT US
public function nonactive()
{
$ID = $this->input->post('id_about');

$input_data = array(
'status' => $this->input->post('status')
);

$this->Product_model->update_about('tbl_about', $input_data, $ID);
$this->session->set_flashdata('nonactive', "Empty!");
redirect('product');
}

// ACTIVE ABOUT US
public function active()
{
$ID = $this->input->post('id_about');
$get_status = $this->Product_model->checking_status();
$check_status = $value['t_status'] = $get_status[0]->t_status;

if ($check_status == '0') {
$input_data = array(
'status' => $this->input->post('status')
);

$this->Product_model->update_about('tbl_about', $input_data, $ID);
$this->session->set_flashdata('active', "Empty!");
redirect('product');
} else {
$this->session->set_flashdata('any_data', "Data saved successfully!");
redirect('product');
}
}