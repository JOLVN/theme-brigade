/******************************
 * Import
 ******************************/
// Components
import Link from '../components/Link';

/******************************
 * Transition
 ******************************/
class Transition {
	constructor() {
		// Register links for transition
		this.registerLinks(document);
	}
	registerLinks(el){
		el.querySelectorAll('a:not([data-ignore]), a[data-ignore=""]').forEach((a) => {
			let link = new Link(a);
			link.on('navigate', (e) => this.transit(e.href));
		});
	}
	registerTransitionElement(transitionElements) {
		// Add transition elements (transit depending ready and priority)
		this.transitionElements = this.transitionElements || [];
		if(transitionElements) {
			if (!Array.isArray(transitionElements)) {
				this.transitionElements.push(transitionElements);
			} else {
				this.transitionElements.concat(transitionElements);
			}
		}
	}
	registerForcedElement(forcedElements){
		// Add forced elements (always transit)
		this.forcedElements = this.forcedElements || [];
		if(forcedElements) {
			if (!Array.isArray(forcedElements)) {
				this.forcedElements.push(forcedElements);
			} else {
				this.forcedElements.concat(forcedElements);
			}
		}
	}
	/***************
	 * Transit
	 ***************/
	transit(href){
		// Find the better transiton element (ready + priority)
		const transitionElement = this.transitionElements.filter((transitionElement) => transitionElement.ready).sort((transitionElementA, transitionElementB) => transitionElementA.priority - transitionElementB.priority)[0];
		if(transitionElement) {
			// Transit
			transitionElement.on('transited', () => this.navigate(href));
			transitionElement.transit();

			// Force forced elements to transit
			this.forcedElements.forEach((forcedElement) => {
				forcedElement.transit();
			});
			return;
		}
		// If no transiton element, direct navigate
		this.navigate(href);
	}
	navigate(href){
		window.location = href;
	}
}

export default Transition;
