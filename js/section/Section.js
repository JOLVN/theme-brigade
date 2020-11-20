/******************************
 * Import
 ******************************/
// Utils
import TransitonElement from '../utils/TransitonElement';

/******************************
 * Header
 ******************************/
class Section extends TransitonElement{
	constructor(el) {
		// Forced transition element (no priority)
		super();
		this.el = el;
	}
	/***************
	 * Transit - Call by Transtion on page leave
	 ***************/
	transit(){
		// Do whatever you want
	}
}

export default Section;
