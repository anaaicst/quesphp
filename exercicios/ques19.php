<?php
$velocidade = 11;
$cansada = "SIM";
$chovendo = "NÃO";

if ($velocidade < 10) {
    echo "sua velocidade está baixa, a raposa não pode atravessar";
} elseif ($velocidade > 20) {
    echo "sua velocidade está muito alta, a raposa não pode atravessar";
} elseif ($cansada == "SIM" and  $velocidade > 15) {
    echo " velocidade inadequada, a raposa está cansada não pode passar de 15km";
} elseif ($chovendo == "SIM" and $velocidade > 12) {
    echo " velocidade inadequada, está chovendo a raposa não pode passar de 12km";
} else {
    echo " velocidade adequada, a raposa pode atravessar";
}
