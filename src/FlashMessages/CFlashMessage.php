<?php

namespace Yvos\FlashMessages;

/**
 * Class to generate and display flashmessages.
 * 
 * @Author Yvonne Johansson.
 */
class CFlashMessage {
	
	use \Anax\DI\TInjectable;
	
	/**
	 * Add message to session
	 * 
	 * @param string $message to be shown
	 * @param string $type set the class name
	 * @return void 
	 */
	public function addMessage($message, $type) {
		
		$flashmessages = $this->session->get('flashmessages');
		
		$flashmessage = [
			'message' => $message,
			'type'	  => $type,
			];
		
		$flashmessages[] = $flashmessage;
		
		$this->session->set('flashmessages', $flashmessages);
	}
	
	
	/**
	 * Message of type error
	 * 
	 * @param string $message to be shown
	 * @return void 
	 */
	public function error($message) {
		$this->addMessage($message, 'error');
	}
	
	
	/**
	 * Message of type success
	 * 
	 * @param string $message to be shown
	 * @return void 
	 */
	public function success($message) {
		$this->addMessage($message, 'success');
	}  
	
	
	/**
	 * Message of type notice
	 * 
	 * @param string $message to be shown
	 * @return void 
	 */
	public function notice($message) {
		$this->addMessage($message, 'notice');
	} 
	
	
	/**
	 * Message of type warning
	 * 
	 * @param string $message to be shown
	 * @return void 
	 */
	public function warning($message) {
		$this->addMessage($message, 'warning');
	}
	
	
	/**
	 * Custom message
	 * 
	 * @param string $message to be shown
	 * @param string $type set the class name
	 * @return void 
	 */
	public function message($message, $type="eget") {
		$this->addMessage($message, $type);
	}  
	
	
	/**
	 * Delete messages from session array
	 *
	 * @return void
	 */
	public function deleteMessage() {
		
		$this->session->set('flashmessages', []);
	}
	
	/**
	 * View messages
	 *
	 *@return string as html
	 */
	public function getMessage() {
		
		$flashmessages = $this->session->get('flashmessages');
		
		$html = "<div id='flash'>";
		
		if($flashmessages) {
			
			foreach($flashmessages as $message) {
				$html .= "<p class='" . $message['type'] . "'>" . $message['message'] . "</p>";
			}
		}
		
		$html .= "</div>";
		
		$this->deleteMessage();
		
		return $html;
	}
}


