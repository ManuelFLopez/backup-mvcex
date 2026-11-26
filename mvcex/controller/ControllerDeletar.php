<?php
require_once __DIR__ . '/../model/banco.php';
class deleta {
    private $deleta;

    public function __construct($id){
        $this->deleta = new Banco();
        if($this->deleta->deleteLivro($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='".APP_URL."/view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deleta(isset($_GET['id']) ? $_GET['id'] : '');
?>
