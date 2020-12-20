<?php
error_reporting(0);
$nama_dokumen='Id card'; //Beri nama file PDF hasil.
define('mpdf60/');//lokasi folder mpdf60
require_once("mpdf60/mpdf.php");
$mpdf=new mPDF('utf-8', 'A4-P'); // PDF mau L lanscape P potrait


$mpdf->setFooter('{PAGENO}');// memberikan footer nomor halaman

ob_start();
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>ID Card</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="icon" href="<?php echo base_url('images/icob.ico')?>" type="image/x-icon">

<style type="text/css">
<!--
table {
  background-image: url(images/id.jpg);
}
.style1 {
  font-size: 9px;
  color: #504948;
  font-family: 'Times New Roman', sans-serif;
  font-weight: bold;
  
}
.style2 {
  color: #990000;
  font-style: italic;
}

.style3 {
  color: black;
  font-size: 12px;
  font-family: 'Times New Roman', sans-serif;
}
.style4 {
  color: black;
  font-size: 10px;
  font-family: 'Times New Roman', sans-serif;
}

.style5 {
  color: black;
  font-size: 15px;
  font-family: 'Times New Roman', sans-serif;
}
-->
</style>
</head>

<body>
    <br>
    <br>
        <br>
    <br>
    <br>
<form action="" method="post" enctype="multipart/form-data" name="form1">
 
  <div align="center">
  <?php foreach ($santri as $no): ?>
  <table height="217" width="692" border="0" cellspacing="0,5">
                
                  <tr >
                    <td width="1" height="23"></td>
                    <td width="43"></td>
                    <td colspan="2"></td>
                    <td width="60"><img src="<?php echo base_url('upload/kode/'.$no->qr) ?>" width="50" height="50"/></td>
                    <td width="361">&nbsp;</td>
                   
      </tr>
                  <tr >
                    <td height="63" >&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="2">&nbsp; </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
      </tr>
   <tr >
                    <td height="48"  >&nbsp;</td>
                    <td rowspan="2"><img src="<?php echo base_url('upload/data/'.$no->pas) ?>" width="42" height="58"/></td>
                    <td colspan="2" class="style3">&nbsp;&nbsp;<?php echo $no->nama ?> </td>
                    <td class="style1"><?php echo Date('d M Y') ?></td>
                    <td>&nbsp;</td>
      </tr>
       <tr >
                    <td height="25"  >&nbsp;</td>
                    <td width="58" class="style3">&nbsp;&nbsp;<?php echo $no->nobp ?></td>
                    <td width="136" class="style4">&nbsp;<?php echo $no->tempat ?>,&nbsp; <?php echo $no->tgll ?> </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
      </tr>
      <tr >
                    <td height="23"  >&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="2">&nbsp; </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
      </tr>               
    </table>
    ------------------------------------------------------------------------------------------------------------------------------------------------------
   
     <?php endforeach; ?>
  </div>
  
</form>
              
              

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>