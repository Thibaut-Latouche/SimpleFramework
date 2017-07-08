<?php
class Outils {

    public function session_setValue($key, $value) {
        $_SESSION[SESSION_NAME][$key] = $value;
    }

    public function session_getValue($key) {
        return $_SESSION[SESSION_NAME][$key];
    }

    public static function filter($string, $flag) {
        switch ($flag) {
            case $flag:
                return filter_var($string, $flag);
                break;
            default:
                return "";
        }
    }

    public static function loadDictionnary($lang = LANG_APP) {
        $dico = null;
        $file = fopen(DICTIONNARY_REPOSITORY . "dictionnary_" . $lang . ".txt", "r");
        while (($str = fgets($file, 4096)) !== false) {
            $item = explode("|", $str);
            $dico[$item[0]] = strval($item[1]);
        }
        return $dico;
    }

    public static function getFirstObject($arrayObjects, $throwException = false) {
        if (is_null($arrayObjects)) {
            if ($throwException) {
                throw new Exception("ELEMENT_IS_EMPTY");
            } else {
                return null;
            }
        } else {
            return $arrayObjects[0];
        }
    }

    public static function isValidTimeStamp($timestamp) {
        return ((string) (int) $timestamp === $timestamp) && ($timestamp <= PHP_INT_MAX) && ($timestamp >= ~PHP_INT_MAX);
    }

    public static function verifyDsiToken() {
        $headers = apache_request_headers();
        if (!isset($headers["Authorization"])) {
            throw new Exception("TOKEN_IS_EMPTY");
        }
        $token = $headers["Authorization"];
        if ($token != DSI_ETP_TOKEN) {
            throw new Exception("TOKEN_IS_NOT_VALID");
        }
    }
    
    public static function writeLogHooks($nameHook,$nodeId , $resp = null){
        $content  = "===========================\n";
        $content .= date("Y-m-d H:i:s")."\n";
        $content .= $nameHook." => node ID : ".$nodeId."\n";
        $content .= json_encode($resp)."\n";
        $content .= "=========================\n\n";
        file_put_contents(LOG_REPOSITORY."log_hook", $content, FILE_APPEND);
    }
    
     public static function sendMailGroup($message, $arrayReceivers){
      foreach($arrayReceivers as $itemMail){
        Outils::mailToWithMessage($itemMail,$message);
      }
    }

    public static function mailToWithMessage($to,$message){
      $to      = $to;
      $subject = "Supervision des objets - La Roseraie";
      $message = $message;
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: laroseraie@dsinstruments.fr' . "\r\n" .
      'Reply-To: webmaster@example.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
      mail($to, $subject, $message, $headers);
    }

    public static function makeMessageMailHTML($arrDetailErr){
      $message = "
    	<!DOCTYPE html>
           <html>
          <head>
    	<meta charset='utf-8'>
            <title>Dysfonctionnements potentiels d'objets detected</title>
          </head>
          <body>
            <p>
              Nombre d'objet semblant avoir un dysfonctionnement : ".round(count($arrDetailErr)/2)."
            </p>
            <table>
              <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>TYPE</th>
                <th>GUID</th>
                <th>SNR</th>
                <th>RSSI</th>
                <th>LAST INDEX</th>
                <th>BATTERY</th>
                <th>DATE STATUS</th>
                <th>DATE INDEX</th>
                <th>DIAGNOSTIC</th>
              <//tr>";
        foreach($arrDetailErr as $itemErr){
            $dataStatus = json_decode($itemErr->superviseAggregator->data,true);
            $message .="
                <tr>
                    <td>".$itemErr->id."</td>                    
                    <td>".$itemErr->name."</td> 
                    <td>".$itemErr->type."</td>                    
                    <td>".$itemErr->getGuidBaseTen()."</td>
                    <td>".$dataStatus["snr"]."</td>                    
                    <td>".$dataStatus["rssi"]."</td>                                      
                    <td>".$itemErr->lastIndex->data."</td> 
                    <td>".$dataStatus["battery"]."</td>                    
                    <td>".$itemErr->superviseAggregator->getFrenchFormatLasDateObj()."</td>                    
                    <td>".$itemErr->lastIndex->getFrenchFormatLasDateObj()."</td>                    
                    <td><b>".Supervise::makeHighLevelDiagnostic($itemErr)."</b></td>
                </tr>";
        }
        $message .="
            </table>
          </body>
        </html>
      ";
      return $message;
    }

}

?>