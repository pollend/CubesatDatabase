// Exact copy except import UserService from core
import {OnInit, Component, Input, Output, OnChanges, EventEmitter} from '@angular/core';


import { FormBuilder, FormGroup, FormControl } from '@angular/forms';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { SatelliteService } from './../services/satellite-service';

import { Satellite } from './../models/satellite';



@Component({
  selector: 'satellite-form-component',
  templateUrl: 'templates/satellite-form.component.html'
})
export class SatelliteFormComponent implements OnInit{
	satellite_form : FormGroup;


	@Output() 
	result: EventEmitter<Satellite> = new EventEmitter<Satellite>();

	constructor(private fb: FormBuilder, private satelliteService: SatelliteService){}

	ngOnInit() {
		this.satellite_form = fb.group({
			'content' :'',
			'mass' :'',
			'cubesat_type' : '',
			'COSPAR' :'',
			'launch_vehicle' :'',
			'launch_date' :'',
			'tle' :'tle',
			'orbit' :'orbit',

		});
		
	}
}


