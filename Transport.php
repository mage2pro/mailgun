<?php
namespace Dfe\Mailgun;
use Magento\Framework\Exception\MailException;
use Magento\Framework\Mail\MessageInterface as IMessage;
use Magento\Framework\Mail\TransportInterface as ITransport;
// 2018-01-28
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Transport implements ITransport {
	/**
	 * 2018-01-28
	 * @override
	 * @see ITransport::getMessage()
	 * @return IMessage
	 */
	function getMessage() {return null;}

	/**
	 * 2018-01-28
	 * @override
	 * @see ITransport::getMessage()
	 * @return void
	 * @throws MailException
	 */
	function sendMessage() {}
}