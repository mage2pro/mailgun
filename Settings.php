<?php
namespace Dfe\Mailgun;
# 2018-01-28
/** @method static Settings s() */
final class Settings extends \Df\Config\Settings {
	/**
	 * 2018-01-28
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 */
	protected function prefix():string {return 'df_mail/mailgun';}
}