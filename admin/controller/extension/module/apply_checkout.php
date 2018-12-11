<?php
class ControllerExtensionModuleApplyCheckout extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/apply_checkout');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_apply_checkout', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/apply_checkout', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/apply_checkout', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_apply_checkout_status'])) {
			$data['module_apply_checkout_status'] = $this->request->post['module_apply_checkout_status'];
		} else {
			$data['module_apply_checkout_status'] = $this->config->get('module_apply_checkout_status');
		}

		if (isset($this->request->post['module_apply_checkout_coupon'])) {
			$data['module_apply_checkout_coupon'] = $this->request->post['module_apply_checkout_coupon'];
		} else {
			$data['module_apply_checkout_coupon'] = $this->config->get('module_apply_checkout_coupon');
		}

		if (isset($this->request->post['module_apply_checkout_voucher'])) {
			$data['module_apply_checkout_voucher'] = $this->request->post['module_apply_checkout_voucher'];
		} else {
			$data['module_apply_checkout_voucher'] = $this->config->get('module_apply_checkout_voucher');
		}

		if (isset($this->request->post['module_apply_checkout_reward'])) {
			$data['module_apply_checkout_reward'] = $this->request->post['module_apply_checkout_reward'];
		} else {
			$data['module_apply_checkout_reward'] = $this->config->get('module_apply_checkout_reward');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/apply_checkout', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/apply_checkout')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}