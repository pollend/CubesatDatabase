// Exact copy except import UserService from core
import {OnInit, Component, Input, Output, OnChanges, EventEmitter} from '@angular/core';


import { FormBuilder, FormGroup, FormControl } from '@angular/forms';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { SatelliteService } from './../services/satellite-service';

import { Satellite } from './../models/satellite';
import { Router, ActivatedRoute, Params } from '@angular/router';



@Component({
  selector: 'satellite-form-component',
  templateUrl: 'templates/satellite-form.component.html'
})
export class SatelliteFormComponent implements OnInit{
	satellite_form : FormGroup;
	private _satellite_id: number;


	@Input()
	set satelliteId(id : number)
	{
		this._satellite_id = id;
		this.setSatelliteForm();		

		this.satelliteService.getSatellites(this._satellite_id).subscribe((satellite: Satellite)=>{

		});
	}

	@Output() 
	result: EventEmitter<Satellite> = new EventEmitter<Satellite>();
	constructor(private route: ActivatedRoute,private fb: FormBuilder, private satelliteService: SatelliteService){}

	ngOnInit() {
		this.setSatelliteForm();
	}

	private setSatelliteForm()
	{
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


