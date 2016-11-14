// Exact copy except import UserService from core
import { Component, OnInit }      from '@angular/core';

import { FormBuilder, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';

import {UserService} from "./../services/user-service";

@Component({
  selector: 'satellite-list',
  templateUrl: 'templates/satellite-list.component.html'
})
export class SatelliteListComponent {
	searchForm : FormGroup;

	constructor(private userService: UserService,private router: Router, fb: FormBuilder){
		

		this.searchForm = fb.group({
			'search' :'',
			'column' :''
		});	
	}
}


