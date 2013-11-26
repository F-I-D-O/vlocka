
	<?php require CESTA_SPODEK ?>
</div>

<?php

// vypíše bloky pro skripty - např dialogy (na stránce nebudou)
foreach ($GLOBALS['html_pro_skripty'] as $soubor_html_element){
	require $soubor_html_element;
}

?>

</body>
</html>
