<?php
namespace Dfe\Mailgun;
use Magento\Framework\Event\Observer as Ob;
use Magento\Framework\Event\ObserverInterface as IOb;
// 2018-01-28
final class Observer implements IOb {
	/**
	 * 2018-01-28
	 * @override
	 * @see IOb::execute()
	 * @used-by \Magento\Framework\Event\Invoker\InvokerDefault::_callObserverMethod()
	 * @param Ob $ob
	 */
	function execute(Ob $ob) {
		if (dfs($this)->enable()) {

		}
	}
}

