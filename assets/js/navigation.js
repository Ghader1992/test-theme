/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByClassName( 'menu-toggle' )[0];

	// Return early if the button doesn't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByClassName( 'nav-menu' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );
		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus classes for links with children.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'click', function( event ) {
			const parentItem = this.parentNode;
			// If the submenu is already open, and the link is clicked again, navigate to the link.
			if ( parentItem.classList.contains( 'focus' ) && this.href !== '#' && this.href !== 'javascript:void(0);' ) {
				return;
			}
			// Prevent navigation if it's a click to open submenu.
			event.preventDefault();
			toggleFocusOnClick( event );
		}, false );
	}


	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		let self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( ! self.classList.contains( 'nav-menu' ) ) {
			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				self.classList.toggle( 'focus' );
			}
			self = self.parentNode;
		}
	}

	/**
	 * Sets or removes .focus class on an element upon click.
	 * Used for sub-menu items.
	 */
	function toggleFocusOnClick( event ) {
		let self = event.target; // The clicked <a> element
		let parentLi = self.parentNode; // The <li> containing the <a> and the sub-menu <ul>

		// Toggle 'focus' class on the parent <li>
		if ( parentLi.classList.contains( 'focus' ) ) {
			parentLi.classList.remove( 'focus' );
		} else {
			// Remove 'focus' from other sibling LIs that might be open
			const parentUl = parentLi.parentNode;
			const siblingLis = parentUl.querySelectorAll( '.focus' );
			for(const li of siblingLis) {
				li.classList.remove('focus');
			}
			parentLi.classList.add( 'focus' );
		}

		// Handle aria-expanded for the clicked link
		if ( self.getAttribute( 'aria-expanded' ) === 'true' ) {
			self.setAttribute( 'aria-expanded', 'false' );
		} else {
			self.setAttribute( 'aria-expanded', 'true' );
		}
	}


	// Add focus class to parent li elements of current menu item.
	const currentMenuItems = menu.querySelectorAll( '.current-menu-item, .current_page_item' );
	for ( let i = 0; i < currentMenuItems.length; i++ ) {
		let item = currentMenuItems[i];
		while ( item && ! item.classList.contains( 'nav-menu' ) ) {
			if ( 'li' === item.tagName.toLowerCase() ) {
				item.classList.add( 'focus' );
			}
			item = item.parentNode;
		}
	}

	// Add 'has-children' class to menu items with submenus for easier styling.
	const itemsWithChildren = menu.querySelectorAll( '.menu-item-has-children, .page_item_has_children' );
	for ( let i = 0; i < itemsWithChildren.length; i++ ) {
		itemsWithChildren[i].classList.add( 'has-children' );
	}

}() );
