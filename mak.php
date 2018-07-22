<?php
       class semvak
       {
       public $token;
       public $id;
       private function xstring($string,$start,$end)
       {
       $str = explode($start,$string);
       $str = explode($end,$str[1]);
       return $str[0];
       }
       private function xaccess($url)
       {
       $ch = curl_init($url);
       curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
       curl_setopt($ch,CURLOPT_REFERER,$url);         
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
       curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36');
       curl_setopt($ch,CURLOPT_COOKIEFILE,'m.txt');
       curl_setopt($ch,CURLOPT_COOKIEJAR,'m.txt');            
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       $body = curl_exec($ch);
       $info = curl_getinfo($ch);
       $redir = $info['redirect_url'];
       $redirect = $redir;
       return $body;
       }
       private function copyright()
       {
       $w = 'success...<br>';
       echo $w;
       }
       private function getCaptcha($lokasi)
       {
       $ch = curl_init($lokasi);
       curl_setopt($ch,CURLOPT_COOKIEJAR,'m.txt');       
       curl_setopt($ch,CURLOPT_COOKIEFILE,'m.txt');       
       curl_setopt($ch,CURLOPT_COOKIESESSION,true);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch,CURLOPT_REFERER,$lokasi);
       curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.52 Safari/537.36');
       curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
       curl_setopt($ch,CURLOPT_HEADER,0);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       $y = curl_exec($ch);
       $tmpFile = uniqid();
       $file = $tmpFile.'.png';
       $x = fopen($file,"w");
       fwrite($x,$y);
       fclose($x);
       $up = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/'.$file;
      $xa = file_get_contents('http://ocr.dyrk.org/ocr.php?png='.$up); //API
      unlink($file);
      return $xa;
      curl_close($ch);
      }
      private function Submit($url,$fields)
      {
      $field_string = http_build_query($fields);
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
      curl_setopt($ch,CURLOPT_REFERER,$url);          
      curl_setopt($ch,CURLOPT_TIMEOUT,5);      
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.52 Safari/537.36');
      curl_setopt($ch,CURLOPT_COOKIEFILE,'m.txt');
      curl_setopt($ch,CURLOPT_COOKIEJAR,'m.txt');
      curl_setopt($ch, CURLOPT_POST, count($field_string));
      curl_setopt($ch,CURLOPT_POSTFIELDS,$field_string);   
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $body = curl_exec($ch);
      if(!curl_errno($ch)){
      $info = curl_getinfo($ch);
      $redir = $info['redirect_url'];
      $code = $info['http_code'];
      curl_close($ch);
      return $redir." <br> Dengan Code = ".$code."";
      }
      unlink("mu.txt");
      curl_close($ch);
      }
      private function a()
      {
      $II = "https://likerbrasil.com/logar/token#log";
      $III = array(
      "null" => "null",
      );
      $III = array(
      "token" => $this->token,
      "submit" => "Logar no Sistema",
      );
      $IIII = "https://likerbrasil.com/app/like/".$this->id;
      $IIIII = array(
   "gender" => "all",
   "rangeInput" => "80",
   "id" => $this->id,
   "action" => "like",
   "type" => "POST",
   "goSender" => "Enviar Reacoes",
      );
      echo $this->Submit($II,$III);
      echo "<br>";
      echo $this->Submit($IIII,$IIIII);
      echo "<hr>";
      }
private function b()
      {
      $II = "https://brasilliker.com.br/logar/token#log";
      $III = array(
      "null" => "null",
      );
      $III = array(
      "token" => $this->token,
      "submit" => "Logar no Sistema",
      );
      $IIII = "https://brasilliker.com.br/app/like/".$this->id;
      $IIIII = array(
   "gender" => "all",
   "rangeInput" => "80",
   "id" => $this->id,
   "action" => "like",
   "type" => "POST",
   "goSender" => "Enviar Reacoes",
      );
      echo $this->Submit($II,$III);
      echo "<br>";
      echo $this->Submit($IIII,$IIIII);
      echo "<hr>";
      }
      private function c()
{
$II = "https://sidoliker.xyz/cek_token.php?access=".$this->token;
$III = array(
"null" => "null",
);
$IIII = "https://sidoliker.xyz/autoliker.php?type=status";
$IIIII = array(
"id" => $this->id,
"submit" => "Submit",
);
echo $this->Submit($II,$III);
echo "<br>";
echo $this->Submit($IIII,$IIIII);
      echo "<hr>";
      }
      public function SADAP()
      {
      ignore_user_abort(true);
      while (@ob_end_flush());      
      ob_implicit_flush(true);
      echo $this->copyright();
      echo $this->a();
      echo $this->b();
      echo $this->c();
      break;
   }
}   
$try = new semvak;
$try->token=$_GET["access_token"];
$try->id=$_GET["id"];
$try->SADAP();
?>