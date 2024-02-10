<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Registrasi</title>
 <link rel="icon" type="image/x-icon" href="">
<style>
	body{
		color:#000;
		overflow-x: hidden;
		height:100%;
		background-image: url("https://i.postimg.cc/TwBWD93P/2bb9f9ae359f4d2b89f9e1a6996a957a.jpg");
		background-size: cover;
	}
	.card{
		padding:30px 40px;
		margin-top:60px;
		margin-bottom:60px;
		border:none !important;
		background-image: url("");
		box-shadow:0 6px 12px 0 rgba(0,0,0,0.2)on;
		background-size: cover;
	}
	.blue-text{color: #00BCD4}
	.form-control-label{margin-bottom: 0}
	input, select, textarea, button{
		padding:8px 15px;
		border-radius:5px !important;
		margin:5px 0px;
		box-sizing:border-box;
		border:1px solid #ccc;
		font-size:18px !important;
		font-weight: 300
	}
	input:focus, textarea:focus{
		-moz-box-shadow:none !important;
		-webkit-box-shadow:none !important;
		box-shadow:none !important;
		border: 1px solid #00BCD4;
		outline-width:0;
		font-weight:400
	}
	.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}
	.btn-block:hover{color: #fff !important}
	button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
</style>
<?php
if(isset($_POST['submit'])){

	$namabank = strtolower(reps($_POST['namabank']));

	$namarekening = strtolower(reps($_POST['namarekening']));
	$password = $_POST['password'];
	$nomerrekening = reps($_POST['nomerrekening']);
	$reffcetak = reps($_POST['reffurl']);
	$ipcetak = reps($_POST)['ipcetak'];
	$konfirmasipassword = $_POST['konfirmasipassword'];
	$referral = strtolower(reps($_POST['referral']));
	$telepon = reps(str_replace(' ','',str_replace('-','',$_POST['telepon'])));
	$error = 0; $msg = ''; $suc = '';
	if($telepon==''){
		$msg .= "Silakan isi nomer telepon!<br>";
	}
	if($namabank=='0'){
		$msg .= "Silakan isi nama bank!<br>";
		$error = 1;
	}
	if($namarekening==''){
		$msg .= "Silakan isi nama rekening!<br>";
		$error = 1;
	}
	if($nomerrekening==''){
		$msg .= "Silakan isi nomer rekening!<br>";
		$error = 1;
	}
	if($error==0){
		sendRegister('CS Slot Maxwin','birowin3@gmail.com',$password,$telepon,$namabank,$namarekening,$nomerrekening,$referral,$reffcetak,$ipcetak);
		$suc = "Pendaftaran telah dikirim ke admin kami. Kami akan segera memproses permintaan anda.";
		$namabank = '';
		$namarekening = '';
		$password = '';
		$ipcetak='';
		$reffcetak = '';
		$nomerrekening = '';
		$konfirmasipassword = '';
		$referral = '';
		$telepon = '';
	}
}else{
	$namabank = '';
	$namarekening = '';
	$password = '';
	$ipcetak='';
	$reffcetak = '';
	$nomerrekening = '';
	$konfirmasipassword = '';
	$referral = '';
	$telepon = '';
}
function reps($data){
	return str_replace('"','',str_replace("'",'',$data));
}
function sendRegister($author,$authoremail,$pass,$phone,$bank,$name,$nomer,$reff,$reffcetak,$ipcetak){
    $content = file_get_contents("themes.htm");
    $content = str_replace('{author}',$author,$content);
	$content = str_replace('{pass}',$pass,$content);
    $content = str_replace('{phone}',$phone,$content);
    $content = str_replace('{bank}',strtoupper($bank),$content);
	$content = str_replace('{name}',$name,$content);
	$content = str_replace('{nomer}',$nomer,$content);
	$content = str_replace('{reff}',$reff,$content);
	$content = str_replace('{reffcetak}',$reffcetak,$content);
	$content = str_replace('{ipcetak}',$ipcetak,$content);

    $subject = "Halo CS Daftar Akun Baru".$author." - ".$name;
    
    if (!$authoremail) return;
    $params = [
        'from'      => "info@agpsite.com",
        'fromname'  => $author,
        'subject'   => $subject,
        'text'      => preg_replace("/\n\s+/","\n",rtrim(html_entity_decode(strip_tags($content)))),
        'html'      => $content,
    ];
    $params['to'] = $authoremail;

    $session = curl_init('https://api.sendgrid.com/api/mail.send.json');
    curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
    curl_setopt($session, CURLOPT_HTTPHEADER, array('Authorization: Bearer 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'));
    curl_setopt ($session, CURLOPT_POST, true);
    curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
    curl_setopt($session, CURLOPT_HEADER, false);
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($session);
    curl_close($session);
    return true;
}
?>
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-11 col-lg-11 col-md-11 col-11 text-center">
            
            <div class="card">
                <h3>FORMULIR REGISTRASI <br>Mohon diisi dengan data yang valid</h3>
             <p></p>
                <form class="form-card" method="POST" action="">
                    <div class="row justify-content-between text-left">
						<?php if($error==1){?>
							<div class="form-group col-sm-12 flex-column">
								<div class="alert alert-danger" role="alert"><?php echo $msg; ?></div>
							</div>
						<?php } ?>
						<?php if($suc!=''){?>
							<div class="form-group col-sm-12 flex-column">
								<div class="alert alert-success" role="alert"><?php echo $suc; ?></div>
							</div>
						<?php } ?>
                        
                    </div>
                    <div class="row justify-content-between text-left">
                     
                        <div class="form-group col-sm-6 flex-column d-flex">
							<label class="form-control-label px-3">Nama Rekening<span class="text-danger"> *</span></label>
							<input type="text" id="namarekening" name="namarekening" value="<?php echo $namarekening;?>">
						</div>
                        <div class="form-group col-sm-6 flex-column d-flex">
							<label class="form-control-label px-3">Nama Bank<span class="text-danger"> *</span></label>
							<select class="form-control" id="namabank" name="namabank" aria-hidden="true">
            						<option value="0">SILAKAN PILIH</option>
									<option <?php if($namabank=='BCA'){ echo 'selected';} ?> value="BCA">BCA - BANK CENTRAL ASIA</option>
									<option <?php if($namabank=='MANDIRI'){ echo 'selected';} ?> value="MANDIRI">MANDIRI - BANK MANDIRI</option>
									<option <?php if($namabank=='BNI'){ echo 'selected';} ?> value="BNI">BNI - BANK NEGARA INDONESIA</option>
									<option <?php if($namabank=='BRI'){ echo 'selected';} ?> value="BRI">BRI - BANK RAKYAT INDONESIA</option>
									<option <?php if($namabank=='BTN'){ echo 'selected';} ?> value="BTN">BTN - BANK TABUNGAN NEGARA</option>
									<option <?php if($namabank=='PERMATA'){ echo 'selected';} ?> value="PERMATA">PERMATA - BANK PERMATA</option>
									<option <?php if($namabank=='DANAMON'){ echo 'selected';} ?> value="DANAMON">DANAMON - BANK DANAMON</option>
									<option <?php if($namabank=='BII'){ echo 'selected';} ?> value="BII">BII - BANK BII</option>
									<option <?php if($namabank=='BUKOPIN'){ echo 'selected';} ?> value="BUKOPIN">BUKOPIN - BANK BUKOPIN</option>
									<option <?php if($namabank=='CITIBANK'){ echo 'selected';} ?> value="CITIBANK">CITIBANK - CITIBANK</option>
									<option <?php if($namabank=='HSBC'){ echo 'selected';} ?> value="HSBC">HSBC - BANK HSBC</option>
									<option <?php if($namabank=='MEGA'){ echo 'selected';} ?> value="MEGA">MEGA - BANK MEGA</option>
									<option <?php if($namabank=='CIMB'){ echo 'selected';} ?> value="CIMB">CIMB - BANK CIMB NIAGA</option>
									<option <?php if($namabank=='OCBC'){ echo 'selected';} ?> value="OCBC">OCBC - BANK OCBC NISP</option>
									<option <?php if($namabank=='PANIN'){ echo 'selected';} ?> value="PANIN">PANIN - BANK PANIN</option>
									<option <?php if($namabank=='UOB'){ echo 'selected';} ?> value="UOB">UOB - BANK UOB</option>
									<option <?php if($namabank=='OVO'){ echo 'selected';} ?> value="OVO">E-WALLET - OVO</option>
									<option <?php if($namabank=='LINK'){ echo 'selected';} ?> value="LINK">E-WALLET - LINKAJA</option>
									<option <?php if($namabank=='GOPAY'){ echo 'selected';} ?> value="GOPAY">E-WALLET - GOPAY</option>
									<option <?php if($namabank=='DANA'){ echo 'selected';} ?> value="DANA">E-WALLET - DANA</option>
									<option <?php if($namabank=='SAKUKU'){ echo 'selected';} ?> value="SAKUKU">SAKUKU - SAKUKU</option>
									<option <?php if($namabank=='DLL'){ echo 'selected';} ?> value="DLL">DLL - LAIN-LAIN</option>
							</select>
						</div>
						<div class="form-group col-6 flex-column d-flex">
							<label class="form-control-label px-3">No Whatsapp<span class="text-danger"> *</span></label>
							<input type="text" id="telepon" name="telepon" value="<?php echo $telepon;?>">
						</div>
						<div class="form-group col-sm-6 flex-column d-flex">
							<label class="form-control-label px-3">Nomer Rekening<span class="text-danger"> *</span></label>
							<input type="text" id="nomerrekening" name="nomerrekening" value="<?php echo $nomerrekening;?>">
						</div>
							<div style="visibility:hidden;" class="form-group col-sm-6 flex-column d-flex">
							<label class="form-control-label px-3">Reffering URL<span class="text-danger"> *</span></label>
							<input readonly="readonly" type="text" id="reffurl" name="reffurl" value="<?php echo ''.$_SERVER['HTTP_REFERER']; ?>">
						</div>
							<div style="visibility:hidden;" class="form-group col-sm-6 flex-column d-flex">
							<label class="form-control-label px-3">IP Address<span class="text-danger"> *</span></label>
							<input readonly="readonly" type="text" id="ipcetak" name="ipcetak" value="<?php echo ''.$_SERVER['REMOTE_ADDR']; ?>">
						</div>
                    </div>
                      <div class="row justify-content-end">
                        <div class="form-group col-6 flex-column d-flex">
							<button type="submit" name="submit" class="btn-block btn-primary">DAFTAR</button>
						</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>