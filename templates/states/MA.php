<?php

/**
 * Regions du Maroc
 * - 12 Regions
 * 
 * Source: 
 * - https://fr.wikipedia.org/wiki/Regions_du_Maroc
 *
 * @author  Anas Ait Khali <aitkhali.anas@outlook.com> | https://lehealthystore.ma
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['MA'] = array(
	'01' => 'TANGER-TETOUAN-AL HOCEIMA',
	'02' => 'ORIENTAL',
	'03' => 'FES-MEKNES',
	'04' => 'RABAT-SALE-KENITRA',
	'05' => 'BENI MELLAL-KHENIFRA',
	'06' => 'CASABLANCA-SETTAT',
	'07' => 'MARRAKECH-SAFI',
	'08' => "DRAA-TAFILALET",
	'09' => 'SOUSS-MASSA',
	'10' => 'GUELMIM-OUED NOUN',
	'11' => 'LAAYOUNE-SAKIA EL HAMRA',
	'12' => 'DAKHLA-OUED EDDAHAB',
);

// Use this filter to handle the Governorates of Jordan
$states['MA'] = apply_filters('scpwoo_custom_states_ma', $states['MA']);
