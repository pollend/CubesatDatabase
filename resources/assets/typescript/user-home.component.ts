
//angular 2 core
import {Component, OnInit} from 'angular2/core';
import {Router, RouteParams} from 'angular2/router';

//models

//components

//services

@Component({
    selector: 'user-home',
	templateUrl: 'templates/user-home.component.html',
    providers: [],
    directives: []
})


export class UserHomeComponent implements OnInit { 

	constructor( private _route: Router, routeParams : RouteParams) { 
	}

	ngOnInit() { 
	}
	
}
