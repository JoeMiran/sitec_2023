
<?php


Class LibUtil {



    public static function redirecionar($pagina) {
        echo "<script>location.href='".$pagina."';</script>";
        exit();
    }
    
    
    
    public static function comecarSessao() {
        if (session_status() === PHP_SESSION_NONE)
            session_start();
    }
    
    
        
    public static function atrasar($segundos) {
        ob_end_flush();
        flush();
        sleep($segundos);
    }



}