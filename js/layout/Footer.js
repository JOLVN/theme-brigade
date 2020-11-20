/******************************
 * Import
 ******************************/
// Utils
import TransitonElement from '../utils/TransitonElement';

/******************************
 * Header
 ******************************/
class Footer extends TransitonElement {
	constructor(el) {
		// Priority 2 transition element
		super(2);
		this.el = el;
	}
	/***************
	 * Transit - Call by Transiton on page leave if this.ready and higher priority
	 ***************/
	transit(){
		// Do whatever you want then call transited
		this.transited();
	}
}

export default Footer;
