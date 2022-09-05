<?php
namespace AjdAddRules;

use AJD_validation\Contracts\Validation_provider;

class AjdAdditionalRulesServiceProvider extends Validation_provider
{
	/**
     * Registers this packages custom rules -> exceptions, macros, logics, filters, validations, extensions.
     *
     * @return void
     */
	
	public function register()
	{
		$this
			->setDefaults([
				'baseDir' => __DIR__,
				'baseNamespace' => __NAMESPACE__
			])
			->registerRulesMapping($this->getRulesMappingDirectory())
			->addLangStubs(__DIR__.DIRECTORY_SEPARATOR.'lang'.DIRECTORY_SEPARATOR.'lang.stubs');
	}
}