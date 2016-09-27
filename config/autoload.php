<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'zBootstrapAccordion',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'zBootstrapAccordion\AccordionWrapper'      => 'system/modules/KbBootstrapAccordion/elements/AccordionWrapper.php',
	'zBootstrapAccordion\ContentAccordion'      => 'system/modules/KbBootstrapAccordion/elements/ContentAccordion.php',
	'zBootstrapAccordion\ContentAccordionStart' => 'system/modules/KbBootstrapAccordion/elements/ContentAccordionStart.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_accordion'               => 'system/modules/KbBootstrapAccordion/templates',
	'ce_accordion_start'         => 'system/modules/KbBootstrapAccordion/templates',
	'ce_accordion_stop'          => 'system/modules/KbBootstrapAccordion/templates',
	'ce_accordion_wrapper_start' => 'system/modules/KbBootstrapAccordion/templates',
	'ce_accordion_wrapper_stop'  => 'system/modules/KbBootstrapAccordion/templates',
));
