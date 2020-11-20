/******************************
 * Import
 ******************************/
// External
import mitt from 'mitt';

/******************************
 * Emitter
 ******************************/
class Emitter {
	constructor() {
		const emitter = mitt();
		Object.keys(emitter).forEach((method) => {
			this[method] = emitter[method];
		});
	}
}

export default Emitter;
