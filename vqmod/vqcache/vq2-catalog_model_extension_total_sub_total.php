<?php
class ModelExtensionTotalSubTotal extends Model {
	
            public function getTotal($total, $vendor_id = null) {
				$this->load->language('extension/total/sub_total');

				if ($vendor_id != null) {
					$sub_total = $this->cart->getSubTotal($vendor_id);
				} else {
					$sub_total = $this->cart->getSubTotal();
				}
            




		if (!empty($this->session->data['vouchers'])) {
			foreach ($this->session->data['vouchers'] as $voucher) {
				$sub_total += $voucher['amount'];
			}
		}

		$total['totals'][] = array(
			'code'       => 'sub_total',
			'title'      => $this->language->get('text_sub_total'),
			'value'      => $sub_total,
			'sort_order' => $this->config->get('sub_total_sort_order')
		);

		$total['total'] += $sub_total;
	}
}
