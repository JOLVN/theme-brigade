/******************************
 * Import
 ******************************/
// Polyfill
import "core-js/stable";
import "regenerator-runtime/runtime";

// Utils
import Transiton from './utils/Transiton';

// Layout
import Header from './layout/Header';
import Footer from './layout/Footer';

// Section
import Section from './section/Section';

// Components

/******************************
 * Polyfill (for each for non compat navs)
 ******************************/
if ('NodeList' in window && !NodeList.prototype.forEach) {
	NodeList.prototype.forEach = function (callback, thisArg) {
		thisArg = thisArg || window;
		for (var i = 0; i < this.length; i++) {
			callback.call(thisArg, this[i], i, this);
		}
	};
}


/******************************
 * Register layouts / sections and components
 ******************************/
document.addEventListener('DOMContentLoaded', () => {

	/******************************
	 * Transiton engine
	 ******************************/
	const transiton = new Transiton();

	/******************************
	 * Layout
	 ******************************/
	// Header
	if (document.querySelector('.header')) {
		const header = new Header(document.querySelector('.header'));
		transiton.registerTransitionElement(header);
	}

	// Footer
	if (document.querySelector('.footer')) {
		const footer = new Footer(document.querySelector('.footer'));
		transiton.registerTransitionElement(footer);
	}

	/******************************
	 * Sections
	 ******************************/
	// Section sections
	document.querySelectorAll('.section').forEach((sectionEl) => {
		const section = new Section(sectionEl);
		transiton.registerForcedElement(section);
	});

	/******************************
	 * Components
	 ******************************/
});
