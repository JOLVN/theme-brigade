/******************************
 * Import
 ******************************/
// Utils
import TransitonElement from '../utils/TransitonElement';

/******************************
 * Header
 ******************************/
class Header extends TransitonElement {
	constructor(el) {
		// Priority 1 transition element
		super(1);
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

export default Header;
