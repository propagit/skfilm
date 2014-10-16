<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="<?=base_url()?>css/admin.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?=base_url()?>js/jquery.js"></script>
<script> var $j = jQuery.noConflict(); </script>
<title><?=$page['title']?> - Update page content</title>
<style>
body { background:#E8EDF2; margin:20px; }
table,tr,td { font-size:12px; }
.msg-ok { color:#008000; padding:3px 0 -3px 10px; }
a { color:#fff; }
.whitebg { background:#fff; width:100%; height:100%; }
</style>
</head>

<body>

<form method="post" action="<?=base_url()?>admin/cms/updatecontent">
<input type="hidden" name="id" value="<?=$page['id']?>" />
<?php			
    $this->Cute_model->ID="content_text";
    $this->Cute_model->Text= $page['content'];
    $this->Cute_model->UseHTMLEntities = true;
    $this->Cute_model->EditorWysiwygModeCss=base_url()."css/template.css";			
    //$this->Cute_model->FilesPath=base_url()."js/cute";
    $this->Cute_model->Draw();
    $this->Cute_model = null;			
?>
<br />
<dl><dt><input type="submit" class="button rounded" value="Update" /></dt>
</form>
<?php if ($this->session->flashdata('updated')) { ?>
<dt class="msg-ok">Updated successfully!</dt>
<?php } ?>
</dl>
</body>
</html>
