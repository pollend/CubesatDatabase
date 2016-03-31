//angular 2 core
import {Component, OnInit} from 'angular2/core';
import {Router, RouteParams} from 'angular2/router';


@Component({
    selector: 'login',
    templateUrl: 'templates/login.component.html'
})

export class LoginComponent { 

	constructor( private _route: Router, routeParams: RouteParams) {
	}

	private login()
	{
		this._route.navigate(['UserHome']);
	}

}
