<?php 
/**
* @file config.php
* @author Katrin Beutler
* @version 3.5.6
* @package kb.contao.extensions.ce
* @copyright Katrin Beutler
*/


$GLOBALS['TL_CTE']['accordion']['accordion_wrapper_start'] = 'AccordionWrapper';
$GLOBALS['TL_CTE']['accordion']['accordion_wrapper_stop'] = 'AccordionWrapper';

//extend classes
$GLOBALS['TL_CTE']['accordion']['accordionStart'] = 'ContentAccordionStart';
$GLOBALS['TL_CTE']['accordion']['accordionSingle'] = 'ContentAccordion';

$GLOBALS['TL_WRAPPERS']['start'][] = 'accordion_wrapper_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'accordion_wrapper_stop';
