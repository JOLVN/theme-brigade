/******************************
 * Import
 ******************************/
// Utils
import Emitter from './Emitter';

/******************************
 * TransitonElement
 ******************************/
class TransitonElement extends Emitter {
	constructor(priority = 9999) {
		super();
		this.ready = false;
		this.priority = priority;
	}
	transit(){
		this.transited();
	}
	transited() {
		this.emit('transited');
	}
}

export default TransitonElement;
