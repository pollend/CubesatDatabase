// Exact copy except import UserService from core
import {OnInit, Component, Input, Output, OnChanges, EventEmitter} from '@angular/core';


import { Router, ActivatedRoute, Params } from '@angular/router';
import { SatelliteService } from './../services/satellite-service';

import { Satellite } from './../models/satellite';



@Component({
  selector: 'satellite-single-edit-component',
  templateUrl: 'templates/satellite-single-edit.component.html'
})
export class SatelliteSingleEditComponent implements OnInit{
	private satellite_id : number;

	constructor( private route: ActivatedRoute,private router: Router){

	}

	ngOnInit() {
		this.route.parent.params.subscribe(params => {
	       this.satellite_id = +params['id'];
	     });
	}
}


