//Foi adicionado dois elements no default e um deles tem um parametro chamado conteudo.
    <body bgcolor="#FFFFFF" leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 background="img/hp/base/bg_body.gif">
        <table id="Table_01" width=780 height=610 border=0 cellpadding=0 cellspacing=0 align="center" style="border-right:1px solid #000000; border-left:1px solid #000000;" background="img/hp/base/bg_table.gif">
            <?php echo $this->element('topo')?>
            <?php echo $this->fetch('content'); ?>
            <?php echo $this->element('rodape', array('conteudo'=>'Evento fict&iacute;cio. Foi desenvolvido com Framework CakePHP'))?>
        </table>
    </body>
