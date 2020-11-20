/******************************
 * Import
 ******************************/
// Utils
import Emitter from '../utils/Emitter';

/******************************
 * Link
 ******************************/
class Link extends Emitter {
	constructor(el) {
		super();
		this.el = el;
		this.init();
	}

	init(){
		// Only when target != blank
		if(this.el.getAttribute('target') !== '_blank'){
			// Get color and link
			this.href = this.el.getAttribute('href') || '';
			this.el.addEventListener('click', (e) => this.click(e));
		}
	}
	click(e){
		e.preventDefault();
		e.stopPropagation();

		// Trigger link to Transition
		this.emit('navigate', {href: this.href});
	}
}

export default Link;
