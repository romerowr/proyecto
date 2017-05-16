<footer>
    <div id="foot">
        <div class="logo">the·fancy·cards</div>
        <a><h7>Sobre Nosotros</h7></a><a><h7>Privacidad</h7></a><a><h7>Términos y Condiciones</h7></a><a><h7>Aviso Legal</h7></a><div id="redes">
        <a><img src="pub/img/redesSociales/facebookGris.png" onmouseover="this.src='pub/img/redesSociales/facebookColor.png'" onmouseout="this.src='pub/img/redesSociales/facebookGris.png'"></a>
        <a><img src="pub/img/redesSociales/twitterGris.png" onmouseover="this.src='pub/img/redesSociales/twitterColor.png'" onmouseout="this.src='pub/img/redesSociales/twitterGris.png'"></a>
        <a><img src="pub/img/redesSociales/googleGris.png" onmouseover="this.src='pub/img/redesSociales/google.png'" onmouseout="this.src='pub/img/redesSociales/googleGris.png'"></a>
        </div>
    </div>
    <div id="er"><h7>© 2017 ProyectoToniAlex. All Rights Reserved.</h7>	
    <?= $this->version; ?>
    <?= $this->title; ?>
    <?php if(isset($this->msg)){
	echo $this->msg;
    }?>
        </div>
</footer>
</body>
</html>