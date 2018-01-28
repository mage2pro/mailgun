<?php
namespace Dfe\Mailgun;
use Magento\Framework\Exception\MailException;
// 2018-01-28
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Transport extends \Df\Framework\Mail\Transport {
	/**
	 * 2018-01-28
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @override
	 * @see \Magento\Framework\Mail\TransportInterface::getMessage()
	 * @return void
	 * @throws MailException
	 */
	function sendMessage() {}
}