<?php
namespace Dfe\Mailgun\Observer;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
// 2018-01-28
final class Transport implements ObserverInterface {
	/**
	 * 2018-01-28
	 * @override
	 * @see ObserverInterface::execute()
	 * @used-by \Magento\Framework\Event\Invoker\InvokerDefault::_callObserverMethod()
	 * @param Observer $ob
	 */
	function execute(Observer $ob) {
		if (dfs($this)->enable()) {

		}
	}
}

