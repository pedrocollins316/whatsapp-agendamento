<?php
/**
 * Plugin Name: Agendamento via Whatsapp 
 * Descriptio: Este plugin possibilita p agendamento via whatsapp
 * Version: 0.1
 * Author: Pedro Henrique
 * Author URI: https://rkms.com.br
 **/

function orcamento_whatsapp(){ 

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $produto = $_POST['produto'];

    $texto_whats = "Olá meu nome é *" . $nome . "* desejo um orçamento para o " .$produto . " Meu e-mail é  ".  $email;

    $msg_whats = str_replace(' ', '%20', $texto_whats);

    $action_url = "http://api.whatsapp.com/send?1=pt_BR&phone=5533987113604&text=$msg_whats";


    ?>

    <?php if(isset($_POST['submit'])){ ?>
        <script type="text/javascript">
        window.location = "<?php echo $action_url; ?>";
        </script>
        <?php } ?>    

    <form action="" method="post">
    <label for="">Nome</label>
    <input type="text" name="nome">

    <label for="">Email</label>
    <input type="text" name="meu_email">

    <label for="">Qual produto voocê quer comprar</label>
    <select name="produto" id="">
        <option value="curso de WordPress"></option>
        <option value="quero aprender a criar plugins"></option>
        <option value="quero aprender a criar temas"></option>    
    </select>

    <input type="submit" value="Pedir Orçamento">
    </form>

<?php
}
add_shortcode('orcamento','orcamento_whatsapp');