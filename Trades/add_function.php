<?php function can_upload($file){
	if($file['name'] == '') return "Вы не выбрали файл";
	if($file['size'] == 0) return "Файл слишком большой";
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
	$getMime = explode('.', $file['name']);
	$mime = strtolower(end($getMime));
	if(!in_array($mime, $types)) return "Недопустимый тип файла";
	return "Успех";
} 
function upload($file){
	$name = $file['name'];
	copy($file['tmp_name'], $name);
}

?>

